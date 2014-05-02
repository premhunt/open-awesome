<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Controller;

use Elasticsearch\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
        $jsonContent = $this->container->get('jms_serializer')->serialize($queryResponse, 'json');
        $response = new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');
//        $response->setMaxAge(600);
        return $response;
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
        $retDoc = $client->get($getParams);
        $jsonContent = $this->container->get('jms_serializer')->serialize($retDoc, 'json');
        $response = new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');
//        $response->setMaxAge(600);
        return $response;
    }
}
