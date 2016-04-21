<div class="inner-container">
	<div class="container">
		<div class="row">
			<?php if(get_field('three_cta_sections')): ?>
				<?php while(has_sub_field('three_cta_sections')): ?>
					<div class="col-md-4">	
						<div class="cta">
							<img width="90" height="90" alt="<?php the_sub_field('heading_cta'); ?>" src="<?php the_sub_field('upload_image_cta'); ?>" class="aligncenter">
							<h4><a href="<?php the_sub_field('heading_url_cta'); ?>"><?php the_sub_field('heading_cta'); ?></a></h4>
							<p><?php the_sub_field('sub_heading_cta'); ?></p>
						</div>
					</div>
					<?php endwhile; ?>
				<?php else:?>
					<div class="alert alert-warning" role="alert">Content Missing</div>
				<?php endif; ?>
		</div>
	</div>
</div>