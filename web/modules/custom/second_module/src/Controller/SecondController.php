<?php

namespace Drupal\second_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;


class SecondController extends ControllerBase
{
    public function print()
    {
        return new Response('My name is BOOM Shakala');
    }
}
