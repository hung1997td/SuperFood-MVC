<?php
namespace App\controllers;
use App\Blade\Blade;
use App\database\Database;
use App\LinkNewsTags;
use App\News;
use App\NewsCategories;
use App\NewsTags;
use App\Widget;


new Database;
class SiteBlogController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Product::all()
     */
    public function index(){
        $categories = NewsCategories::all();
        $widgets = Widget::all();
        $newsCount = News::count('id');
        Blade::render('site/main/pages/blog', compact('newsCount', 'widgets', 'categories'));
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Product::create($data)
     */
    public function create(){
        $page = $_GET['page'];
        $per_page = $_GET['per_page'];
        $so_trang_bo_qua = (int)$page - 1;

        $so_ban_ghi_bo_qua = $so_trang_bo_qua * (int)$per_page;
        $categories = NewsCategories::all();
        $news = News::orderBy('id', 'desc')->skip($so_ban_ghi_bo_qua)->limit($per_page)->get();
        Blade::render('site/main/paginations/blog_pagination', compact('news', 'categories'));
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
        $widgets = Widget::all();
        $tags = NewsTags::all();
        $categories = NewsCategories::all();
        $newsTags = LinkNewsTags::all();
        $news = News::find($id['id']);
        Blade::render('site/main/pages/blog-details', compact('news', 'tags', 'categories', 'newsTags', 'widgets'));
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
    }
}
