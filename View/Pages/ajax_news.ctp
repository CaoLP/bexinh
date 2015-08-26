<?php
foreach($posts as $post){
    ?>
    <li><a href="<?php echo $this->Html->url(array(
            'controller' => 'pages',
            'action' => 'posts',
            $post['Post']['slug']
        ))?>"><?php echo $post['Post']['title']?></a></li>
    <?php
}
?>