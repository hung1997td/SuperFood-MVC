<?php
$router= new AltoRouter();

$router->map('GET','/superFood_MVC/admin/register','App\Controllers\AdminRegistrationController@create','register');
$router->map('POST','/superFood_MVC/admin/registerCheck','App\Controllers\AdminRegistrationController@store','registerCheck');

$router->map('GET','/superFood_MVC/admin/login','App\Controllers\AdminLoginController@create','login');
$router->map('POST','/superFood_MVC/admin/loginCheck','App\Controllers\AdminLoginController@store','loginCheck');
$router->map('GET','/superFood_MVC/admin/logout','App\Controllers\AdminLoginController@logout','logout');

$router->map('GET','/superFood_MVC/admin/dashboard','App\Controllers\AdminDashboardController@index','dashboard');

$router->map('GET','/superFood_MVC/admin/news','App\Controllers\AdminNewsController@index','indexNews');
$router->map('GET','/superFood_MVC/admin/news/create','App\Controllers\AdminNewsController@create','createNews');
$router->map('POST','/superFood_MVC/admin/news/store','App\Controllers\AdminNewsController@store','storeNews');
$router->map('GET','/superFood_MVC/admin/news/edit/[i:id]','App\Controllers\AdminNewsController@edit','editNews');
$router->map('POST','/superFood_MVC/admin/news/update/[i:id]','App\Controllers\AdminNewsController@update','updateNews');
$router->map('GET','/superFood_MVC/admin/news/delete/[i:id]','App\Controllers\AdminNewsController@delete','deleteNews');

$router->map('GET','/superFood_MVC/admin/newsCategories','App\Controllers\AdminNewsCategoriesController@index','indexNewsCategories');
$router->map('GET','/superFood_MVC/admin/newsCategories/create','App\Controllers\AdminNewsCategoriesController@create','createNewsCategories');
$router->map('POST','/superFood_MVC/admin/newsCategories/store','App\Controllers\AdminNewsCategoriesController@store','storeNewsCategories');
$router->map('GET','/superFood_MVC/admin/newsCategories/edit/[i:id]','App\Controllers\AdminNewsCategoriesController@edit','editNewsCategories');
$router->map('POST','/superFood_MVC/admin/newsCategories/update/[i:id]','App\Controllers\AdminNewsCategoriesController@update','updateNewsCategories');
$router->map('GET','/superFood_MVC/admin/newsCategories/delete/[i:id]','App\Controllers\AdminNewsCategoriesController@delete','deleteNewsCategories');

$router->map('GET','/superFood_MVC/admin/newsTags','App\Controllers\AdminNewsTagsController@index','indexNewsTags');
$router->map('GET','/superFood_MVC/admin/newsTags/create','App\Controllers\AdminNewsTagsController@create','createNewsTags');
$router->map('POST','/superFood_MVC/admin/newsTags/store','App\Controllers\AdminNewsTagsController@store','storeNewsTags');
$router->map('GET','/superFood_MVC/admin/newsTags/edit/[i:id]','App\Controllers\AdminNewsTagsController@edit','editNewsTags');
$router->map('POST','/superFood_MVC/admin/newsTags/update/[i:id]','App\Controllers\AdminNewsTagsController@update','updateNewsTags');
$router->map('GET','/superFood_MVC/admin/newsTags/delete/[i:id]','App\Controllers\AdminNewsTagsController@delete','deleteNewsTags');

$router->map('GET','/superFood_MVC/admin/users','App\Controllers\AdminUserController@index','indexUsers');
$router->map('GET','/superFood_MVC/admin/users/create','App\Controllers\AdminUserController@create','createUsers');
$router->map('POST','/superFood_MVC/admin/users/store','App\Controllers\AdminUserController@store','storeUsers');
$router->map('GET','/superFood_MVC/admin/users/edit/[i:id]','App\Controllers\AdminUserController@edit','editUsers');
$router->map('POST','/superFood_MVC/admin/users/update/[i:id]','App\Controllers\AdminUserController@update','updateUsers');
$router->map('GET','/superFood_MVC/admin/users/delete/[i:id]','App\Controllers\AdminUserController@delete','deleteUsers');

