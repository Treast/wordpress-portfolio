<?php

namespace App\Models;

class Post extends AbstractModel {
    public $content;
    public $thumbnail;

    public function __construct($id) {
        parent::__construct($id);

        $this->content = get_the_content($id);
        $this->thumbnail = get_the_post_thumbnail($id);
    }
}