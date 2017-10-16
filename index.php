<?php get_header(); ?>
<div class="container">
     <div id="intro" class="row">
          <div class="col4l">
               <img src="flat-earth.png" alt="flat-earth" class="responsive">
          </div>
          <div id="intro-right" class="col8l col12x">
               <h1>Turning your world upside-down</h1>
               <p>Trust your eyes and heart</p>
               <a href="#">Open your eyes</a>
          </div>
     </div>
</div>

<div class="content">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="post-header">
					<div class="date"><?php the_time( 'M j y' ); ?></div>
					<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<div class="author"><?php the_author(); ?></div>
				</div><!--.post-header-->
				<div class="entry clear">
					<?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
					<?php the_content(); ?>
					<?php edit_post_link(); ?>
					<?php wp_link_pages(); ?>
				</div><!--. entry-->
				<footer class="post-footer">
					<div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
				</footer><!--.post-footer-->
			</div><!-- .post-->
		<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
			<nav class="navigation index">
				<div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
				<div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
			</nav><!--.navigation-->
		<?php else : ?>
	<?php endif; ?>
</div><!--.content-->

<div id="liveshow">
     <div class="container">
          <div class="row">
               <div class="col6l col12x">
                    <h1>Watch the live show</h1>
                    <p>You know you want to know more</p>
                    <p>This will help you to start thinking out of the box and formulate your own ideas.</p>
               </div>
               <div class="col6l col12s topmargin">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/wRnQuJTLt5o?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
               </div>
          </div>
     </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
