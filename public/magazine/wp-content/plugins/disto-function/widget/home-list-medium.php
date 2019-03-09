<?php
add_action( 'widgets_init', 'home_post_list_medium_init' );

function home_post_list_medium_init() {
    register_widget( 'home_post_list_medium_widget' );
}

class home_post_list_medium_widget extends WP_Widget {

/*-----------------------------------------------------------------------------------*/
/*  Widget Setup
/*-----------------------------------------------------------------------------------*/
            
    public function __construct() {
        $widget_ops = array(
            'classname'   => 'home_post_list_medium_widget', 
            'description' => esc_html__('Display list post.', 'disto'),
            'panels_groups' => array('panels')
        );
        parent::__construct('home_post_list_medium_widget', esc_html__('jellywp: Home list post', 'disto'), $widget_ops);
    }

/*-----------------------------------------------------------------------------------*/
/*  Display Widget
/*-----------------------------------------------------------------------------------*/

    function widget($args, $instance) {
        extract($args);

        $titles = apply_filters('widget_title', empty($instance['titles']) ? 'Recent Posts' : $instance['titles'], $instance, $this->id_base);
    
        if (isset($instance['number_offset'])==''){$number_offset = 0;}else{$number_offset = absint($instance['number_offset']);}
        if (isset($instance['number_show'])==''){$number_show = 0;}else{$number_show = absint($instance['number_show']);}
        if (!$cats = $instance["cats"]){$cats = '';}
        if (isset($instance['small_title_widget'])==''){$small_title_widget = '';}else{$small_title_widget = absint($instance['small_title_widget']);}

        $jellywp_args = array(
            'showposts' => $number_show,
            'category__in' => $cats,
            'ignore_sticky_posts' => 1,
            'offset' => $number_offset
        );

        $jellywp_widget = null;
        $jellywp_widget = new WP_Query($jellywp_args);

        ?>
<div class="post_list_medium_widget jl_nonav_margin page_builder_listpost jelly_homepage_builder <?php if($small_title_widget == 1){echo 'jl_small_block_title';}else{}?>">
    <?php if (!empty($instance['titles'])) {?>
    <div class="homepage_builder_title">
        <h2 class="builder_title_home_page">
            <?php echo esc_attr($instance["titles"]);?>
        </h2>
    </div>
    <?php }?>
    <?php
        $row_count=0;
        while ($jellywp_widget->have_posts()) {
           $row_count++;
           $post_id = get_the_ID();
           $jellywp_widget->the_post();
           $categories = get_the_category(get_the_ID());
        ?>
    <div class="blog_list_post_style  <?php if(!get_theme_mod('disable_css_animation')==1){echo " appear_animation ";}else{echo " ";}?>">
        <div class="image-post-thumb featured-thumbnail home_page_builder_thumbnial">
            <div class="jl_img_container">
                <?php $slider_large_thumb_id = get_post_thumbnail_id();
  $slider_large_image_header = wp_get_attachment_image_src( $slider_large_thumb_id, 'disto_large_feature_image', true ); ?>
                <?php if($slider_large_thumb_id){?>
                <span class="image_grid_header_absolute" style="background-image: url('<?php echo esc_url($slider_large_image_header[0]); ?>')"></span>
                <?php }else{?>
                <span class="image_grid_header_absolute" style="background-image: url('<?php echo esc_url(get_template_directory_uri().'/img/feature_img/header_carousel.jpg');?>')"></span>
                <?php }?>
                <a href="<?php the_permalink(); ?>" class="link_grid_header_absolute"></a>
            </div>
        </div>
        <div class="post-entry-content">
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
            }
 ?>
            <?php echo disto_post_meta_dc(get_the_ID()); ?>
            <h3 class="image-post-title"><a href="<?php the_permalink(); ?>">
                    <?php the_title()?></a></h3>


            <div class="large_post_content">
                <p>
                    <?php echo disto_list_post_excerpt(20); ?>
                </p>
            </div>
        </div>
    </div>
    <?php }?>
</div>
<?php        
        wp_reset_postdata(); 
    }

/*-----------------------------------------------------------------------------------*/
/*  Update Widget
/*-----------------------------------------------------------------------------------*/
    
    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['titles'] = strip_tags($new_instance['titles']);
        $instance['number_show'] = absint($new_instance['number_show']);  
        $instance['number_offset'] = absint($new_instance['number_offset']);  
        $instance['cats'] = $new_instance['cats'];
        $instance['small_title_widget'] = esc_attr($new_instance['small_title_widget']);
        return $instance;
    }

/*-----------------------------------------------------------------------------------*/
/*  Widget Settings (Displays the widget settings controls on the widget panel)
/*-----------------------------------------------------------------------------------*/
    
    function form( $instance ) {
        $titles = isset($instance['titles']) ? esc_attr($instance['titles']) : 'Home post list';
        $number_show = isset($instance['number_show']) ? absint($instance['number_show']) : 4;
        $number_offset = isset($instance['number_offset']) ? absint($instance['number_offset']) : 0;
        $post_exception = isset($instance['small_title_widget']) ? absint($instance['small_title_widget']) : '';
        ?>
<p><label for="<?php echo esc_attr($this->get_field_id('titles')); ?>">
        <?php esc_attr_e('Title:', 'disto'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('titles')); ?>" name="<?php echo esc_attr($this->get_field_name('titles')); ?>" type="text" value="<?php echo esc_attr($titles); ?>" /></p>

<p><label for="<?php echo esc_attr($this->get_field_id('number_show')); ?>">
        <?php esc_attr_e('Number of posts to show:', 'disto'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number_show')); ?>" name="<?php echo esc_attr($this->get_field_name('number_show')); ?>" type="text" value="<?php echo esc_attr($number_show); ?>" size="3" /></p>
<p><label for="<?php echo esc_attr($this->get_field_id('number_offset')); ?>">
        <?php esc_attr_e('Offset posts:', 'disto'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number_offset')); ?>" name="<?php echo esc_attr($this->get_field_name('number_offset')); ?>" type="text" value="<?php echo esc_attr($number_offset); ?>" size="3" /></p>
<p>
    <input class="checkbox" type="checkbox" id="<?php echo esc_attr($this->get_field_id('small_title_widget')); ?>" value="1" name="<?php echo esc_attr($this->get_field_name('small_title_widget')); ?>" <?php if(isset($instance[ 'small_title_widget']) && $instance[ 'small_title_widget']=='1' ) echo 'checked="checked"'; ?> />
    <label for="<?php echo esc_attr($this->get_field_id('small_title_widget')); ?>">Use Small Title Block</label>
</p>

<p>
    <label for="<?php echo esc_attr($this->get_field_id('cats')); ?>">
        <?php esc_html_e('Choose your category:', 'disto');?>

        <?php
                   $categories=  get_categories();
                     echo "<br/>";
                     foreach ($categories as $cat) {
                    $option = '<input type="checkbox" id="' . $this->get_field_id('cats') . '[]" name="' . $this->get_field_name('cats') . '[]"';
              
                    if (isset($instance['cats'])) {
                        foreach ($instance['cats'] as $cats) {
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
    </label>
</p>

<?php
    }
}
?>