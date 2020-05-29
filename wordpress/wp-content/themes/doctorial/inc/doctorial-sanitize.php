<?php
    /**
     * SANITIZATION
     */
     
    function doctorial_sanitize_text($input){
        return sanitize_text_field($input);
    }
    
    function doctorial_sanitize_textarea($input){
        return wp_kses_post( force_balance_tags( $input ) );
    }
    
    function doctorial_sanitize_url($input){
        return esc_url_raw($input);
    }
    
    function doctorial_sanitize_checkbox($input){
        if($input == 1){
            return 1;
        }else{
            return '';
        }
    }
        
    function doctorial_sanitize_category_select($input){
        $doctorial_category_lists = doctorial_category_lists();
        if(array_key_exists($input,$doctorial_category_lists)){
            return $input;
        }else{
            return '';
        }
    }
    function doctorial_sanitize_weblayout($input){
            $bg_repeat = array(
                'fullwidth'   =>  esc_html__('Fullwidth Layout','doctorial'),
                'boxed'    =>  esc_html__('Boxed Layout','doctorial')
            );
            
            if(array_key_exists($input,$bg_repeat)){
                return $input;
            }else{
                return '';
            }
        }
    function doctorial_sanitize_transition_type($input){
            $option = array(
                'fade' => esc_html__('Fade', 'doctorial'),
                'horizontal' => esc_html__('Horizontal', 'doctorial'),
                'vertical' => esc_html__('Vertical', 'doctorial'),
            );
            
            if(array_key_exists($input,$option)){
                return $input;
            }else{
                return '';
            }
        }
    function doctorial_sanitize_integer($input){
        return absint($input);
    }

    
?>