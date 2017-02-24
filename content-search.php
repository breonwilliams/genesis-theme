<article id="post-<?php the_ID(); ?>" <?php post_class('padbot-40'); ?>>
    <header class="entry-header">
        <div class="list-item-title">
            <h2><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            <a href="<?php the_permalink(); ?>" class="btn btn-default btn-bordered">More Info</a>
        </div>

        <?php if ('post' == get_post_type()) { ?>
            <!-- .entry-meta -->
        <?php } //endif; ?>
    </header><!-- .entry-header -->


    <?php if (is_search()) { // Only display Excerpts for Search ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
            <div class="clearfix"></div>
        </div><!-- .entry-summary -->
    <?php } else { ?>
        <div class="entry-content padbot-20">
            <?php the_content(bootstrapBasicMoreLinkText()); ?>
            <div class="clearfix"></div>
            <?php
            /**
             * This wp_link_pages option adapt to use bootstrap pagination style.
             * The other part of this pager is in inc/template-tags.php function name bootstrapBasicLinkPagesLink() which is called by wp_link_pages_link filter.
             */
            wp_link_pages(array(
                'before' => '<div class="page-links">' . __('Pages:', 'bootstrap-basic') . ' <ul class="pagination">',
                'after'  => '</ul></div>',
                'separator' => ''
            ));
            ?>
        </div><!-- .entry-content -->
    <?php } //endif; ?>


    <!-- .entry-meta -->
</article><!-- #post-## -->