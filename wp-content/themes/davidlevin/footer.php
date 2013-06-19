<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<script type="text/javascript">
var counter = 0;
$('.single-block-img').hover(function(){
counter++;
$(this).parent().find('div.animateme').removeClass('animateme').addClass('animateme-current'+counter);
animateIt(counter);
});
function animateIt(counter){
var txt = $('.animateme-current'+counter).text();
var timeOut;
var txtLen = txt.length;
var char = 0;
$('.animateme-current'+counter).text('|');
(function typeIt() {
var humanize = Math.round(Math.random() * (200 - 30)) + 30;
timeOut = setTimeout(function() {
char++;
var type = txt.substring(0, char);
$('.animateme-current'+counter).text(type + '|');
typeIt();

if (char == txtLen) {
$('.animateme-current'+counter).text($('.animateme-current'+counter).text().slice(0, -1)); // remove the '|'
clearTimeout(timeOut);
}

}, 22);
}());

}
</script>
<?php wp_footer(); ?>
</body>
</html>
