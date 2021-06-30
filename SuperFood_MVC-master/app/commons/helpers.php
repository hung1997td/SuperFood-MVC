<?php

use App\components\CategoriesRecursive;
use App\NewsCategories;
use App\ProductCategories;
use JetBrains\PhpStorm\Pure;

const BASE_URL = 'http://localhost/superFood_MVC/public/';

#[Pure] function test_input($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function getNewsCategory($parent_id): string
{
    $data = NewsCategories::all();
    $recursive = new CategoriesRecursive($data);
    return $recursive->categoriesRecursive($parent_id);
}

function getProductCategory($parent_id): string
{
    $data = ProductCategories::all();
    $recursive = new CategoriesRecursive($data);
    return $recursive->categoriesRecursive($parent_id);
}

function uploadFile($file, $path): string
{
    $base_folder = 'backend/assets/images';

    //  Lấy tên file
    $name = explode('.', $file['name']);
    $file_name = explode('/', $file['name'])[count(explode('/', $file['name'])) - 1];
    $file_name_insert = str_replace(end($name), '', $file_name) . end($name);

    //  Lấy đường dẫn file
    $dir_name = $path . '/' . date('Y') . '/' . date('m') . '/' . date('d') ;

    //  Kiểm tra nếu mà folder chứa ảnh cho ngày hiện tại mà chưa có thì tạo mới
    if (!is_dir($base_folder . '/' . $dir_name)) {
        // Tạo thư mục của chúng tôi nếu nó không tồn tại
        mkdir($base_folder . '/' . $dir_name, 0755, true);
    }

    move_uploaded_file($file['tmp_name'], $base_folder . '/' . $dir_name . '/' . $file_name_insert);
    return $dir_name . '/' . $file_name_insert;
}

function checkPer($user_id, $per_code): bool
{
    $users = \App\Users::all();
    $roles = \App\Roles::all();
    $permissions = \App\Permissions::all();
    $role_pers = \App\LinkRolePermission::all();

        foreach ($users as $user){
            if ($user->id == $user_id){
                foreach ($role_pers as $role_per){
                    if ($user->role_id == $role_per->role_id){
                        foreach ($roles as $role){
                            if ($role->id == $role_per->role_id){
                                foreach ($permissions as $permission){
                                    if ($permission->id == $role_per->permission_id){
                                        if ($per_code == $permission->code){
                                            return true;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        return false;
}