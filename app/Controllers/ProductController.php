<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\CategoryModel;

class ProductController extends BaseController
{
    private $product;

    public function __construct()
    {
        $this->product = new ProductModel();
    }

    public function delete($id)
    {
        $this->product->delete($id);
        return redirect()->to('/product');
    }

    public function edit($id)
    {
        $productModel = new ProductModel(); // Create an instance of the ProductModel
        $categoryModel = new CategoryModel(); // Create an instance of the CategoryModel

        $data = [
            'product' => $productModel->findAll(),
            'pro' => $productModel->find($id),
            // Assuming you want to edit a product
            'categories' => $categoryModel->distinct('ProductCategory')->findColumn('ProductCategory'),
        ];

        if (!$data['pro']) {
            echo 'ERROR';
        }

        return view('products', $data);
    }


    public function save()
    {
        $id = $this->request->getVar('id');
        $data = [
            'productName' => $this->request->getVar('productName'),
            'productDescription' => $this->request->getVar('productDescription'),
            'productCategory' => $this->request->getVar('productCategory'),
            'productQuantity' => $this->request->getVar('productQuantity'),
            'productPrice' => $this->request->getVar('productPrice'),
        ];

        if ($id != null) {
            $this->product->set($data)->where('id', $id)->update();
        } else {
            $this->product->insert($data);
        }
        return redirect()->to('/product');
    }

    public function product($product)
    {
        echo $product;
    }

    public function index()
    {
        $productModel = new ProductModel(); // Create an instance of the ProductModel
        $categoryModel = new CategoryModel(); // Create an instance of the CategoryModel

        // Fetch products and distinct categories from their respective models
        $data['product'] = $productModel->findAll();
        $data['categories'] = $categoryModel->distinct('ProductCategory')->findColumn('ProductCategory');

        return view('products', $data);
    }

}