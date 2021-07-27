<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateContact extends Controller
{
    protected $acf = true;

    public function page() {
        return new \App\Models\Page(get_the_ID());
    }
}
