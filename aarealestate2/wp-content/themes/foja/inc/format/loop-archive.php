<article class="blog-item selector-padding blog-item selector-padding column column-2 tablet-column-2 mobile-column-1">
    <div class="post-content-wrap">
        <?php if(has_post_thumbnail()) {  ?>
        <div class="post-thumb">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
                <div class="foja-overlay"></div>
            </a>
        </div><!-- thumbnail-->
        <?php } ?>
        <div class="post-content">
            <div class="meta-wrapper clearfix">
                <!-- if use title -->
                <h2 class="post-title entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="separator-line"><span></span></div>
                <!-- if use title -->
                <div class="post-meta clearfix">
                    <div class="meta-info">
                        <span class="author meta-item">
                            <span class="author-separator"><?php esc_html_e( 'by', 'foja' ); ?></span>
                            <span class="vcard"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"> <?php echo get_the_author_meta( 'display_name' ); ?></a></span>
                        </span>
                        <span class="standard-post-categories meta-item">
                            <?php esc_html_e( 'in ', 'foja' ); ?><?php the_category(', '); ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="date">
                <a href="<?php the_permalink(); ?>">
                    <span class="thedate"><?php echo get_the_date('d'); ?></span>
                    <span class="month"><?php echo get_the_date('F'); ?></span><span class="year"><?php echo get_the_date('Y'); ?></span>
                </a>
            </div>
            <!-- if use excerpt -->
            <div class="post-text">
                <p><?php echo foja_excerpt(15);?></p>
            </div>
            <!-- if use excerpt -->
            <a href="<?php the_permalink(); ?>" class="read-more">
                Read More
            </a>
            <!-- if use read_more -->
        </div>
    </div>
</article>
