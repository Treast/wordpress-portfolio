<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Page extends Controller
{
    public function page() {
        return new \App\Models\Page(get_post()->ID);
    }
}
