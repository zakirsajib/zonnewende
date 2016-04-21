  <!-- Wrapper for slides -->
  <div class="home-slideshow" role="listbox">
	  <?php if(get_field('slideshow_home')): ?>
			<?php while(has_sub_field('slideshow_home')): ?>
			    <div class="item">
			      <img src="<?php the_sub_field('upload_image'); ?>" alt="<?php the_sub_field('caption_heading'); ?>">
				    <div class="container"> 
					    <div class="row">
					      <div class="carousel-caption hidden-xs hidden-sm">
					        <h1 class="caption-heading"><?php the_sub_field('caption_heading'); ?></h1>
					        <p class="sub-heading"><?php the_sub_field('sub_heading'); ?></p>
					        <p><a role="button" href="<?php the_sub_field('button_url_slideshow'); ?>" class="btn btn-lg btn-default"><?php the_sub_field('button_label_slideshow'); ?></a></p>
					      </div>
					    </div>
				    </div>
			    </div>
			<?php endwhile; ?>
		<?php else:?>
			<div class="alert alert-warning" role="alert">Content Missing</div>
		<?php endif; ?>
  </div>