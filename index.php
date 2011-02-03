<?php get_header(); ?>
  <div id="bd" class="yui-navset">
	    
    <div id="yui-main">
		<div class="yui-b" >
			<div class="yui-ge"><div class="yui-u first">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
<!-- item -->
				<div class="item entry" id="post-<?php the_ID(); ?>">
				          <div class="itemhead">
				            <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				            <div class="chronodata"><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></div>
				          </div>
						  <div class="storycontent">
								<?php the_content('Read more &raquo;'); ?>
						  </div>
				          <small class="metadata">
							 <span class="category">Filed under: <?php the_category(', ') ?> <? if(!is_single()) echo "|"; ?> <?php edit_post_link('Edit', '', ' | '); ?> <?php comments_popup_link('Comment (0)', ' Comment (1)', 'Comments (%)'); ?></span>
							 <?php if ( function_exists('wp_tag_cloud') ) : ?>
							 <?php the_tags('<span class="tags">Article tags: ', ', ' , '</span>'); ?>
							 <?php endif; ?>
						  </small>
				 </div>
<!-- end item -->

<?php comments_template(); // Get wp-comments.php template ?>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
			<p> </p>
		</div>

	<?php else : ?>

		<h2 class="center">Страница не найдена</h2>
        <br />
		<p class="center">Страницу, которую вы запрашиваете, съел Дракон.</p>

	<?php endif; ?>
<!-- end content -->
<!-- 2nd sidebar -->
</div><!-- end yiu-u --><div class="yui-u" id="third"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('rightsidebar') ) : ?><h4>Extra Column</h4><p>You can fill this column by editing the index.php theme file. Or by Widget support.</p><?php endif; ?></div>
<!-- end 2nd sidebar -->
			</div>
		</div>
	</div>
	<div class="yui-b" id="secondary">

<?php get_sidebar(); ?>

	</div>
  </div>
<?php get_footer(); ?>