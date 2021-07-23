<?php

namespace App\Models;

abstract class AbstractModel {
    public $id;
    public $title;
    public $permalink;
    
    public function __construct($id) {
        $this->id = $id;
        $this->title = get_the_title($id);
        $this->permalink = get_permalink($id);
    }
}