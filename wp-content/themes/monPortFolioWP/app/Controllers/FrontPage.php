<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{

    public function posts()
    {

        $args = array(
            'numberposts' => 0,
            'post_type' => 'video',
        );

        $posts = get_posts($args);

        return $posts;
    }
}
