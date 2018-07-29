<?php

namespace app\controllers;


use app\models\Breadcrumbs;
use app\models\Product;

class ProductController extends AppController
{
    public function viewAction()
    {
        $alias = $this->route['alias'];
        $product = \R::findOne('product', "alias = ? AND status='1'", [$alias]);
        if (!$product){
            throw new \Exception('Товар не найден', 404);
        }
//        debug($product);


    //breadcrumbs
    $breadcrumbs = Breadcrumbs::getBreadcrumbs($product->category_id, $product->title);

    $related = \R::getAll("SELECT * FROM related_product JOIN product ON product.id = related_product.related_id WHERE related_product.product_id = ?", [$product->id]);

    //cookie
    $p_model = new Product();
    $p_model->setRecentlyViewed($product->id);

    //viewed goods
    $r_viewed = $p_model->getRecentlyViewed();
    $recenltyViewed = null;
    if ($r_viewed){
        $recenltyViewed = \R::find('product', 'id IN ('. \R::genSlots($r_viewed) .') LIMIT 3', $r_viewed);
    }


    //gallery
    $gallery = \R::findAll('gallery', 'product_id = ?', [$product->id]);

    //modifications
    $mods = \R::findAll('modification', 'product_id = ?', [$product->id]);

    $this->setMeta($product->title, $product->description, $product->keywords);
    $this->set(compact('product', 'related', 'gallery', 'recenltyViewed', 'breadcrumbs', 'mods'));

    }
}