<?php
if ( ! defined( 'ABSPATH' ) ) exit;
//Set the Post Custom Field in the WP dashboard as Name/Value pair
function elono_bac_PostViews($post_ID) {
 
    //Set the name of the Posts Custom Field.
    $count_key = 'post_views_count';
     
    //Returns values of the custom field with the specified key from the specified post.
    $count = get_post_meta($post_ID, $count_key, true);
     
    //If the the Post Custom Field value is empty.
    if($count == ''){
        $count = 0; // set the counter to zero.
         
        //Delete all custom fields with the specified key from the specified post.
        delete_post_meta($post_ID, $count_key);
         
        //Add a custom (meta) field (Name/value)to the specified post.
        add_post_meta($post_ID, $count_key, '0');
        //return '<i class="icon-jl_fire"></i>'.$count;

        $input = number_format($count);
        $input_count = substr_count($input, ',');
        if($input_count != '0'){
        if($input_count == '1'){
            return ''.round($count/1000, 1) .'k';
        } else if($input_count == '2'){
            return ''.round($count/1000000, 1) .'k';
        } else if($input_count == '3'){
            return substr($input, 0,  -12).'bil';
        } else {
            return;
        }
    } else {
        return ''.$input;
    }
     
    //If the the Post Custom Field value is NOT empty.
    }else{
        $count++; //increment the counter by 1.
        //Update the value of an existing meta key (custom field) for the specified post.
        update_post_meta($post_ID, $count_key, $count);
         
        //If statement, is just to have the singular form 'View' for the value '1'
        if($count == '1'){
        //return '<i class="icon-jl_fire"></i>'.$count;
        $input = number_format($count);
        $input_count = substr_count($input, ',');
        if($input_count != '0'){
        if($input_count == '1'){
            return ''.round($count/1000, 1) .'k';
        } else if($input_count == '2'){
            return ''.round($count/1000000, 1) .'k';
        } else if($input_count == '3'){
            return substr($input, 0,  -12).'bil';
        } else {
            return;
        }
    } else {
        return ''.$input;
    }

        }
        //In all other cases return (count) Views
        else {
        //return '<i class="icon-jl_fire"></i>'.$count;
        $input = number_format($count);
        $input_count = substr_count($input, ',');
        if($input_count != '0'){
        if($input_count == '1'){
            return ''.round($count/1000, 1) .'k';
        } else if($input_count == '2'){
            return ''.round($count/1000000, 1) .'k';
        } else if($input_count == '3'){
            return substr($input, 0,  -12).'bil';
        } else {
            return;
        }
    } else {
        return ''.$input;
    }

        }
    }
}

//Gets the  number of Post Views to be used later.
function elono_get_PostViews($post_ID){
    $count_key = 'post_views_count';
    //Returns values of the custom field with the specified key from the specified post.
    
    $count = get_post_meta($post_ID, $count_key, true);
    if($count){
    $input = number_format($count);
    //$input = number_format($count);
    $input_count = substr_count($input, ',');
    if($input_count != '0'){
        if($input_count == '1'){
            return round($count/1000, 1) .'k';
        } else if($input_count == '2'){
            return round($count/1000000, 1) .'k';
        } else if($input_count == '3'){
            return substr($input, 0,  -12).'bil';
        } else {
            return;
        }
    } else {
        return $input;
    }
    }else{
        return 0;
    }
    
    
    //return $count;
}
 
//Function that Adds a 'Views' Column to your Posts tab in WordPress Dashboard.
function elono_post_column_views($newcolumn){
    //Retrieves the translated string, if translation exists, and assign it to the 'default' array.
    $newcolumn['post_views'] = esc_html__('Views', 'disto');
    return $newcolumn;
}
 
//Function that Populates the 'Views' Column with the number of views count.
function elono_post_custom_column_views($column_name, $id){
     
    if($column_name === 'post_views'){
        // Display the Post View Count of the current post.
        // get_the_ID() - Returns the numeric ID of the current post.
        echo elono_get_PostViews(get_the_ID());
    }
}
//Hooks a function to a specific filter action.
//applied to the list of columns to print on the manage posts screen.
add_filter('manage_posts_columns', 'elono_post_column_views');
 
//Hooks a function to a specific action.
//allows you to add custom columns to the list post/custom post type pages.
//'10' default: specify the function's priority.
//and '2' is the number of the functions' arguments.
add_action('manage_posts_custom_column', 'elono_post_custom_column_views',10,2);