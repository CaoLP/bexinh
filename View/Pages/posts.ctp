<?php
echo $this->Html->script(array('posts.js'), array('inline' => false));
?>
<script>
    var random_link = "<?php echo $this->Html->url(array(
        'controller'=>'pages',
        'action'=>'relative',
    ))?>";
    var ajax_news = "<?php echo $this->Html->url(array(
        'controller'=>'pages',
        'action'=>'new_posts',
    ))?>";
</script>
<article>
    <ul class="breadcrumb_B">
        <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><?php echo $posts['PostCategory']['name']; ?></li>
    </ul>
</article>
<article class="row">
    <div class="col-md-10">
        <div class="articles-list">
            <?php foreach($posts['Post'] as $post){ ?>
            <div class="row">
                <div class="article-item">
                    <div class="article-img">
                        <a href="/bai-viet/<?php echo $post['slug']?>" title="<?php echo $post['title']?>">
                            <img src="/img/news.png" alt="<?php echo $post['title']?>">
                        </a>
                    </div>
                    <div class="article-text">
                        <a href="/bai-viet/<?php echo $post['slug']?>" title="<?php echo $post['title']?>">
                            <h3>
                                <?php echo $post['title']?>
                            </h3>
                        </a>
                        <p>
                            <?php echo $post['excert']?>
                        </p>
                        <p>
                            <a class="readmore" href="/bai-viet/<?php echo $post['slug']?>" rel="nofollow">Xem thêm</a>
                        </p>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    <div class="col-md-2">
        <div class="row hotnews hotnews-top">
            <h3 class="title">
                Bài viết nổi bật
            </h3>
            <ul id="hotnews"></ul>
        </div>
        <div class="row random">
            <h3 class="title">
                Sản phẩm ngẫu nhiên
            </h3>
            <div class="row" id="relative-2">
            </div>
        </div>
</article>