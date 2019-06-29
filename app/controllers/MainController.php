<?php


namespace app\controllers;


use ishop\base\Controller;

use ishop\App;

use ishop\Cache;


class MainController extends AppController {

    public function indexAction() {

        $this->setMeta( App::$app->getProperty( 'shop_name' ), 'Описание...', 'Ключевые слова...' );
    }
}