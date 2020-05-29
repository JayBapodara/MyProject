<?php
/**
  *
 * @package Doctorial
 */
$ns_search_placeholder  = get_theme_mod('doctorial_header_search_placeholder',esc_html__("Search...","doctorial"));
$ns_search_button_text  = get_theme_mod('doctorial_header_search_button_text',esc_html__("Search
  ","doctorial"));
 ?>
<div class="ft-search-wrap clear">
    <div class="search-icon">      
      <i class="fa fa-search"></i>
      <i class="fa fa-close"></i>
    </div>
    <div class="ft-search">
     <form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-form" method="get" role="search">
        <label>
            <span class="screen-reader-text"><?php esc_html_e('Search for:','doctorial')?></span>
            <input type="search" title="<?php esc_attr_e('Search for:','doctorial');?>" name="s" value="<?php the_search_query(); ?>" placeholder="<?php echo esc_attr($ns_search_placeholder); ?>" class="search-field" />
        </label>
        <input type="submit" value="<?php echo esc_attr($ns_search_button_text); ?>" class="search-submit" />
     </form> 
    </div>
</div>