<?php
/*
 * Template Name: Giovanni Panté HP
 */

get_header('giovannipante'); // This fxn gets the header.php file and renders it ?>
	<div id="primary" class="row-fluid">
		<div id="content" role="main" class="span8 offset2">
			<?php
                $args = array( 'post_type'=>'sezione');
                $loop = new WP_Query( $args );

                // Start the loop for your custom query
                if($loop->have_posts() ) : while ($loop->have_posts() ) : $loop->the_post();

                the_title();
                the_content();

                endwhile;
                endif;
            ?>

            <?php
                $args = array( 'post_type'=>'progetto');
                $loop = new WP_Query( $args );

                // Start the loop for your custom query
                if($loop->have_posts() ) : while ($loop->have_posts() ) : $loop->the_post();

                the_title();
                the_content();

                endwhile;
                endif;
            ?>
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
<?php get_footer('giovannipante'); // This fxn gets the footer.php file and renders it ?>