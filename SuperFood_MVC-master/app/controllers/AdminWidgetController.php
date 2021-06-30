<?php
namespace App\controllers;
use App\Blade\Blade;
use App\database\Database;
use App\Widget;

new Database;
class AdminWidgetController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Product::all()
     */
    public function index(){
        $widgets = Widget::all();
        Blade::render('admin/widget/index', compact('widgets'));
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Product::create($data)
     */
    public function create(){
        Blade::render('admin/widget/add');
    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Product::create($data)
     */
    public function store(){
        $location = test_input($_POST['location_addWidget']);
        $title = test_input($_POST['title_addWidget']);
        $description = test_input($_POST['description_addWidget']);
        $content = test_input($_POST['content_addWidget']);
        $link = test_input($_POST['link_addWidget']);
        $number = test_input($_POST['number_addWidget']);
        $author = test_input($_POST['author_addWidget']);
        $position = test_input($_POST['position_addWidget']);

        if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
            $image_src = uploadFile($_FILES['fileToUpload'], 'widget');
            $widget = Widget::create([
                'title' => $title,
                'description' => $description,
                'content' => $content,
                'location' => $location,
                'author' => $author,
                'link' => $link,
                'number' => $number,
                'position' => $position,
                'image' => $image_src
            ]);
        }else{
            $widget = Widget::create([
                'title' => $title,
                'description' => $description,
                'content' => $content,
                'location' => $location,
                'author' => $author,
                'link' => $link,
                'number' => $number,
                'position' => $position
            ]);
        }
        if ($widget) {
            header('Location:/superFood_MVC/admin/widget');
        } else {
            echo "<script>alert('Thêm widget thất bại'); window.location= '/superFood_MVC/admin/widget';</script>";
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
        $location = test_input($_POST['location_editWidget']);
        $title = test_input($_POST['title_editWidget']);
        $description = test_input($_POST['description_editWidget']);
        $content = test_input($_POST['content_editWidget']);
        $link = test_input($_POST['link_editWidget']);
        $number = test_input($_POST['number_editWidget']);
        $author = test_input($_POST['author_editWidget']);
        $position = test_input($_POST['position_editWidget']);

        $widget = Widget::find($id['id'])->update([
            'title' => $title,
            'description' => $description,
            'content' => $content,
            'location' => $location,
            'author' => $author,
            'link' => $link,
            'number' => $number,
            'position' => $position
        ]);
        if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
            $image_src = uploadFile($_FILES['fileToUpload'], 'widget');
            $widget = Widget::find($id['id'])->update([
                'image' => $image_src
            ]);
        }
        if ($widget) {
            header('Location:/superFood_MVC/admin/widget');
        } else {
            echo "<script>alert('Sửa widget thất bại'); window.location= '/superFood_MVC/admin/widget';</script>";
        }
    }

    public function edit($id){
        $widget = Widget::find($id['id']);
        Blade::render('admin/widget/edit', compact('widget'));
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
