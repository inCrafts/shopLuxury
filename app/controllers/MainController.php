<?php


namespace app\controllers;


use ishop\base\Controller;

use ishop\App;

use ishop\Cache;


class MainController extends AppController {

    public function indexAction() {
        
        $brands = \R::find('brand', 'LIMIT 3');
        $hits = \R::find('product', "hit = '1' && status = '1' LIMIT 8");

        $this->setMeta( App::$app->getProperty( 'shop_name' ), 'Описание...', 'Ключевые слова...' );
        $this->set( compact( 'brands', 'hits' ));
    }
}