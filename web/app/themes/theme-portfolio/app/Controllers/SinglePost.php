<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SinglePost extends Controller
{
    public function post() {
        return new \App\Models\Post(get_post()->ID);
    }
}
