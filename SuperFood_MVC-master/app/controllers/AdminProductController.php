<?php
namespace App\controllers;
use App\Blade\Blade;
use App\database\Database;
use App\LinkProductTags;
use App\Product;
use App\ProductCategories;
use App\ProductTags;

new Database;
class AdminProductController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Product::all()
     */
    public function index(){
        $products = Product::all();
        $categories = ProductCategories::all();
        $tags = ProductTags::all();
        $productTags = LinkProductTags::all();
        Blade::render('admin/product/index', compact('products', 'categories', 'tags', 'productTags'));
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Product::create($data)
     */
    public function create(){
        $tags = ProductTags::all();
        $html = getProductCategory($parent_id = 0);
        Blade::render('admin/product/add', compact('html', 'tags'));
    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Product::create($data)
     */
    public function store(){
        $name = $_POST['productNameAdd'];
        $desc = $_POST['productDescAdd'];
        $content = $_POST['productContentAdd'];
        $base_price = $_POST['productBasePriceAdd'];
        $discount_price = $_POST['productDiscountPriceAdd'];
        $category = $_POST['productCategoryAdd'];

        if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
            $image_src = uploadFile($_FILES['fileToUpload'], 'product');
            $product = Product::create([
                'name' => $name,
                'description' => $desc,
                'content' => $content,
                'base_price' => $base_price,
                'discount_price' => $discount_price,
                'category_id' => $category,
                'avatar' => $image_src
            ]);
        }else{
            $product = Product::create([
                'name' => $name,
                'description' => $desc,
                'content' => $content,
                'base_price' => $base_price,
                'discount_price' => $discount_price,
                'category_id' => $category,
            ]);
        }
        if ($product) {
            $tags = $_POST["tags"];
            if (!empty($tags)) {
                foreach ($tags as $tag_id) {
                    LinkProductTags::create([
                        'product_id' => $product->id,
                        'tag_id' => $tag_id
                    ]);
                }
            }
            header('Location:/superFood_MVC/admin/product');
        } else {
            echo "<script>alert('Th??m s???n ph???m th???t b???i'); window.location= '/superFood_MVC/admin/product';</script>";
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
        $name = $_POST['productNameUpdate'];
        $desc = $_POST['productDescUpdate'];
        $content = $_POST['productContentUpdate'];
        $base_price = $_POST['productBasePriceUpdate'];
        $discount_price = $_POST['productDiscountPriceUpdate'];
        $category = $_POST['productCategoryUpdate'];

        $found_product = Product::find($id['id']);
        $product = $found_product->update([
            'name' => $name,
            'description' => $desc,
            'content' => $content,
            'base_price' => $base_price,
            'discount_price' => $discount_price,
            'category_id' => $category
        ]);
        if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
            $image_src = uploadFile($_FILES['fileToUpload'], 'product');
            $product = $found_product->update([
                'avatar' => $image_src
            ]);
        }
        if ($product) {
            //  G???n tags
            $tags = $_POST["tags"];
            if (!empty($tags)) {
                //  L???y tag ???? t???n t???i
                $productTag = LinkProductTags::where('product_id', $found_product->id)->get();
                $selected_tags = [];
                if (!$productTag->isEmpty()) {
                    foreach ($productTag as $tag) {
                        $selected_tags[$tag->tag_id] = $tag->tag_id;
                    }
                }

                foreach ($tags as $tag_id) {
                    //  Ki???m tra n???u c?? r???i th?? b??? qua
                    $productTag = LinkProductTags::where('product_id', $found_product->id)->where('tag_id', $tag_id)->get();
                    //  Insert th??m v??o n???u ch??a c??
                    if ($productTag->isEmpty()){
                        LinkProductTags::create([
                            'product_id' => $found_product->id,
                            'tag_id' => $tag_id
                        ]);
                    }
                    unset($selected_tags[$tag_id]);
                }
                //  Lo???i b??? tag th???a
                if (!empty($selected_tags)){
                    $arr = [];
                    foreach ($selected_tags as $v) {
                        $arr[] = $v;
                    }
                    LinkProductTags::where('product_id', $found_product->id)->whereIn('tag_id', $arr)->delete();
                }
            }else{
                // tr?????ng h???p m?? kh??ng ch???n tag n??o th?? x??a h???t c??c li??n k???t
                LinkProductTags::where('product_id', $found_product->id)->delete();
            }
            header('Location:/superFood_MVC/admin/product');
        } else {
            echo "<script>alert('S???a tin th???t b???i'); window.location= '/superFood_MVC/admin/product';</script>";
        }
    }

    public function edit($id){
        $tags = ProductTags::all();
        $product = Product::find($id['id']);
        $productTags = LinkProductTags::all();
        $html = getProductCategory($product->category_id);
        Blade::render('admin/product/edit', compact('product', 'html', 'tags', 'productTags'));
    }

    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Product::delete()
     */
    public function delete($id){
        Product::destroy($id);
        LinkProductTags::where('product_id', $id['id'])->delete();
        header('Location:/superFood_MVC/admin/product');
    }
}
