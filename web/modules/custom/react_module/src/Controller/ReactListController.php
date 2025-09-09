<?php

// namespace Drupal\react_module\Controller\ControllerBase; //Shows Error here red one error
namespace Drupal\react_module\Controller;

use Drupal\Core\Controller\ControllerBase;


class ReactListController extends ControllerBase
{
    public function content()

    {
        return ["#markup" => "Hello world This is react"];

        // return [

        //     "#markup" => '<div id="react-app"></div>',

        //     "#attached" => [

        //         "library" => ["react_module/react_module"],

        //     ],

        // ];
    }
}
