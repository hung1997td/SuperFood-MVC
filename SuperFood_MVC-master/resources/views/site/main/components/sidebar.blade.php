<div class="blog__sidebar animate__animated animate__fadeInRight wow" data-wow-delay="1s">
    <div class="blog__sidebar-search">
        <div class="search__title">Search</div>
        <form action="/superFood_MVC/site/blog_search" method="GET">
            <input type="text" name="blog_search" value="<?php echo @$_GET['blog_search']?>" placeholder="Search...">
            <button type="submit" name="submit_search"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <div class="blog__sidebar-cate">
        <div class="cate__title">Categories</div>
        <div class="cate__content">
            <ul class="cate__content-list">
            <?php
                foreach (\App\NewsCategories::all() as $category){
                        echo "<li class=list__item" . "><a class=list__item-link" .
                            " href=/superFood_MVC/site/blog_categories?id=" . $category->id . ">" . $category->name . "</a></li>";
                    }
                ?>
            </ul>
        </div>
    </div>
    <div class="blog__sidebar-recent">
        <div class="recent__title">RECENT POSTS</div>
        <div class="recent__post">
            @foreach(\App\News::orderBy('id', 'desc')->limit(4)->get() as $news)
                <div class="recent__post-item">
                    <div class="item__image"><?php
                        echo "<a href=/superFood_MVC/site/blog_details/$news->id><img src=/superFood_MVC/backend/assets/images/" . $news->image . "></a>"
                        ?></div>
                    <div class="item__info">
                        <div class="item__info-date"><?php
                            $date = new DateTime($news->date);
                            echo $date->format('d-M-Y') ?>
                        </div>
                        <?php echo "<a class='item__info-title' title=" . $news->title . " href=/superFood_MVC/site/blog_details/$news->id><span>" . $news->title . "</span></a>"
                        ?>
                        <div class="item__info-comment">0 Comments</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="blog__sidebar-tags">
        <div class="tags__title">Tags</div>
        <ul class="tags__list">

            @foreach(\App\NewsTags::all() as $tag)
                <li class="tags__list-item"><a href="/superFood_MVC/site/blog_tags?id={{$tag->id}}">{{$tag->name}}</a></li>
            @endforeach
        </ul>
    </div>
</div>

