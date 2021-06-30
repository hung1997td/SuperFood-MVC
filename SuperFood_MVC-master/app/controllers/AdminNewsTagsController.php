<?php
namespace App\controllers;
use App\Blade\Blade;
use App\database\Database;
use App\NewsTags;

new Database;
class AdminNewsTagsController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Product::all()
     */
    public function index(){
        $tags = NewsTags::all();
        Blade::render('admin/news_tags/index', compact('tags'));
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Product::create($data)
     */
    public function create(){
        Blade::render('admin/news_tags/add');
    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Product::create($data)
     */
    public function store(){
        $name = $_POST['newsTagNameAdd'];
        $tag = NewsTags::create([
            'name' => $name
        ]);
        if($tag){
            header('Location:/superFood_MVC/admin/newsTags');
        }
        else{
            echo "<script>alert('Thêm Tag thất bại'); window.location= '/superFood_MVC/admin/newsTags';</script>";
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
        $name = $_POST['newsTagNameUpdate'];
        $tag = NewsTags::find($id['id'])->update([
            'name' => $name
        ]);
        if($tag){
            header('Location:/superFood_MVC/admin/newsTags');
        }
        else{
            echo "<script>alert('Sửa Tag thất bại'); window.location= '/superFood_MVC/admin/newsTags';</script>";
        }
    }

    public function edit($id){
        $tag = NewsTags::find($id['id']);
        Blade::render('admin/news_tags/edit', compact('tag'));
    }

    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Product::delete()
     */
    public function delete($id){
        NewsTags::destroy($id);
        header('Location:/superFood_MVC/admin/newsTags');
    }
}
