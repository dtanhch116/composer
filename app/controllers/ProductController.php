<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController extends BaseController
{
    public $product;
    public function __construct()
    {
        $this->product = new Product();
    }
    public function index()
    {
        $title = "hihi";
        $tieude = "abc";
        // lấy dữ liệu từ bảng product xuống
        $products = $this->product->getProduct();
        // bắn dữ liệu sang view index
        $this->render('product.index', compact('products', 'title', 'tieude'));
    }
}
