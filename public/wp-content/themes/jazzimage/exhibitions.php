<p class="page-intro">
    The greatest adventures in life are the most exciting when retelling them in front of an audience.
    A number of times a year I participate in showing my photographs in exhibitions; see and try
    a slice of them on this page.
</p>

<hr/>

<h3 class="text-light mg text-center">
    Upcoming
</h3>

<?php

$args = array(
    'post_type'=> 'exhibitions',
    'order'    => 'DESC',
    'posts_per_page'=> '5'
);

$the_query = new WP_Query( $args );
if ($the_query->have_posts()) :
    while ($the_query->have_posts()) :
        $the_query->the_post();

    ?>
        <div class="exhibition exhibition-horizontal exhibition-upcoming">

    <img src="<?=get_field('image');?>"/>

<div class="exhibition-content">
    <div class="exhibition-heading">
        <?=the_title();?>
    </div>
    <div class="exhibition-box">
        <div class="text-md mg-b">
            <?=get_field('description');?>
        </div>
        <div class="text-sm text-muted">
            <?=get_field('date');?>
        </div>
    </div>
</div>
<div class="exhibition-footer">
    <?php if (get_field('facebook_link')) : ?>
        <a href="<?=get_field('facebook_link');?>" class="btn btn-special btn-facebook">
            <span class="btn-header"><i class="fa-facebook fa"></i></span>
            <span class="btn-tail">Facebook</span>
        </a>
    <?php endif;?>
    <?php if (get_field('exhibition_link')) : ?>
        <a href="<?=get_field('exhibition_link');?>" class="btn btn-special btn-exhibition">
            <span class="btn-header"><i class="fa-camera fa"></i></span>
            <span class="btn-tail">Exhibition</span>
        </a>
    <?php endif;?>
    <?php if (get_field('website_link')) : ?>
        <a href="<?=get_field('website_link');?>" class="btn btn-special btn-website">
            <span class="btn-header"><i class="fa-globe fa"></i></span>
            <span class="btn-tail">Website</span>
        </a>
    <?php endif;?>
</div>
<?php endwhile; ?>
<?php endif; ?>

</div>
