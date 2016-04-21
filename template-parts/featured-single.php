<?php if(has_post_thumbnail() ) : ?>
	<?php the_post_thumbnail('full', array('alt'=>get_the_title($post->ID), 'class'=>"img-responsive", 'title'=>get_the_title($post->ID))); ?>
<?php endif;?>