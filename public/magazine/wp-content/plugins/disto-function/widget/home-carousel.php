<?php
function jl_home_carousel() {
    register_widget( 'jl_home_carousel_widget' );
}
add_action( 'widgets_init', 'jl_home_carousel' );
class jl_home_carousel_widget extends WP_Widget {

    /*-----------------------------------------------------------------------------------*/
    /*  Widget Setup
    /*-----------------------------------------------------------------------------------*/

    protected $glob;
    function __construct() {
        $widget_ops = array(
            'classname' => 'jelly_home_carousel_widget',
            'description' => esc_html__('Displays Category Posts.', 'disto'),
            'panels_groups' => array('panels')
        );
        parent::__construct('jl_home_carousel_widget', esc_html__('jellywp: Home Carousel', 'disto'), $widget_ops);
        $this->glob=0;
    }

    /*-----------------------------------------------------------------------------------*/
    /*  Display Widget
    /*-----------------------------------------------------------------------------------*/

    public function widget( $args, $instance ) {
        $this->glob++;
        $title = apply_filters( 'widget_title', $instance['title'] );
        if (isset($instance['number_offset'])==''){$number_offset = 0;}else{$number_offset = absint($instance['number_offset']);}
        $cat = isset($instance["cat"]) ? $instance["cat"] : "";
        if (isset($instance['small_title_widget'])==''){$small_title_widget = '';}else{$small_title_widget = absint($instance['small_title_widget']);}
        if (isset($instance['show_post_format'])==''){$show_post_format = '';}else{$show_post_format = absint($instance['show_post_format']);}
        $post_per_cat = addslashes($instance[ 'post_per_cat' ]);
        $jellywp_args = array(
            'showposts' => $post_per_cat,
            'category__in' => $cat,
            'ignore_sticky_posts' => 1,
            'offset' => $number_offset
        );
        ?>
<?php
        $jellywp_widget = null;
        $jellywp_widget = new WP_Query($jellywp_args);
        ?>
<div class="jelly_homepage_builder jl_car_home jl_nonav_margin homepage_builder_3grid_post <?php if($small_title_widget == 1){echo 'jl_small_block_title';}else{}?>">
    <?php if (!empty($instance['title'])) {?>
    <div class="homepage_builder_title">
        <h2>
            <?php echo esc_attr($instance["title"]);?>
        </h2>
    </div>
    <?php }?>
    <div class="jl_wrapper_row">
        <div class="row jl_home_carousel jelly_loading_pro">
            <?php
        $row_count=0;
        while ($jellywp_widget->have_posts()) {
           $row_count++;
           $post_id = get_the_ID();
           $jellywp_widget->the_post();
           $categories = get_the_category(get_the_ID());
        ?>


            <div class="col-md-3">
                <div class="jl_car_wrapper">
                    <div class="image-post-thumb">
                        <a href="<?php the_permalink(); ?>" class="link_image featured-thumbnail" title="<?php the_title_attribute(); ?>">
                            <?php if ( has_post_thumbnail()) {the_post_thumbnail('disto_carousel_smalls');}
else{echo '<img class="no_feature_img" src="'.esc_url(get_template_directory_uri().'/img/feature_img/carousel-image-header-style.jpg').'">';} ?>
                            <div class="background_over_image"></div>
                        </a>
                        <?php if(get_theme_mod('disable_post_category') !=1){
          $categories = get_the_category(get_the_ID());          
          if ($categories) {
            echo '<span class="meta-category-small">';
            foreach( $categories as $tag) {
              $tag_link = get_category_link($tag->term_id);
              $title_bg_Color = get_term_meta($tag->term_id, "category_color_options", true);
              $title_reactions = get_term_meta($tag->term_id, "disto_cat_reactions", true);
             if($title_reactions){}else{echo '<a class="post-category-color-text" style="background:'.$title_bg_Color.'" href="'.esc_url($tag_link).'">'.$tag->name.'</a>';}
            }
            echo "</span>";
            }
            if($show_post_format == 1){echo disto_post_type();}else{}
            }
 ?>
                    </div>
                    <div class="post-entry-content">
                        <h3 class="image-post-title"><a href="<?php the_permalink(); ?>">
                                <?php the_title()?></a></h3>
                        <?php echo disto_post_meta(get_the_ID()); ?>
                    </div>
                </div>
            </div>

            <?php }?>


        </div>
    </div>
</div>
<?php
        wp_reset_postdata();     
}

/*-----------------------------------------------------------------------------------*/
/*  Update Widget
/*-----------------------------------------------------------------------------------*/

    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['cat'] = $new_instance['cat'];
        $instance['post_per_cat'] = ( ! empty( $new_instance['post_per_cat'] ) ) ? strip_tags( $new_instance['post_per_cat'] ) : '';
        $instance['number_offset'] = absint($new_instance['number_offset']); 
        $instance['small_title_widget'] = esc_attr($new_instance['small_title_widget']);
        $instance['loader_img'] = ( ! empty( $new_instance['loader_img'] ) ) ? strip_tags( $new_instance['loader_img'] ) : '';
        $instance['show_post_format'] = esc_attr($new_instance['show_post_format']);
        return $instance;
    }

    /*-----------------------------------------------------------------------------------*/
    /*  Form Widget
    /*-----------------------------------------------------------------------------------*/

    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {$title = $instance[ 'title' ];}else {$title = esc_html__( 'Home Carousel', 'disto' );}
        if ( isset( $instance[ 'post_per_cat' ] ) ) {$post_per_cat = $instance[ 'post_per_cat' ];}else {$post_per_cat = "6";}
        $number_offset = isset($instance['number_offset']) ? absint($instance['number_offset']) : 0;
        $post_exception = isset($instance['small_title_widget']) ? absint($instance['small_title_widget']) : '';
        $show_post_format = isset($instance['show_post_format']) ? absint($instance['show_post_format']) : '';
        ?>

