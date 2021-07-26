<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SinglePortfolio extends Controller
{
    public function project() {
        return new \App\Models\Project(get_post()->ID);
    }

    public function nextProject() {
        $nextPost = get_next_post();

        if($nextPost) return new \App\Models\Project($nextPost->ID);
        
        $query = new \WP_Query([
            'post_type' => 'portfolio',
            'posts_per_page' => 1,
            'order' => 'ASC'
        ]);
        
        return new \App\Models\Project($query->posts[0]->ID);
    }
}
