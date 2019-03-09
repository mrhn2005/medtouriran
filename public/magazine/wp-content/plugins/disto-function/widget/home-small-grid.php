<?php
function home_ajax_grid_small_three_col() {
    register_widget( 'home_ajax_grid_small_three_col_widget' );
}
add_action( 'widgets_init', 'home_ajax_grid_small_three_col' );
class home_ajax_grid_small_three_col_widget extends WP_Widget {

    /*-----------------------------------------------------------------------------------*/
    /*  Widget Setup
    /*-----------------------------------------------------------------------------------*/

    protected $glob;
    function __construct() {
        $widget_ops = array(
            'classname' => 'jelly_category_ajax_widget',
            'description' => esc_html__('Displays Category Posts.', 'disto'),
            'panels_groups' => array('panels')
        );
        parent::__construct('home_ajax_grid_small_three_col_widget', esc_html__('jellywp: Home Grid Post', 'disto'), $widget_ops);
        $this->glob=0;
    }

    /*-----------------------------------------------------------------------------------*/
    /*  Display Widget
    /*-----------------------------------------------------------------------------------*/

    public function widget( $args, $instance ) {
        $this->glob++;
        $style_col ="";
        $title = apply_filters( 'widget_title', $instance['title'] );
        if (isset($instance['number_col'])==''){$number_col = 'col3';}else{$number_col = esc_attr($instance['number_col']);}
        if (isset($instance['style_col'])==''){$number_col = 'col3';}else{$style_col = esc_attr($instance['style_col']);}
        if (isset($instance['font_size'])==''){$font_size = 'jl_fontsize16';}else{$font_size = esc_attr($instance['font_size']);}
        if (isset($instance['number_offset'])==''){$number_offset = 0;}else{$number_offset = absint($instance['number_offset']);}
        if (isset($instance['post_exception'])==''){$post_exception = '';}else{$post_exception = absint($instance['post_exception']);}
        if (isset($instance['post_cat_none'])==''){$post_cat_none = '';}else{$post_cat_none = absint($instance['post_cat_none']);}
        if (isset($instance['show_post_format'])==''){$show_post_format = '';}else{$show_post_format = absint($instance['show_post_format']);}
        $cat = isset($instance["cat"]) ? $instance["cat"] : "";
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
<div class="jelly_homepage_builder jl_nonav_margin homepage_builder_3grid_post <?php echo esc_attr($font_size);?> <?php if($number_col=='col2'){echo " jl_cus_grid2 ";}elseif($number_col=='col4'){echo "jl_cus_grid4 ";}elseif($number_col=='col5'){echo "jl_cus_grid5 ";}else{echo "jl_cus_grid3 ";}?> <?php if($style_col=='style3'){echo " col_style3 ";}elseif($style_col=='style2'){echo " colstyle2 ";}else{echo " colstyle1 ";}?>">
    <?php if (!empty($instance['title'])) {?>
    <div class="homepage_builder_title">
        <h2>
            <?php echo esc_attr($instance["title"]);?>
        </h2>
    </div>
    <?php }?>
    <div class="jl_wrapper_row">
        <div class="row">
            <?php
        $row_count=0;
        while ($jellywp_widget->have_posts()) {
           $row_count++;
           $post_id = get_the_ID();
           $jellywp_widget->the_post();
           $categories = get_the_category(get_the_ID());
        ?>


            <div class="col-md-4 blog_grid_post_style  <?php echo "jl_row_".$row_count; if(!get_theme_mod('disable_css_animation')==1){echo " appear_animation ";}else{echo " ";}?>">
                <div class="jl_grid_box_wrapper">
                <div class="image-post-thumb">
                    <a href="<?php the_permalink(); ?>" class="link_image featured-thumbnail" title="<?php the_title_attribute(); ?>">
                        <?php if ( has_post_thumbnail()) {
                            if($number_col=='col2'){
                            the_post_thumbnail('disto_large_feature_image');
                            }elseif($number_col=='col3'){
                            the_post_thumbnail('disto_large_feature_image');    
                            }else{
                            the_post_thumbnail('disto_slider_grid_small');
                            }
                        }else{echo '<img class="no_feature_img" src="'.esc_url(get_template_directory_uri().'/img/feature_img/carousel-image-header-style.jpg').'">';} ?>
                        <div class="background_over_image"></div>
                    </a>
                    <?php 
    if($post_cat_none == 1){}else{
        if(get_theme_mod('disable_post_category') !=1){
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
            }
 ?>
                    <?php if($show_post_format == 1){echo disto_post_type();}else{}?>                
                </div>
                <div class="post-entry-content">                    
                    
                    <h3 class="image-post-title"><a href="<?php the_permalink(); ?>">
                            <?php the_title()?></a></h3>
                            <?php echo disto_post_meta(get_the_ID()); ?>
                    <?php if($post_exception == 1){?>
                <div class="content_post_grid">
                        <p>
                            <?php echo disto_list_post_excerpt(20); ?>
                        </p>
                    </div>
                    <?php }else{}?>                                        
                </div>
            </div>
            </div>
            <?php 
if($number_col=='col2'){
    if($row_count %2==0){echo '<div class="clear_line_3col_home"></div>';}
}elseif($number_col=='col4'){
    if($row_count %4==0){echo '<div class="clear_line_3col_home"></div>';}
}elseif($number_col=='col5'){
    if($row_count %5==0){echo '<div class="clear_line_3col_home"></div>';}
}else{
    if($row_count %3==0){echo '<div class="clear_line_3col_home"></div>';}
}?>


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
        $instance['number_col'] =  strip_tags($new_instance['number_col']);
        $instance['style_col'] =  strip_tags($new_instance['style_col']);
        $instance['font_size'] =  strip_tags($new_instance['font_size']);
        $instance['number_offset'] = absint($new_instance['number_offset']); 
        $instance['post_exception'] = esc_attr($new_instance['post_exception']);
        $instance['post_cat_none'] = esc_attr($new_instance['post_cat_none']);
        $instance['show_post_format'] = esc_attr($new_instance['show_post_format']);
        $instance['loader_img'] = ( ! empty( $new_instance['loader_img'] ) ) ? strip_tags( $new_instance['loader_img'] ) : '';
        return $instance;
    }

    /*-----------------------------------------------------------------------------------*/
    /*  Form Widget
    /*-----------------------------------------------------------------------------------*/

    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {$title = $instance[ 'title' ];}else {$title = esc_html__( 'Home Small Grid', 'disto' );}
        if ( isset( $instance[ 'post_per_cat' ] ) ) {$post_per_cat = $instance[ 'post_per_cat' ];}else {$post_per_cat = "6";}
        $number_col    = isset( $instance['number_col'] ) ? esc_attr( $instance['number_col'] ) : 'col3';
        $style_col    = isset( $instance['style_col'] ) ? esc_attr( $instance['style_col'] ) : 'style1';        
        $font_size     = isset( $instance['font_size'] ) ? esc_attr( $instance['font_size'] ) : 'jl_fontsize16';
        $number_offset = isset($instance['number_offset']) ? absint($instance['number_offset']) : 0;
        $post_exception = isset($instance['post_exception']) ? absint($instance['post_exception']) : '';
        $post_cat_none = isset($instance['post_cat_none']) ? absint($instance['post_cat_none']) : '';
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
    <input class="checkbox" type="checkbox" id="<?php echo esc_attr($this->get_field_id('post_exception')); ?>" value="1" name="<?php echo esc_attr($this->get_field_name('post_exception')); ?>" <?php if(isset($instance[ 'post_exception']) && $instance[ 'post_exception']=='1' ) echo 'checked="checked"'; ?> />
    <label for="<?php echo esc_attr($this->get_field_id('post_exception')); ?>">Enable post exception</label>
</p>

<p>
    <input class="checkbox" type="checkbox" id="<?php echo esc_attr($this->get_field_id('post_cat_none')); ?>" value="1" name="<?php echo esc_attr($this->get_field_name('post_cat_none')); ?>" <?php if(isset($instance[ 'post_cat_none']) && $instance[ 'post_cat_none']=='1' ) echo 'checked="checked"'; ?> />
    <label for="<?php echo esc_attr($this->get_field_id('post_cat_none')); ?>">Disable post category</label>
</p>

<p>
    <input class="checkbox" type="checkbox" id="<?php echo esc_attr($this->get_field_id('show_post_format')); ?>" value="1" name="<?php echo esc_attr($this->get_field_name('show_post_format')); ?>" <?php if(isset($instance[ 'show_post_format']) && $instance[ 'show_post_format']=='1' ) echo 'checked="checked"'; ?> />
    <label for="<?php echo esc_attr($this->get_field_id('show_post_format')); ?>">Show Post Format</label>
</p>

<p><label for="<?php echo esc_attr( $this->get_field_id( 'number_col' ) ); ?>"><strong>
            <?php  echo "Grid Columns:"; ?></strong></label>
    <select id="<?php echo esc_attr( $this->get_field_id( 'number_col' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number_col' ) ); ?>">
        <option value="col2" <?php if ( $number_col=='col2' ) echo 'selected="selected"'; ?>>2 Columns</option>
        <option value="col3" <?php if ( $number_col=='col3' ) echo 'selected="selected"'; ?>>3 Columns</option>
        <option value="col4" <?php if ( $number_col=='col4' ) echo 'selected="selected"'; ?>>4 Columns</option>
        <option value="col5" <?php if ( $number_col=='col5' ) echo 'selected="selected"'; ?>>5 Columns</option>
    </select></p>

<p><label for="<?php echo esc_attr( $this->get_field_id( 'style_col' ) ); ?>"><strong>
            <?php  echo "Columns Style:"; ?></strong></label>
    <select id="<?php echo esc_attr( $this->get_field_id( 'style_col' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'style_col' ) ); ?>">
        <option value="style1" <?php if ( $style_col=='style1' ) echo 'selected="selected"'; ?>>Style 1</option>
        <option value="style2" <?php if ( $style_col=='style2' ) echo 'selected="selected"'; ?>>Style 2</option>
        <option value="style3" <?php if ( $style_col=='style3' ) echo 'selected="selected"'; ?>>Style 3</option>
    </select></p>    

<p><label for="<?php echo esc_attr( $this->get_field_id( 'font_size' ) ); ?>"><strong>
            <?php  echo "Font Size:"; ?></strong></label>
    <select id="<?php echo esc_attr( $this->get_field_id( 'font_size' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'font_size' ) ); ?>">
        <option value="jl_fontsize13" <?php if ( $font_size=='jl_fontsize13' ) echo 'selected="selected"'; ?>>font size 13</option>
        <option value="jl_fontsize14" <?php if ( $font_size=='jl_fontsize14' ) echo 'selected="selected"'; ?>>font size 14</option>
        <option value="jl_fontsize15" <?php if ( $font_size=='jl_fontsize15' ) echo 'selected="selected"'; ?>>font size 15</option>
        <option value="jl_fontsize16" <?php if ( $font_size=='jl_fontsize16' ) echo 'selected="selected"'; ?>>font size 16</option>
        <option value="jl_fontsize17" <?php if ( $font_size=='jl_fontsize17' ) echo 'selected="selected"'; ?>>font size 17</option>
        <option value="jl_fontsize18" <?php if ( $font_size=='jl_fontsize18' ) echo 'selected="selected"'; ?>>font size 18</option>
        <option value="jl_fontsize19" <?php if ( $font_size=='jl_fontsize19' ) echo 'selected="selected"'; ?>>font size 19</option>
        <option value="jl_fontsize20" <?php if ( $font_size=='jl_fontsize20' ) echo 'selected="selected"'; ?>>font size 20</option>
        <option value="jl_fontsize21" <?php if ( $font_size=='jl_fontsize21' ) echo 'selected="selected"'; ?>>font size 21</option>
        <option value="jl_fontsize22" <?php if ( $font_size=='jl_fontsize22' ) echo 'selected="selected"'; ?>>font size 22</option>
        <option value="jl_fontsize23" <?php if ( $font_size=='jl_fontsize23' ) echo 'selected="selected"'; ?>>font size 23</option>
        <option value="jl_fontsize24" <?php if ( $font_size=='jl_fontsize24' ) echo 'selected="selected"'; ?>>font size 24</option>
        <option value="jl_fontsize25" <?php if ( $font_size=='jl_fontsize25' ) echo 'selected="selected"'; ?>>font size 25</option>
        <option value="jl_fontsize26" <?php if ( $font_size=='jl_fontsize26' ) echo 'selected="selected"'; ?>>font size 26</option>
        <option value="jl_fontsize27" <?php if ( $font_size=='jl_fontsize27' ) echo 'selected="selected"'; ?>>font size 27</option>
        <option value="jl_fontsize28" <?php if ( $font_size=='jl_fontsize28' ) echo 'selected="selected"'; ?>>font size 28</option>
        <option value="jl_fontsize29" <?php if ( $font_size=='jl_fontsize29' ) echo 'selected="selected"'; ?>>font size 29</option>
        <option value="jl_fontsize30" <?php if ( $font_size=='jl_fontsize30' ) echo 'selected="selected"'; ?>>font size 30</option>
        <option value="jl_fontsize31" <?php if ( $font_size=='jl_fontsize31' ) echo 'selected="selected"'; ?>>font size 31</option>
        <option value="jl_fontsize32" <?php if ( $font_size=='jl_fontsize32' ) echo 'selected="selected"'; ?>>font size 32</option>
        <option value="jl_fontsize33" <?php if ( $font_size=='jl_fontsize33' ) echo 'selected="selected"'; ?>>font size 33</option>
        <option value="jl_fontsize34" <?php if ( $font_size=='jl_fontsize34' ) echo 'selected="selected"'; ?>>font size 34</option>
        <option value="jl_fontsize35" <?php if ( $font_size=='jl_fontsize35' ) echo 'selected="selected"'; ?>>font size 35</option>
        <option value="jl_fontsize36" <?php if ( $font_size=='jl_fontsize36' ) echo 'selected="selected"'; ?>>font size 36</option>
        <option value="jl_fontsize37" <?php if ( $font_size=='jl_fontsize37' ) echo 'selected="selected"'; ?>>font size 37</option>
        <option value="jl_fontsize38" <?php if ( $font_size=='jl_fontsize38' ) echo 'selected="selected"'; ?>>font size 38</option>
        <option value="jl_fontsize39" <?php if ( $font_size=='jl_fontsize39' ) echo 'selected="selected"'; ?>>font size 39</option>
        <option value="jl_fontsize40" <?php if ( $font_size=='jl_fontsize40' ) echo 'selected="selected"'; ?>>font size 40</option>

    </select></p>

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