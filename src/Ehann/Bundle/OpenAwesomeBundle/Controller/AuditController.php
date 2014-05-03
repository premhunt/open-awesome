<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Controller;

use Ehann\Bundle\WebServiceBundle\Response\WebServiceResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class AuditController extends Controller
{
    public $esParams;

    public function __construct()
    {
        $this->esParams = array(
            'index' => 'open-awesome'
        );
    }

    /**
     * @return \Elasticsearch\Client
     */
    function getElasticsearch()
    {
        return $this->get('ehann_open_awesome.elasticsearch_client');
    }

    /**
     * @param Request $request
     * @return WebServiceResponse
     * @throws \Symfony\Component\HttpKernel\Exception\BadRequestHttpException
     */
    public function indexAction(Request $request)
    {
        if (!$request->query->has('q')) {
            throw new BadRequestHttpException('"q" parameter is required');
        }
        $this->esParams['type'] = $request->query->has('component') ? $request->query->get('component') : '';
        $this->esParams['body']['query']['queryString']['query'] = $request->query->get('q');
        $queryResponse = $this->getElasticsearch()->search($this->esParams);
        return new WebServiceResponse($queryResponse);
    }

    /**
     * @param $component
     * @param $id
     * @return WebServiceResponse
     */
    public function getAction($component, $id)
    {
        $this->esParams['id'] = $id;
        $this->esParams['type'] = $component;
        $document = $this->getElasticsearch()->get($this->esParams);
        return new WebServiceResponse($document);
    }

    /**
     * @param Request $request
     * @return WebServiceResponse
     * @throws \Symfony\Component\HttpKernel\Exception\BadRequestHttpException
     */
    public function postAction(Request $request)
    {
        $simpleXmlContent = simplexml_load_string($request->getContent());
        $content = json_decode(json_encode($simpleXmlContent), true);
        if (!array_key_exists('sys', $content) || !array_key_exists('uuid', $content['sys'])) {
            throw new BadRequestHttpException('sys:uuid is required');
        }
        $uuid = $content['sys']['uuid'];
        $params = $this->esParams;
        foreach ($content as $type => $component) {
            if ($type === 'software') {
                $params['type'] = 'software_package';
                foreach ($component as $packages) {
                    foreach ($packages as $package) {
                        $package['uuid'] = $uuid;
                        $params['body'][] = array('index' => array());
                        $params['body'][] = $package;
                    }
                }
            } else {
                $params['body'][] = array('index' => array('_id' => $uuid));
                $params['body'][] = array($type => $component);
            }
        }
        return new WebServiceResponse($this->getElasticsearch()->bulk($params));
    }
}
