<?php
namespace App\controllers;
use App\Blade\Blade;
use App\database\Database;
use App\LinkNewsTags;
use App\News;
use App\NewsCategories;
use App\NewsTags;

new Database;
class AdminDashboardController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Product::all()
     */
    public function index(){
        $news = News::all();
        $categories = NewsCategories::all();
        $tags = NewsTags::all();
        $newsTags = LinkNewsTags::all();
        Blade::render('admin/dashboard', compact('news', 'categories', 'tags', 'newsTags'));
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
    }
}
