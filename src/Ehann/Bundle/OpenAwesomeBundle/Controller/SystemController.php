<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Controller;

use Ehann\Bundle\WebServiceBundle\Response\WebServiceResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class SystemController extends Controller
{
    public $esParams;

    public function __construct()
    {
        $this->esParams = array(
            'index' => 'open-awesome',
            'type' => 'system',
        );
    }

    public function indexAction(Request $request)
    {
        if (!$request->query->has('q')) {
            throw new BadRequestHttpException('"q" parameter is required');
        }
        $this->esParams['_source'] = $request->query->has('component') ? $request->query->get('component') : '*';
        $this->esParams['body']['query']['queryString']['query'] = $request->query->has('q');
        $queryResponse = $this->get('ehann_open_awesome.elasticsearch_client')->search($this->esParams);
        return new WebServiceResponse($queryResponse);
    }

    public function getAction($id, $component)
    {
        $this->esParams['id'] = $id;
        $this->esParams['_source'] = $component;
        $document = $this->get('ehann_open_awesome.elasticsearch_client')->get($this->esParams);
        return new WebServiceResponse($document);
    }
}
