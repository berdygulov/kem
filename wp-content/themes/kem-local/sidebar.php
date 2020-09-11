<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kem-local
 */

?>
<div class="news-section-aside">
	<span class="news-section-aside-line-first"></span>
	<span class="news-section-aside-line-second"></span>
	<span class="news-section-aside-title">
		Недавие Публикаций
	</span>	
<?php 

$cat_news = new WP_Query([
	'category_name' => 'novosti',
	// 'category_name' => 'novosti',
	'posts_per_page' => 4,
	] );

	while ( $cat_news->have_posts() ) {
	$cat_news->the_post();
	?>
	<a href="<?php the_permalink();?>" class="news-section-aside-newsbox">
		<div class="news-section-aside-image">
			<img src="<?php echo get_the_post_thumbnail_url();?>" alt="news-section-aside-image">
		</div>
		<?php 
				$lates_post_date_month = get_the_date('M d');
				$lates_post_year = get_the_date('Y');
			?>
		<div class="news-section-aside-content">
			<p class="news-section-aside-text">
			<?php echo get_the_title(); ?>
			</p>
			<span class="news-section-aside-date">
			<?php echo $lates_post_date_month?>, <?php echo $lates_post_year?>
			</span>
		</div>
	</a>
	<?php } ?>
</div>