$router->map('GET','/superFood_MVC/admin/roles','App\Controllers\AdminRoleController@index','indexRole');
$router->map('GET','/superFood_MVC/admin/roles/create','App\Controllers\AdminRoleController@create','createRole');
$router->map('POST','/superFood_MVC/admin/roles/store','App\Controllers\AdminRoleController@store','storeRole');
$router->map('GET','/superFood_MVC/admin/roles/edit/[i:id]','App\Controllers\AdminRoleController@edit','editRole');
$router->map('POST','/superFood_MVC/admin/roles/update/[i:id]','App\Controllers\AdminRoleController@update','updateRole');
$router->map('GET','/superFood_MVC/admin/roles/delete/[i:id]','App\Controllers\AdminRoleController@delete','deleteRole');

$router->map('GET','/superFood_MVC/admin/userProfile/edit/[i:id]','App\Controllers\AdminUserProfileController@edit','editUserProfile');
$router->map('POST','/superFood_MVC/admin/userProfile/update/[i:id]','App\Controllers\AdminUserProfileController@update','updateUserProfile');
$router->map('GET','/superFood_MVC/admin/userProfile/deleteImage/[i:id]','App\Controllers\AdminUserProfileController@delete','deleteUserProfileImage');


$router->map('GET','/superFood_MVC/admin/userProfile/passEdit/[i:id]','App\Controllers\AdminPasswordController@edit','editUserPass');
$router->map('POST','/superFood_MVC/admin/userProfile/passUpdate/[i:id]','App\Controllers\AdminPasswordController@update','updateUserPass');

$router->map('GET','/superFood_MVC/admin/forgotPassword/create','App\Controllers\AdminPasswordController@create','createForgotPass');
$router->map('POST','/superFood_MVC/admin/forgotPassword/store','App\Controllers\AdminPasswordController@store','storeForgotPass');

$router->map('GET','/superFood_MVC/admin/resetPassword/create','App\Controllers\AdminResetPasswordController@create','createResetPass');
$router->map('POST','/superFood_MVC/admin/resetPassword/store','App\Controllers\AdminResetPasswordController@store','storeResetPass');

$router->map('GET','/superFood_MVC/admin/activeAccount/update/[i:id]','App\Controllers\AdminAccountController@update','updateActiveAccount');

$router->map('GET','/superFood_MVC/admin/product','App\Controllers\AdminProductController@index','indexProduct');
$router->map('GET','/superFood_MVC/admin/product/create','App\Controllers\AdminProductController@create','createProduct');
$router->map('POST','/superFood_MVC/admin/product/store','App\Controllers\AdminProductController@store','storeProduct');
$router->map('GET','/superFood_MVC/admin/product/edit/[i:id]','App\Controllers\AdminProductController@edit','editProduct');
$router->map('POST','/superFood_MVC/admin/product/update/[i:id]','App\Controllers\AdminProductController@update','updateProduct');
$router->map('GET','/superFood_MVC/admin/product/delete/[i:id]','App\Controllers\AdminProductController@delete','deleteProduct');


$router->map('GET','/superFood_MVC/admin/productTags','App\Controllers\AdminProductTagsController@index','indexProductTags');
$router->map('GET','/superFood_MVC/admin/productTags/create','App\Controllers\AdminProductTagsController@create','createProductTags');
$router->map('POST','/superFood_MVC/admin/productTags/store','App\Controllers\AdminProductTagsController@store','storeProductTags');
$router->map('GET','/superFood_MVC/admin/productTags/edit/[i:id]','App\Controllers\AdminProductTagsController@edit','editProductTags');
$router->map('POST','/superFood_MVC/admin/productTags/update/[i:id]','App\Controllers\AdminProductTagsController@update','updateProductTags');
$router->map('GET','/superFood_MVC/admin/productTags/delete/[i:id]','App\Controllers\AdminProductTagsController@delete','deleteProductTags');

$router->map('GET','/superFood_MVC/admin/productCategories','App\Controllers\AdminProductCategoriesController@index','indexProductCategories');
$router->map('GET','/superFood_MVC/admin/productCategories/create','App\Controllers\AdminProductCategoriesController@create','createProductCategories');
$router->map('POST','/superFood_MVC/admin/productCategories/store','App\Controllers\AdminProductCategoriesController@store','storeProductCategories');
$router->map('GET','/superFood_MVC/admin/productCategories/edit/[i:id]','App\Controllers\AdminProductCategoriesController@edit','editProductCategories');
$router->map('POST','/superFood_MVC/admin/productCategories/update/[i:id]','App\Controllers\AdminProductCategoriesController@update','updateProductCategories');
$router->map('GET','/superFood_MVC/admin/productCategories/delete/[i:id]','App\Controllers\AdminProductCategoriesController@delete','deleteProductCategories');

