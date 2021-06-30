<?php
namespace App\controllers;
use App\Blade\Blade;
use App\database\Database;
use App\NewsCategories;

new Database;
class AdminNewsCategoriesController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Product::all()
     */
    public function index(){
        $categories = NewsCategories::all();
        Blade::render('admin/news_categories/index', compact('categories'));
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Product::create($data)
     */
    public function create(){
        $html = getNewsCategory($parent_id = 0);
        Blade::render('admin/news_categories/add', compact('html'));
    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Product::create($data)
     */
    public function store(){
        $name = $_POST['newsCategoryNameAdd'];
        $cate = $_POST['newsCategoryCategoryAdd'];
        $category = NewsCategories::create([
            'name' => $name,
            'parent_id' => $cate
        ]);
        if($category){
            header('Location:/superFood_MVC/admin/newsCategories');
        }
        else{
            echo "<script>alert('Thêm danh mục thất bại'); window.location= '/superFood_MVC/admin/newsCategories';</script>";
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
        $name = $_POST['newsCategoryNameUpdate'];
        $category = NewsCategories::find($id['id'])->update([
            'name' => $name
        ]);
        if($category){
            header('Location:/superFood_MVC/admin/newsCategories');
        }
        else{
            echo "<script>alert('Sửa danh mục thất bại'); window.location= '/superFood_MVC/admin/newsCategories';</script>";
        }
    }

    public function edit($id){
        $category = NewsCategories::find($id['id']);
        Blade::render('admin/news_categories/edit', compact('category'));
    }

    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Product::delete()
     */
    public function delete($id){
        NewsCategories::destroy($id);
        header('Location:/superFood_MVC/admin/newsCategories');
    }
}
