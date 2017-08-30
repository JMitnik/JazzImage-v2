<div>
    <?php
        $pageName = get_query_var('pagename');
        switch ($pageName) {
            case 'gallery':
                get_template_part('gallery');
                break;
            case 'exhibitions':
                get_template_part('exhibitions');
                break;
            case 'articles':
                get_template_part('articles');
                break;
            case 'about';
                get_template_part('about');
                break;
        }

    ?>

</div>
