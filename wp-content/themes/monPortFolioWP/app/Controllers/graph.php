<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class graph extends Controller
{

    public function posts()
    {

        $args = array(
            'numberposts' => -1,
            'post_type' => 'graph',
        );

        $posts = get_posts($args);

        return $posts;
    }
}
