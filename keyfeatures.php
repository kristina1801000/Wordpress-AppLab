<?php

get_header();
?>
<script type="text/javascript" src="https://widget.clutch.co/static/js/widget.js"></script>

<section class="keyfeauters-main-section" >	
	<div class="container">
		<div class = "row">
			<p class="title"><?php the_field('title'); ?></p>
			<div class="">
				<image class= "image_one"  src="<?php the_field('image_one');?>"/>
				<image class= "image_two"  src="<?php the_field('image_two');?>"/>
				<image class= "image_three"  src="<?php the_field('image_three');?>"/>
				<image class= "image_four"  src="<?php the_field('image_four');?>"/>
				<image class= "image_five"  src="<?php the_field('image_five');?>"/>
			</div>
			<div class="">
			<image class= "image_"  src="<?php the_field('image_');?>" />
			</div>
		</div>
	</div>
</section>

<?php
get_footer();