$router->map('GET','/superFood_MVC/admin/animation','App\Controllers\AdminAnimationController@index','indexAnimation');
$router->map('GET','/superFood_MVC/admin/animation/create','App\Controllers\AdminAnimationController@create','createAnimation');
$router->map('POST','/superFood_MVC/admin/animation/store','App\Controllers\AdminAnimationController@store','storeAnimation');
$router->map('GET','/superFood_MVC/admin/animation/edit/[i:id]','App\Controllers\AdminAnimationController@edit','editAnimation');
$router->map('POST','/superFood_MVC/admin/animation/update/[i:id]','App\Controllers\AdminAnimationController@update','updateAnimation');
$router->map('GET','/superFood_MVC/admin/animation/delete/[i:id]','App\Controllers\AdminAnimationController@delete','deleteAnimation');

$router->map('GET','/superFood_MVC/admin/widget','App\Controllers\AdminWidgetController@index','indexWidget');
$router->map('GET','/superFood_MVC/admin/widget/create','App\Controllers\AdminWidgetController@create','createWidget');
$router->map('POST','/superFood_MVC/admin/widget/store','App\Controllers\AdminWidgetController@store','storeWidget');
$router->map('GET','/superFood_MVC/admin/widget/edit/[i:id]','App\Controllers\AdminWidgetController@edit','editWidget');
$router->map('POST','/superFood_MVC/admin/widget/update/[i:id]','App\Controllers\AdminWidgetController@update','updateWidget');
$router->map('GET','/superFood_MVC/admin/widget/delete/[i:id]','App\Controllers\AdminWidgetController@delete','deleteWidget');

$router->map('GET','/superFood_MVC/site/home','App\Controllers\SiteHomeController@index','indexHome');
$router->map('GET','/superFood_MVC/site/about','App\Controllers\SiteAboutController@index','indexAbout');
$router->map('GET','/superFood_MVC/site/contact','App\Controllers\SiteContactController@index','indexContact');
$router->map('GET','/superFood_MVC/site/service','App\Controllers\SiteServiceController@index','indexService');
$router->map('GET','/superFood_MVC/site/blog','App\Controllers\SiteBlogController@index','indexBlog');
$router->map('GET','/superFood_MVC/site/blog_details/[i:id]','App\Controllers\SiteBlogController@show','indexBlogDetails');
$router->map('GET','/superFood_MVC/site/blog_paginate','App\Controllers\SiteBlogController@create','indexBlogPaginate');

$router->map('GET','/superFood_MVC/site/blog_categories','App\Controllers\SiteBlogCategoriesController@index','indexBlogCategories');
$router->map('GET','/superFood_MVC/site/blog_categories_paginate','App\Controllers\SiteBlogCategoriesController@create','indexBlogCategoriesPaginate');

$router->map('GET','/superFood_MVC/site/blog_tags','App\Controllers\SiteBlogTagsController@index','indexBlogTags');
$router->map('GET','/superFood_MVC/site/blog_tags_paginate','App\Controllers\SiteBlogTagsController@create','indexBlogTagsPaginate');

$router->map('GET','/superFood_MVC/site/blog_search','App\Controllers\SiteBlogSearchController@index','indexBlogSearch');
$router->map('GET','/superFood_MVC/site/blog_search_paginate','App\Controllers\SiteBlogSearchController@create','indexBlogSearchPaginate');

$router->map('GET','/superFood_MVC/site/product','App\Controllers\SiteProductController@index','indexSiteProduct');
$router->map('GET','/superFood_MVC/site/product/addToCart/[i:id]','App\Controllers\SiteProductController@addToCart','addToCart');
$router->map('GET','/superFood_MVC/site/product/deleteCart','App\Controllers\SiteProductController@deleteCart','deleteCart');
$router->map('GET','/superFood_MVC/site/product/delete/[i:id]','App\Controllers\SiteProductController@delete','deleteCartProduct');
$router->map('GET','/superFood_MVC/site/product/add/[i:id]','App\Controllers\SiteProductController@add','addCartProduct');
$router->map('GET','/superFood_MVC/site/product/remove/[i:id]','App\Controllers\SiteProductController@remove','removeCartProduct');

$router->map('GET','/superFood_MVC/site/product/checkout','App\Controllers\SiteProductController@checkout','checkout');