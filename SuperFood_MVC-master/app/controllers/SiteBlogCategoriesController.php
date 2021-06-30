<?php

namespace App\controllers;

use App\Blade\Blade;
use App\database\Database;
use App\News;
use App\NewsCategories;
use App\Widget;


new Database;

class SiteBlogCategoriesController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Product::all()
     */
    public function index()
    {
        $id = $_GET['id'];
        $categories = NewsCategories::all();
        $widgets = Widget::all();
        $newsCount = News::where('category_id', $id)->count('id');
        Blade::render('site/main/pages/blog_categories', compact('newsCount', 'widgets', 'categories', 'id'));
    }

    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Product::create($data)
     */
    public function create()
    {
        $id = $_GET['id'];
        $page = $_GET['page'];
        $per_page = $_GET['per_page'];

        $so_trang_bo_qua = (int)$page - 1;
        $so_ban_ghi_bo_qua = $so_trang_bo_qua * (int)$per_page;
        $categories = NewsCategories::all();

        $news = \App\News::where('category_id', $id)->orderBy('id', 'desc')->skip($so_ban_ghi_bo_qua)->limit($per_page)->get();
        Blade::render('site/main/paginations/blog_categories_pagination', compact('news', 'categories'));
    }

    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Product::create($data)
     */
    public function store()
    {
    }

    /**
     * @function show()
     * Get detail a data in database
     * Type id : number
     * Get id from URl
     * Example : Product::find($id)
     */
    public function show($id)
    {
    }

    /**
     * @function update()
     * Update data with id to database
     * Type id :number
     * Get id from URL
     * Type data : Array
     * Example : Product::find($id)->update($data)
     */
    public function update($id)
    {
    }

    public function edit($id)
    {
    }

    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Product::delete()
     */
    public function delete($id)
    {
    }
}


