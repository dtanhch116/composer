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

    public function addProduct()
    {
        $this->render('product.add');
    }



    public function productPost()
    {
        if (isset($_POST['them'])) {

            $errors = []; // khởi tạo mảng lỗi bằng rỗng
            // nếu nhập tên sản phẩm
            if (empty($_POST['ten_sp'])) {
                $errors[] = 'Bạn chưa nhập tên sản phẩm';
            }
            // nếu chưa nhập đơn giá
            if (empty($_POST['don_gia'])) {
                $errors[] = "Bạn chưa nhập tên đơn giá";
            }


            if (count($errors) > 0) {
                // $_SESSION['errors'] = $errors;
                // header("location:" . url('add-product'));
                // die;
                redirect('errors', $errors, 'add-product');
            } else {
                $resule = $this->product->addProduct(NULL, $_POST['ten_sp'], $_POST['don_gia']);
                redirect('success', 'Thêm thành công!', 'add-product');
                die;
            }
        }
    }


    public function editProduct($id)
    {
        $product = $this->product->getDetailProduct($id);
        return $this->render('product.edit', compact('product'));
    }

    public function editProductPost($id)
    {
        if (isset($_POST['sua'])) {
            $result = $this->product->updateProduct($id, $_POST['ten_sp'], $_POST['don_gia']);
            if ($result) {
                redirect('success', "sửa thành công", 'edit-product/' . $id);
            }
        }
    }
}
