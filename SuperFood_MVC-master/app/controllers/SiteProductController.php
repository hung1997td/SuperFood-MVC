<?php
namespace App\controllers;
use App\database\Database;
use App\Product;
use App\ProductCategories;
use App\Widget;
use App\Blade\Blade;


new Database;
class SiteProductController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Product::all()
     */
    public function index(){
        $widgets = Widget::all();
        $categories = ProductCategories::all();
        $products = Product::all();
        if ( !isset($_SESSION["total"]) ) {

            $_SESSION["total"] = 0;

            for ($i=0; $i< $products->count(); $i++) {
                $_SESSION["qty"][$i] = 0;
                $_SESSION["amounts"][$i] = 0;
            }
        }
        Blade::render('site/main/pages/product', compact('widgets', 'categories', 'products'));
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Product::create($data)
     */
    public function create(){
    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Product::create($data)
     */
    public function store(){
    }
    /**
     * @function show()
     * Get detail a data in database
     * Type id : number
     * Get id from URl
     * Example : Product::find($id)
     */
    public function show($id){
    }
    /**
     * @function update()
     * Update data with id to database
     * Type id :number
     * Get id from URL
     * Type data : Array
     * Example : Product::find($id)->update($data)
     */
    public function update($id){
    }

    public function edit($id){
    }

    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Product::delete()
     */
    public function delete($id){
        $_SESSION["amounts"][$id['id']] = 0;
        unset($_SESSION["qty"][$id['id']]);
        unset($_SESSION["cart"][$id['id']]);

        header('Location: /superFood_MVC/site/product');
    }
    public function addToCart($id)
    {
        $product = Product::find($id['id']);
        $qty = $_SESSION["qty"][$id['id']] + 1;
        $_SESSION["amounts"][$id['id']] = $product->discount_price * $qty;
        $_SESSION["cart"][$id['id']] = $id['id'];
        $_SESSION["qty"][$id['id']] = $qty;
        header('Location: /superFood_MVC/site/product');
    }
    public function deleteCart()
    {
        unset($_SESSION["qty"]); //The quantity for each product
        unset($_SESSION["amounts"]); //The amount from each product
        unset($_SESSION["total"]); //The total cost
        unset($_SESSION["cart"]); //Which item has been chosen
        header('Location: /superFood_MVC/site/product');
    }

    public function add($id)
    {
        $product = Product::find($id['id']);
        $qty = $_SESSION["qty"][$id['id']] + 1;
        $_SESSION["qty"][$id['id']] = $qty;
        if ($qty == 0) {
            $_SESSION["amounts"][$id['id']] = 0;
            unset($_SESSION["cart"][$id['id']]);
        }
        else
        {
            $_SESSION["amounts"][$id['id']] = $product->discount_price * $qty;
        }
        header('Location: /superFood_MVC/site/product');
    }
    public function remove($id)
    {
        if ($_SESSION["qty"][$id['id']] > 0){
            $product = Product::find($id['id']);
            $qty = $_SESSION["qty"][$id['id']] - 1;
            $_SESSION["qty"][$id['id']] = $qty;
            if ($qty == 0) {
                $_SESSION["amounts"][$id['id']] = 0;
                unset($_SESSION["cart"][$id['id']]);
            }
            else
            {
                $_SESSION["amounts"][$id['id']] = $product->discount_price * $qty;
            }
        }
        header('Location: /superFood_MVC/site/product');
    }
    public function checkout()
    {
        $widgets = Widget::all();
        Blade::render('site/main/pages/checkout', compact('widgets'));
    }
}
