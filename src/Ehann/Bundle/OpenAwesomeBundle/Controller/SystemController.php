<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Controller;

use Elastica_Request;
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
        $sourceFilter = $request->query->has('component') ? $request->query->get('component') : '*';
        $query = array(
            '_source' => array(
                'include' => array($sourceFilter),
                'exclude' => array('software'),
            ),
            'query' => array(
                'query_string' => array(
                    'query' => $request->query->get('q')
                )
            )
        );

        $responseArray = $this->container->get('fos_elastica.index.website')->request('system/_search', Elastica_Request::GET, $query)->getData();
        $jsonContent = $this->container->get('jms_serializer')->serialize($responseArray, 'json');
        $response = new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');
//        $response->setMaxAge(600);
        return $response;
    }

    public function getAction($id, $component)
    {
        $content = $this->container->get('fos_elastica.index.website')->request('system/'.$id, Elastica_Request::GET)->getData();
        $componentData = $content['_source'][$component];
        unset($content['_source']);
        $content['_source'][$component] = $componentData;
        $jsonContent = $this->container->get('jms_serializer')->serialize($content, 'json');
        $response = new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');
//        $response->setMaxAge(600);
        return $response;
    }
}
