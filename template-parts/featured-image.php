<?php if(has_post_thumbnail() ) : ?>
	<?php the_post_thumbnail('full', array('alt'=>get_the_title($post->ID), 'class'=>"img-responsive", 'id'=>'feat-img', 'title'=>get_the_title($post->ID))); ?>
<?php else:?>
	<img class="img-responsive" id="feat-img" src="http://lorempixel.com/1920/390/sports/2" alt="default image" />
<?php endif;?>