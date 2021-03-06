<?php
get_header(); ?>
<div class="col-8" id="main">
    <div class="container-fluid ">
        <header class="archive-header">
  				<h3 class="tag-title"><?php printf('标签: %s 下的文章',single_tag_title('',false)); ?></h3>
  				<?php if ( tag_description() ) : // Show an optional tag description ?>
  				<div class="archive-meta"><?php echo tag_description(); ?></div>
  				<?php endif; ?>
  			</header><!-- .archive-header -->
    </div>

      	<div class="res-cons">
      		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      			<article class="post">
      				<h2 class="post-title">
      					<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
      				</h2>
      				<ul class="post-meta">
      					<li><?php the_time('F j, Y'); ?></li>
      					<li><?php  the_author_posts_link(); ?></li>
      					<li><?php the_category(', ') ?></li>
      					<li class="comment-count"><?php comments_popup_link('0 条评论', ' 1 条评论', '% 条评论'); ?></li>
      				</ul>
      				<div class="post-content">
      					<?php the_excerpt('阅读剩余部分 -'); ?>
      				</div>
      			</article>
      		<?php endwhile; endif;?>
      		<?php pagenavi();?>
      	</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
