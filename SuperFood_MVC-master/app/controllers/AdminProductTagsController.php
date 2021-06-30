<?php
namespace App\controllers;
use App\Blade\Blade;
use App\database\Database;
use App\ProductTags;

new Database;
class AdminProductTagsController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Product::all()
     */
    public function index(){
        $tags = ProductTags::all();
        Blade::render('admin/product_tags/index', compact('tags'));
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Product::create($data)
     */
    public function create(){
        Blade::render('admin/product_tags/add');
    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Product::create($data)
     */
    public function store(){
        $name = $_POST['productTagNameAdd'];
        $tag = ProductTags::create([
            'name' => $name
        ]);
        if($tag){
            header('Location:/superFood_MVC/admin/productTags');
        }
        else{
            echo "<script>alert('Thêm Tag thất bại'); window.location= '/superFood_MVC/admin/productTags';</script>";
        }
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
        $name = $_POST['productTagNameUpdate'];
        $tag = ProductTags::find($id['id'])->update([
            'name' => $name
        ]);
        if($tag){
            header('Location:/superFood_MVC/admin/productTags');
        }
        else{
            echo "<script>alert('Sửa Tag thất bại'); window.location= '/superFood_MVC/admin/productTags';</script>";
        }
    }

    public function edit($id){
        $tag = ProductTags::find($id['id']);
        Blade::render('admin/product_tags/edit', compact('tag'));
    }

    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Product::delete()
     */
    public function delete($id){
        ProductTags::destroy($id);
        header('Location:/superFood_MVC/admin/productTags');
    }
}
