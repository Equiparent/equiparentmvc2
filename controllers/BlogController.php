<?php

namespace Controllers;

use MVC\Router;
use Model\ActiveRecord;

class Blog extends ActiveRecord {
    
    public static function blog(Router $router) {

        $blog = Blog::get();
        $entrada = true;

        $router->render('paginas/blog', [
            'blog' => $blog,
            'entrada' => $entrada
        ]);

    }
}