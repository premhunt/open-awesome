<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Controller;

use Ehann\Bundle\WebServiceBundle\Response\WebServiceResponse;
use Elasticsearch\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class SystemController extends Controller
{
    public function indexAction(Request $request)
    {
        if (!$request->query->has('q')) {
            throw new BadRequestHttpException('"q" parameter is required');
        }
        $component = $request->query->has('component') ? $request->query->get('component') : '*';
        $client = new Client();
        $searchParams = array(
            'index' => 'open-awesome',
            'type' => 'system',
            '_source' => $component,
        );
        $searchParams['body']['query']['queryString']['query'] = $request->query->has('q');
        $queryResponse = $client->search($searchParams);
        return new WebServiceResponse($queryResponse);
    }

    public function getAction($id, $component)
    {
        $client = new Client();
        $getParams = array(
            'index' => 'open-awesome',
            'type' => 'system',
            'id' => $id,
            '_source' => $component,
        );
        $document = $client->get($getParams);
        return new WebServiceResponse($document);
    }
}
