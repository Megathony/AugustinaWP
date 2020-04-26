<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class video extends Controller
{

    public function posts()
    {

        $args = array(
            'numberposts' => -1,
            'post_type' => 'video',
        );

        $posts = get_posts($args);

        return $posts;
    }
}
