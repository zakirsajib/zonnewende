<!-- <div id="third-section"></div> -->
<?php if(get_field('upload_banner')):?>
	<img src="<?php the_field('upload_banner')?>" class="img-responsive" id="feat-img" alt="">
<?php else:?>
	<img src="<?php echo get_template_directory_uri()?>/assets/images/third-section-img.jpg" class="img-responsive" id="feat-img" alt="">
<?php endif?>