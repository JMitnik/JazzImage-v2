<?=get_header();?>

<div class="header header-sequel">
    <div class="header-content">
        <h1><?=wp_title('');?></h1>
    </div>
    <img src="<?=get_field('header_image');?>"/>
</div>

<div class="container page-wrapper">
    <?=get_template_part('page-type');?>
</div>


<?=get_footer();?>
