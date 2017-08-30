<p class="page-intro">
    Having had many years of photography and jazz under my experience,
    I have been featured in a number of journals across the world.
    You can find here a collection of articles in which I detail
    my view as a <span class="text-secondary">Jazz </span> photographer.
</p>

<hr/>
<div class="article-overview">
    <?php
        $args = array(
            'post_type'=> 'web_articles',
            'order'    => 'DESC',
            'posts_per_page'=> '5'
        );

        $the_query = new WP_Query( $args );
        if ($the_query->have_posts()) :
            while ($the_query->have_posts()) :
                $the_query->the_post();
    ?>

    <?php $pub_title = get_field('publication_name');?>
    <a href="<?=get_field('pdf');?>" class="article-card article-<?=$pub_title;?>" style="background-color: <?=get_field('colour_brand');?>">
        <h4>
            <?=$pub_title;?>
        </h4>
        <div class="article-logo">
            <img src="<?=get_field('logo');?>"/>
        </div>
    </a>

    <?php
        endwhile;
        endif;
    ?>
</div>