<p>
    <label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><strong>
            <?php esc_html_e( 'Title:', 'disto' ); ?></strong></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>

<p>
    <label for="<?php echo esc_attr($this->get_field_id( 'post_per_cat' )); ?>"><strong>
            <?php esc_html_e( 'Posts Per Page:', 'disto' ); ?></strong></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'post_per_cat' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'post_per_cat' )); ?>" type="text" value="<?php echo esc_attr( $post_per_cat ); ?>" />
</p>

<p><label for="<?php echo esc_attr($this->get_field_id('number_offset')); ?>"><strong>
            <?php esc_attr_e('Offset posts:', 'disto'); ?></strong></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number_offset')); ?>" name="<?php echo esc_attr($this->get_field_name('number_offset')); ?>" type="text" value="<?php echo esc_attr($number_offset); ?>" size="3" />
</p>
<p>
    <input class="checkbox" type="checkbox" id="<?php echo esc_attr($this->get_field_id('small_title_widget')); ?>" value="1" name="<?php echo esc_attr($this->get_field_name('small_title_widget')); ?>" <?php if(isset($instance[ 'small_title_widget']) && $instance[ 'small_title_widget']=='1' ) echo 'checked="checked"'; ?> />
    <label for="<?php echo esc_attr($this->get_field_id('small_title_widget')); ?>">Use Small Title Block</label>
</p>
<p>
    <input class="checkbox" type="checkbox" id="<?php echo esc_attr($this->get_field_id('show_post_format')); ?>" value="1" name="<?php echo esc_attr($this->get_field_name('show_post_format')); ?>" <?php if(isset($instance[ 'show_post_format']) && $instance[ 'show_post_format']=='1' ) echo 'checked="checked"'; ?> />
    <label for="<?php echo esc_attr($this->get_field_id('show_post_format')); ?>">Show Post Format</label>
</p>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('cat')); ?>"><strong>
            <?php esc_html_e('Choose your category:', 'disto'); ?></strong></label>

    <?php
                $categories = get_categories();
                print "<br/>";
                foreach ($categories as $cat) {
                    $option = '<input type="checkbox" id="' . $this->get_field_id('cat') . '[]" name="' . $this->get_field_name('cat') . '[]"';
                    if (isset($instance['cat'])) {
                        foreach ($instance['cat'] as $cats) {
                            if ($cats == $cat->term_id) {
                                $option = $option . ' checked="checked"';
                            }
                        }
                    }
                    $option .= ' value="' . $cat->term_id . '" />';
                    $option .= '&nbsp;';
                    $option .= $cat->cat_name.' ('.esc_html( $cat->category_count ).')';
                    $option .= '<br />';
                    print '<span class="jl_none_space"></span>'.$option;
                }
                ?>

</p>

<?php 
    }
}
?>