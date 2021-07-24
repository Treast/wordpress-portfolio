<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use App\Models\Project;

class FrontPage extends Controller
{
    protected $acf = true;

    public function projects() {
        return Project::findAll();
    }

    public function projectsArchives() {
        return get_post_type_archive_link('portfolio');
    }
}
