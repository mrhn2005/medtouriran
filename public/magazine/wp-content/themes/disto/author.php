<?php get_header();
$infinite_pagination = '';
?>

<div class="main_title_wrapper jl_na_bg_title">
    <div class="container">
        <div class="row">
            <div class="col-md-12 main_title_col">
                <?php
                  
              echo '<h1 class="categories-title title"><span>';             
              echo get_the_author();
              echo '</span></h1>';
        
   ?>

            </div>
        </div>
    </div>
</div>

<div class="jl_post_loop_wrapper">
    <div class="container" id="wrapper_masonry">
        <div class="row">
            <div class="col-md-8 grid-sidebar" id="content">
                <div class="jl_wrapper_cat">
                    <div id="content_masonry" class="pagination_infinite_style_cat <?php echo esc_html($infinite_pagination);?>">
                      <div class="grid-sizer"></div>
                        <?php 
  $disto_qry = disto_get_qry();
  if ( $disto_qry->have_posts() ) {
    while ( $disto_qry->have_posts() ) { 
       $disto_qry->the_post();
        $disto_post_id = $post->ID;
          
            get_template_part( 'inc/post-formats/grid-sidebar/content', get_post_format() );
          
            }}else{       
                        if (is_search()) {  esc_html_e('No result found', 'disto');}
                  }

?>

                    </div>

                    <?php
disto_pagination( $disto_qry );
wp_reset_postdata();
?>
                </div>
            </div>
            <div class="col-md-4" id="sidebar">
                <?php disto_category_sidebar();?>
            </div>
        </div>

    </div>
</div>
<!-- end content -->
<?php get_footer(); ?>