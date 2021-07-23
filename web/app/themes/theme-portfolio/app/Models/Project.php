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

    public static function register_CPT() {
        parent::register_CPT();
    }
}