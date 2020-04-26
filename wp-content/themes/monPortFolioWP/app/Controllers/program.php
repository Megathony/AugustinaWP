<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class program extends Controller
{

    public function posts()
    {

        $args = array(
            'numberposts' => -1,
            'post_type' => 'program',
        );

        $posts = get_posts($args);

        return $posts;
    }
}
