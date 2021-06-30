@if(isset($allNews))
    <h4 style="text-align: center; padding-bottom: 30px">Có tất cả {{$allNews->count()}} tin tức!</h4>
@endif
<div class="row">
    @foreach($news as $news_item)
        <div class="col-12 col-md-6 col-lg-6">
            <div class="blog__item animate__animated animate__fadeIn wow"
                 data-wow-delay="0.5s">
                <div class="blog__item-image">
                    <?php
                    echo "<a href=/superFood_MVC/site/blog_details/$news_item->id><img
                                                            src=/superFood_MVC/backend/assets/images/" . $news_item->image . "></a>"
                    ?>
                    <div class="image__date">
                                                    <span class="date"><?php
                                                        $date = new DateTime($news_item->date);
                                                        echo $date->format('d') ?></span>
                        <span class="month"><?php echo $date->format('M') ?></span>
                    </div>
                </div>
                <div class="blog__item-info">
                    <div class="info__subtitle">
                        @foreach ($categories as $category)
                            @if ($news_item->category_id == $category->id)
                                {{$category->name}}
                            @endif
                        @endforeach
                    </div>
                    <div class="info__title">
                        <?php
                        echo "<a title='" . $news_item->title . "' href=/superFood_MVC/site/blog_details/$news_item->id><span>" . $news_item->title . "</span></a>"
                        ?>
                    </div>
                    <div class="info__text">{{$news_item->description}}
                    </div>
                    <?php
                    echo "<a class=info__readmore
                                                   href=/superFood_MVC/site/blog_details/$news_item->id><span>Read More</span></a>"
                    ?>
                </div>
            </div>
        </div>
    @endforeach
</div>
