<?php


namespace app\controllers;


use ishop\base\Controller;

use ishop\App;

use ishop\Cache;


class MainController extends AppController {



    public function indexAction() {

        $posts = \R::findAll( 'test' );
        $post = \R::findOne( 'test', 'id = ?', [2] );
        debug( $post );
        $this->setMeta( App::$app->getProperty( 'shop_name' ), 'Описание...', 'Ключевые слова...' );
        $name = 'Alex';
        $age = 37;
        $names = ['Andrey', 'Anna', 'Julia', 'Sasha'];
        $cache = Cache::instance();
        $cache->set( 'test', $names );
//        $cache->delete( 'test' );
        $data = $cache->get( 'test' );
        if ( !$data ) {
            $cache->set( 'test', $names );
        }
        debug( $data );
        $this->set( compact('name', 'age', 'names', 'posts' ) );
    }
}