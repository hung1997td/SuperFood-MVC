<?php

namespace App\controllers;

use App\Blade\Blade;
use App\database\Database;
use App\LinkNewsTags;
use App\NewsCategories;
use App\Widget;

new Database;

class SiteBlogTagsController extends Controller
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

        $newsCounts = LinkNewsTags::where('tag_id', $id)->get();
        $news_with_tag = [];
        foreach ($newsCounts as $newsCount){
            $news_with_tag[] = $newsCount->news_id;
        }

        $newsCount = count((array) $news_with_tag);
        Blade::render('site/main/pages/blog_tags', compact('newsCount', 'widgets', 'categories', 'id', 'news_with_tag'));
    }

    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Product::create($data)
     */
    public function create()
    {
        $newsCounts = LinkNewsTags::where('tag_id', $_GET['id'])->get();
        $news_with_tag = [];
        foreach ($newsCounts as $newsCount){
            $news_with_tag[] = $newsCount->news_id;
        }
        $page = $_GET['page'];
        $per_page = $_GET['per_page'];

        $so_trang_bo_qua = (int)$page - 1;
        $so_ban_ghi_bo_qua = $so_trang_bo_qua * (int)$per_page;
        $categories = NewsCategories::all();

        $news = \App\News::whereIn('id', $news_with_tag)->orderBy('id', 'desc')->skip($so_ban_ghi_bo_qua)->limit($per_page)->get();
        Blade::render('site/main/paginations/blog_tags_pagination', compact('news', 'categories'));
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


