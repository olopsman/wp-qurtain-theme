<!--right aside -->
<aside class="sidebar js-sidebar">
        <!-- search -->
        <div class="search"><?php // include (TEMPLATEPATH . '/searchform.php'); ?></div>
        <div id="rightsidebar">
          <ul>
            <?php 	/* Widgetized sidebar, if you have the plugin installed. */
                if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar2') ) : ?>

            <?php if ( is_404() || is_category() || is_day() || is_month() ||
                  is_year() || is_search() || is_paged() ) {
            ?> <li>

            <?php /* If this is a 404 page */ if (is_404()) { ?>
            <?php /* If this is a category archive */ } elseif (is_category()) { ?>
            <p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

            <?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
            <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
            for the day <?php the_time('l, F jS, Y'); ?>.</p>

            <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
            <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
            for <?php the_time('F, Y'); ?>.</p>

            <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
            <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
            for the year <?php the_time('Y'); ?>.</p>

            <?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
            <p>You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
            for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

            <?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
            <p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives.</p>

            <?php } ?>

            </li> <?php }?>

            <?php //wp_list_pages('title_li=<h2>Pages</h2>' ); ?>


            <?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>

            <li><h2>Archives</h2>
              <ul>
              <?php wp_get_archives('type=monthly'); ?>
              </ul>
            </li>
            <?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
              <?php wp_list_bookmarks(); ?>


            <?php } ?>

            <?php endif; ?>

          </ul>
        </div>

        <div class="show-md" style="margin-bottom:24px;">
        <!-- another ads by google -->
        </div>
      </aside>
