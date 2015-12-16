<?php

namespace Runator\WeatherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RunatorWeatherBundle:Default:index.html.twig', array('name' => $name));
    }

    public function weatherAction(Request $request)
    {
        $array = array();
        return $this->render('RunatorWeatherBundle:Default:weather.html.twig', array('array' => $array));
    }
}
