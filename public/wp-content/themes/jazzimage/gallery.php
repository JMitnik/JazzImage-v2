<p class="page-intro">
    Over many years, I accumulated many different stories in the photos I chose to share.
    I hope that my pictures can inspire and take you with me to the music and life
    behind the shutters of the camera telling the stories.
</p>

<hr/>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
    endwhile; else: ?>
<?php endif; ?>
