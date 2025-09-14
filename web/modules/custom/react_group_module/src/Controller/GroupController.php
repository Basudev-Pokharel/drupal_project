<?php

// namespace Drupal\react_module\Controller\ControllerBase; //Shows Error here red one error
namespace Drupal\react_group_module\Controller;

use Drupal\Core\Controller\ControllerBase;


class GroupController extends ControllerBase
{
    public function content()

    {
        // return ["#markup" => "Hello world This is react"];

        return [
            "#markup" => '<div id="root"></div>',
            "#attached" => [
                'library' => ['react_group_module/react_group_module'],
            ],
        ];
    }
}
