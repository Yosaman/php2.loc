<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 18.06.2018
 * Time: 16:53
 */

namespace App;

use App\Models\MagicTrait;

class View
{

    use MagicTrait;

//    public function assign($name, $value) {
//        $this->data[$name] = $value;
//        return $this;
//    }

    public function display($template) {
        include $template;
    }
}