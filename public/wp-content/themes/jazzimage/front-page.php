<?=get_header();?>
<div class="header header-fp">
    <div class="header-content">
        <div class="header-logo">
        </div>
        <div class="header-title">
            <h1 class="text-center">
                <?=get_field('website_title');?>
            </h1>
            <h2 class="text-center text-light">
                <?=get_field('subheader_title');?>
            </h2>
        </div>
        <!--<?=wp_nav_menu('header_nav');?>-->
    </div>
    <img src="<?=get_field('header_image');?>"/>
</div>

<div class="section section-summary">
    <div class="container">
        <h3 class="page-intro text-center text-light">
            <?=get_field('intro_summary');?>
        </h3>
        <div class="box-wrapper">
            <div class="box box-dark">
                <div class="box-title">
                    Development of photos
                    <a href="" class="box-detail">
                         test123534334
                    </a>
                </div>
                <div class="box-body">
                <img src="<?=get_template_directory_uri();?>/images/shutter.png" />
                </div>
            </div>
            <div class="box box-dark">
                <div class="box-title">
                    Printing negative film
                </div>
                <div class="box-body">
                <img src="<?=get_template_directory_uri();?>/images/pol-4.png" />
                </div>
            </div>
            <div class="box box-dark">
                <div class="box-title">
                    Tutor of the analogue
                </div>
                <div class="box-body">
                    <img src="<?=get_template_directory_uri();?>/images/tutor-3.png" />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section gallery-section">
    <div class="container clearfix">
        <div class="section-content">
            <div class="section-heading">
                <h2 class="section-title text-light">
                    Gallery
                </h2>
            </div>
            <p >
                A photographer goes nowhere without his aresenal of
                signature photo collection. Follow the button below
                to see the different worlds captured through the
                eyes of my lenses.
            </p>

            <a class="mg-t btn btn-fw btn-black">Visit gallery</a>
        </div>
        <div class="gallery-block">
            <img src="<?=get_template_directory_uri();?>/images/image-block.jpg"/>
            <!-- <a class="btn btn-default" href=""></a> -->
        </div>
    </div>
</div>

<div class="section section-exhibitions">
    <div class="container">
        <?php the_title();?>
        <div class="section-heading">
            <h2 class="section-title text-center text-light">
                Exhibitions
            </h2>
        </div>
        <div class="flex-side">
            <?php

$args = array(
    'post_type'=> 'exhibitions',
    'order'    => 'DESC',
    'posts_per_page'=> '1'
);

$the_query = new WP_Query( $args );
if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();

?>

        <div style="width: 400px;" class="exhibition exhibition-vertical exhibition-upcoming">
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
                    <?php if(get_field('facebook_link')) : ?>
                        <a href="<?=get_field('facebook_link');?>" class="btn btn-special btn-facebook">
                            <span class="btn-header"><i class="fa-facebook fa"></i></span>
                            <span class="btn-tail">Facebook</span>
                        </a>
                    <?php endif;?>
                    <?php if(get_field('exhibition_link')) : ?>
                        <a href="<?=get_field('exhibition_link');?>" class="btn btn-special btn-exhibition">
                            <span class="btn-header"><i class="fa-camera fa"></i></span>
                            <span class="btn-tail">Exhibition</span>
                        </a>
                    <?php endif;?>
                    <?php if(get_field('website_link')) : ?>
                        <a href="<?=get_field('website_link');?>" class="btn btn-special btn-website">
                            <span class="btn-header"><i class="fa-globe fa"></i></span>
                            <span class="btn-tail">Website</span>
                        </a>
                    <?php endif;?>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="exhibition exhibition-vertical exhibition-previous">
                <img src="<?=get_template_directory_uri();?>/images/prev-exhib.jpg"/>
                <div class="exhibition-content">
                    </div>
                <div class="prev-overlay full-center">
                    <div class="text-center" >
                        <h3>
                            Missed an exhibition? Check here to look at my past exhibitions.
                        </h3>
                        <a class="btn btn-fw btn-white mg-t">Exhibitions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section-articles no-margin full-center parallax parallax-top">
    <div class="section-content full-center">
        <div class="flex-side">
            <div class="header-logo"></div>
            <div style="width: 80%" class="article-text text-light">
                <h3 class="text-light"><span class="text-secondary">FEATURED</span> IN JOURNALS INCLUDING</h3>
                <h4 class="text-light mg">Telekritika, Jazz in Kiev, Echo Magazine and More</h4>
                <a href="" class="btn btn-black btn-fw btn-lg">Read</a>
            </div>
        </div>
    </div>
</div>

<div class="section about-section no-margin">
    <div class="container">
        <h3 class="section-title">
            About
        </h3>
        <div class="section-content">
            <h3>
            “Born in Russia, grew up in Ukraine,
    left my <span class="text-secondary">heart</span> in Israel…”
            </h3>
            <h3 class="mg">
                "I never forgot the essence of my spiritual life: the combined passion of <span class="text-secondary">Jazz</span> and <span class="text-secondary">Photo</span>"
            </h3>
            <a href="" class="btn btn-transparent btn-fw center">Who am I?</a>
        </div>
    </div>
</div>

<?=get_footer();?>
