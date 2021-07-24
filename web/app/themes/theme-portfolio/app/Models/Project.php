<?php

namespace App\Models;

class Project extends AbstractCPT {
    CONST NAME = 'portfolio';

    CONST LABELS = array(
        'name' => 'Portfolio',
        'all_items' => 'Tous les projets',
        'singular_name' => 'Projet',
        'add_new_item' => 'Ajouter un projet',
        'edit_item' => 'Editer un projet',
        'menu_name' => 'Portfolio',
    );

    public $id;
    public $title;
    public $subtitle;
    public $permalink;
    public $thumbnail;
    public $type;
    public $role;
    public $caption;
    public $website;
    public $smallImage;
    public $fullImage;

    public static function register_CPT() {
        parent::register_CPT();
    }

    public function __construct($id) {
        $this->id = $id;
        $this->title = get_the_title($this->id);
        $this->thumbnail = get_the_post_thumbnail($this->id);
        $this->permalink = get_the_permalink($this->id);
        $this->subtitle = get_field('subtitle', $this->id);
        $this->type = get_field('type', $this->id);
        $this->role = get_field('role', $this->id);
        $this->caption = get_field('caption', $this->id);
        $this->website = get_field('website_url', $this->id);
        $this->smallImage = get_field('small_image', $this->id);
        $this->fullImage = get_field('full_image', $this->id);
    }
}