<?php
namespace App\controllers;
use App\Animation;
use App\Blade\Blade;
use App\database\Database;

new Database;
class AdminAnimationController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Product::all()
     */
    public function index(){
        $animations = Animation::all();
        Blade::render('admin/animation/index', compact('animations'));
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Product::create($data)
     */
    public function create(){
        Blade::render('admin/animation/add');
    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Product::create($data)
     */
    public function store(){
        $location = test_input($_POST['location_addAnimation']);
        $animation = test_input($_POST['animation_addAnimation']);
        $animation_delay = test_input($_POST['animation_delay_addAnimation']);
        $images = test_input($_POST['images_addAnimation']);
        $images_delay = test_input($_POST['images_delay_addAnimation']);
        $title = test_input($_POST['title_addAnimation']);
        $title_delay = test_input($_POST['title_delay_addAnimation']);
        $description = test_input($_POST['description_addAnimation']);
        $description_delay = test_input($_POST['description_delay_addAnimation']);
        $link = test_input($_POST['link_addAnimation']);
        $link_delay = test_input($_POST['link_delay_addAnimation']);

        if($location !== ""){
            $animations = Animation::create([
                'location' => $location,
                'animation' => $animation,
                'animation_delay' => $animation_delay,
                'images' => $images,
                'images_delay' => $images_delay,
                'title' => $title,
                'title_delay' => $title_delay,
                'description' => $description,
                'description_delay' => $description_delay,
                'link' => $link,
                'link_delay' => $link_delay
            ]);
            if($animations){
                header('Location: /superFood_MVC/admin/animation');
            }
            else{
                echo "<script>alert('Thêm hiệu ứng thất bại'); window.location= '/superFood_MVC/admin/animation';</script>";
            }
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
        $location = test_input($_POST['location_editAnimation']);
        $animation = test_input($_POST['animation_editAnimation']);
        $animation_delay = test_input($_POST['animation_delay_editAnimation']);
        $images = test_input($_POST['images_editAnimation']);
        $images_delay = test_input($_POST['images_delay_editAnimation']);
        $title = test_input($_POST['title_editAnimation']);
        $title_delay = test_input($_POST['title_delay_editAnimation']);
        $description = test_input($_POST['description_editAnimation']);
        $description_delay = test_input($_POST['description_delay_editAnimation']);
        $link = test_input($_POST['link_editAnimation']);
        $link_delay = test_input($_POST['link_delay_editAnimation']);

        if($location !== ""){
            $animations = Animation::find($id['id'])->update([
                'location' => $location,
                'animation' => $animation,
                'animation_delay' => $animation_delay,
                'images' => $images,
                'images_delay' => $images_delay,
                'title' => $title,
                'title_delay' => $title_delay,
                'description' => $description,
                'description_delay' => $description_delay,
                'link' => $link,
                'link_delay' => $link_delay
            ]);
            if($animations){
                header('Location: /superFood_MVC/admin/animation');
            }
            else{
                echo "<script>alert('Sửa hiệu ứng thất bại'); window.location= '/superFood_MVC/admin/animation';</script>";
            }
        }
    }

    public function edit($id){
        $animation = Animation::find($id['id']);
        Blade::render('admin/animation/edit', compact('animation'));
    }

    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Product::delete()
     */
    public function delete($id){
        Animation::destroy($id);
        header('Location: /superFood_MVC/admin/animation');
    }
}
