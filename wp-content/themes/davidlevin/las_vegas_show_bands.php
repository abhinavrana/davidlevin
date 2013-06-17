<?php
/**
 *Template name: Las vegas show bands
 */

get_header(); ?>
<!--
<script type="text/javascript">
jQuery(document).ready(function(){
jQuery("#tabs").tabs();
jQuery("#accordion").accordion();
});
</script>
-->
	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
