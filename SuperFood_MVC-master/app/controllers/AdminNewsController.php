<?php
namespace App\controllers;
use App\Blade\Blade;
use App\database\Database;
use App\LinkNewsTags;
use App\News;
use App\NewsCategories;
use App\NewsTags;

new Database;
class AdminNewsController extends Controller
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
        Blade::render('admin/news/index', compact('news', 'categories', 'tags', 'newsTags'));
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Product::create($data)
     */
    public function create(){
        $tags = NewsTags::all();
        $html = getNewsCategory($parent_id = 0);
        Blade::render('admin/news/add', compact('html', 'tags'));
    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Product::create($data)
     */
    public function store(){
        $title = $_POST['newsTitleAdd'];
        $desc = $_POST['newsDescAdd'];
        $content = $_POST['newsContentAdd'];
        $author = $_POST['newsAuthorAdd'];
        $category = $_POST['newsCategoryAdd'];

        if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
            $image_src = uploadFile($_FILES['fileToUpload'], 'news');
            $news = News::create([
                'title' => $title,
                'description' => $desc,
                'content' => $content,
                'author' => $author,
                'category_id' => $category,
                'image' => $image_src
            ]);
        }else{
            $news = News::create([
                'title' => $title,
                'description' => $desc,
                'content' => $content,
                'author' => $author,
                'category_id' => $category
            ]);
        }
        if ($news) {
            $tags = $_POST["tags"];
            if (!empty($tags)) {
                foreach ($tags as $tag_id) {
                    LinkNewsTags::create([
                        'news_id' => $news->id,
                        'tag_id' => $tag_id
                    ]);
                }
            }
            header('Location:/superFood_MVC/admin/news');
        } else {
            echo "<script>alert('Th??m tin th???t b???i'); window.location= '/superFood_MVC/admin/news';</script>";
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
     * Example   : Product::find($id)->update($data)
     */
    public function update($id){
        $title = $_POST['newsTitleUpdate'];
        $desc = $_POST['newsDescUpdate'];
        $content = $_POST['newsContentUpdate'];
        $author = $_POST['newsAuthorUpdate'];
        $category = $_POST['newsCategoryUpdate'];

        $found_news = News::find($id['id']);
        $news = $found_news->update([
            'title' => $title,
            'description' => $desc,
            'content' => $content,
            'author' => $author,
            'category_id' => $category
        ]);
        if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
            $image_src = uploadFile($_FILES['fileToUpload'], 'news');
            $news = $found_news->update([
                'image' => $image_src
            ]);
        }
        if ($news) {
            //  G???n tags
            $tags = $_POST["tags"];
            if (!empty($tags)) {
                //  L???y tag ???? t???n t???i
                $newsTag = LinkNewsTags::where('news_id', $found_news->id)->get();
                $selected_tags = [];
                if (!$newsTag->isEmpty()) {
                    foreach ($newsTag as $tag) {
                        $selected_tags[$tag->tag_id] = $tag->tag_id;
                    }
                }

                foreach ($tags as $tag_id) {
                    //  Ki???m tra n???u c?? r???i th?? b??? qua
                    $newsTag = LinkNewsTags::where('news_id', $found_news->id)->where('tag_id', $tag_id)->get();
                    //  Insert th??m v??o n???u ch??a c??
                    if ($newsTag->isEmpty()){
                        LinkNewsTags::create([
                            'news_id' => $found_news->id,
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
                    LinkNewsTags::where('news_id', $found_news->id)->whereIn('tag_id', $arr)->delete();
                }
            }else{
                // tr?????ng h???p m?? kh??ng ch???n tag n??o th?? x??a h???t c??c li??n k???t
                LinkNewsTags::where('news_id', $found_news->id)->delete();
            }
            header('Location:/superFood_MVC/admin/news');
        } else {
            echo "<script>alert('S???a tin th???t b???i'); window.location= '/superFood_MVC/admin/news';</script>";
        }
    }

    public function edit($id){
        $tags = NewsTags::all();
        $news = News::find($id['id']);
        $newsTags = LinkNewsTags::all();
        $html = getNewsCategory($news->category_id);
        Blade::render('admin/news/edit', compact('news', 'html', 'tags', 'newsTags'));
    }

    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Product::delete()
     */
    public function delete($id){
        News::destroy($id);
        LinkNewsTags::where('news_id', $id['id'])->delete();
        header('Location:/superFood_MVC/admin/news');
    }
}
