<?php
namespace Element_Ready_Pro\Modules\Blog\Templates;

/**
 *  Archive page Template
 *
 * @since 1.0
 */
class Category extends Base{

    public $tpl_type = 'category';
	
    /**
     * Archive Date
     * @varsion 1.1
     */
	public function register() {
      
        add_filter( 'category_template', [ $this , '_template_archive' ],50 );
        add_action( 'element_ready_act_tpl_archive', [ $this , 'dynamic_content' ],50 );
        add_filter( 'get_the_archive_title', [$this,'_archive_title'],10 );
	}
    function _archive_title( $title ) {

        if ( is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_author() ) {
            $title = '<span class="vcard">' . get_the_author() . '</span>';
        } elseif ( is_post_type_archive() ) {
            $title = post_type_archive_title( '', false );
        } elseif ( is_tax() ) {
            $title = single_term_title( '', false );
        }
      
        return $title;
    }
    public function _template_archive($template){
       
       $template_id   = $this->get_active_data();
       $template_slug = get_page_template_slug( $template_id );
       $full_width    = ELEMENT_READY_BLOG_MODULE_PATH . '/Templates/archive/full-width.php';
       $canvas_width  = ELEMENT_READY_BLOG_MODULE_PATH . '/Templates/archive/offcanvas.php';
      
       if( $template_id > 1 ){
         
           if($template_slug == 'elementor_canvas' && file_exists($canvas_width)){
               return $canvas_width; 
           }
          
           if(file_exists($full_width)){
               return $full_width;
           }
        
       } 

       return $template; 
    }
}