<?php
namespace App\controllers;
use App\Blade\Blade;
use App\database\Database;
use App\ProductCategories;

new Database;
class AdminProductCategoriesController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Product::all()
     */
    public function index(){
        $categories = ProductCategories::all();
        Blade::render('admin/product_categories/index', compact('categories'));
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Product::create($data)
     */
    public function create(){
        $html = getProductCategory($parent_id = 0);
        Blade::render('admin/product_categories/add', compact('html'));
    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Product::create($data)
     */
    public function store(){
        $name = $_POST['productCategoryNameAdd'];
        $cate = $_POST['productCategoryCategoryAdd'];
        $category = ProductCategories::create([
            'name' => $name,
            'parent_id' => $cate
        ]);
        if($category){
            header('Location:/superFood_MVC/admin/productCategories');
        }
        else{
            echo "<script>alert('Thêm danh mục thất bại'); window.location= '/superFood_MVC/admin/productCategories';</script>";
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
        $name = $_POST['productCategoryNameUpdate'];
        $category = ProductCategories::find($id['id'])->update([
            'name' => $name
        ]);
        if($category){
            header('Location:/superFood_MVC/admin/productCategories');
        }
        else{
            echo "<script>alert('Sửa danh mục thất bại'); window.location= '/superFood_MVC/admin/productCategories';</script>";
        }
    }

    public function edit($id){
        $category = ProductCategories::find($id['id']);
        Blade::render('admin/product_categories/edit', compact('category'));
    }

    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Product::delete()
     */
    public function delete($id){
        ProductCategories::destroy($id);
        header('Location:/superFood_MVC/admin/productCategories');
    }
}
