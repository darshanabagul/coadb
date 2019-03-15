<?php
/*Template Name: Faq*/
 get_header('sub');
?>
<div class="page-wrap">
    <?php get_header('search');?>
    <section class="tab-section hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul>
                        <?php 
                            $args = array(
                                'theme_location' => 'other',
                                'container' => 'div',
                                'container_class' => 'tab-wrap',
                                'items_wrap' => '%3$s', // removes ul
                            );
                        ?>
                        <?php wp_nav_menu( $args ); ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="space same-box-wrap information-section faq-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="panel-group" id="accordion">
                        <?php $cats = get_categories();
                            foreach ($cats as $key => $cat) {
                                $cat_id = $cat->term_id; 
                        ?>
                        <?php
                            $args = array('posts_per_page' => 100, 'category' => $cat_id, 'post_type' => 'faq');
                            $faq_posts = get_posts( $args );
                            if (!empty($faq_posts)) { ?>
                                <h2 class="heading"><?php echo $cat->name;?></h2>
                            <?php
                                foreach ( $faq_posts as $key=>$post ) : setup_postdata( $post ); ?>
                                    <div class="panel panel-default md-whiteframe-2dp">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php the_ID();?>"><?php the_title();?></a>
                                            </h4>
                                        </div>
                                        <div id="collapse<?php the_ID();?>" class="panel-collapse collapse <?php if($key==0) { echo 'in';} ?>">
                                            <div class="panel-body">
                                                <?php the_content();?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; 
                                wp_reset_postdata();
                            }
                        } ?> 
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Leave A Comment section End Here -->
<?php get_footer();?>