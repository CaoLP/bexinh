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
        <li>
            <a href="/tin-tuc/<?php echo $post['PostCategory']['slug']; ?>"><?php echo $post['PostCategory']['name']; ?></a>
        </li>
        <li><?php echo $post['Post']['title']; ?></li>
    </ul>
</article>
<article class="row">
    <div class="col-md-10">
        <div class="col-md-12">
            <h1><?php echo $post['Post']['title']?></h1>
        </div>
        <div class="col-md-12">
            <?php echo $post['Post']['descriptions']?>
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