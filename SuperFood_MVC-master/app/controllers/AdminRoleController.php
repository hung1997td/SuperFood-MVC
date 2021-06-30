<?php
namespace App\controllers;
use App\Blade\Blade;
use App\database\Database;
use App\LinkRolePermission;
use App\Permissions;
use App\Roles;

new Database;
class AdminRoleController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Product::all()
     */
    public function index(){
        $roles = Roles::all();
        Blade::render('admin/roles/index', compact('roles'));
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Product::create($data)
     */
    public function create(){
        $permissions = Permissions::all();
        Blade::render('admin/roles/add', compact('permissions'));
    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Product::create($data)
     */
    public function store(){
        $name = test_input($_POST["roleNameAdd"]);
        if ($name !== "") {
            $roles = Roles::create([
               'name' => $name
            ]);
            if ($roles){
                $last_roles = Roles::latest('id')->first();
                foreach ($_POST['pers'] as $per_id) {
                    //  Gán các quyền mới chọn vào nhóm quyền
                    LinkRolePermission::create([
                        'role_id' => $last_roles->id,
                        'permission_id' => $per_id
                    ]);
                }
                header('Location: /superFood_MVC/admin/roles');
            }else{
                echo "<script>alert('Thêm quyền thất bại'); window.location= '/superFood_MVC/admin/roles';</script>";
            }
        }else{
            echo "<script>alert('Thêm quyền thất bại'); window.location= '/superFood_MVC/admin/roles';</script>";
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
        $name = test_input($_POST['roleNameUpdate']);

        if ($name !== ""){
            //  Xóa các quyền cũ của nhóm quyền
            LinkRolePermission::where('role_id', $id)->delete();
            foreach ($_POST['pers'] as $per_id) {
                //  Gán các quyền mới chọn vào nhóm quyền
                LinkRolePermission::create([
                    'role_id' => $id['id'],
                    'permission_id' => $per_id
                ]);
            }
            Roles::find($id['id'])->update([
                'name' => $name
            ]);
            header('Location: /superFood_MVC/admin/roles');
        }
        else{
            echo "<script>alert('Sửa quyền thất bại'); window.location= '/superFood_MVC/admin/roles';</script>";
        }
    }

    public function edit($id){
        $role_permissions = LinkRolePermission::where('role_id', $id)->get();
        $role = Roles::find($id['id']);
        $permissions = Permissions::all();
        Blade::render('admin/roles/edit', compact('permissions', 'role', 'role_permissions'));
    }

    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Product::delete()
     */
    public function delete($id){
        Roles::destroy($id);
        LinkRolePermission::where('role_id', $id)->delete();
        header('Location: /superFood_MVC/admin/roles');

    }
}
