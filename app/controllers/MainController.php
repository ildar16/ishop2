<?php

namespace app\controllers;


use ishop\base\Controller;
use ishop\Cache;

class MainController extends AppController
{
    public function indexAction()
    {
        $brands = \R::find('brand', 3);
        $hits = \R::find('Product', "hit='1' AND status='1' LIMIT 8");
        $this->setMeta('Main', 'Description main page', 'Keywords main page');
        $this->set(compact('brands', 'hits'));
    }
}