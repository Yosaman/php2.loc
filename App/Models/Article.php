<?php

namespace App\Models;

use App\Model;

class Article extends Model
{

    public const TABLE = 'news';

    public $title;
    public $content;


    public function printPost(){
        echo '<h3>' . $this->title . '</h3>';
        echo '<p>' . $this->content . '</p>';
    }

    public function editPost(){
        echo '<input name="title" value="' . $this->title .  '">';
        echo '<input name="content" value="' . $this->content . '">';
        echo '<input name="id" type="hidden" value="' . $this->id. '">';
        echo '<br>';
        echo '<button>Save</button>';
    }

}