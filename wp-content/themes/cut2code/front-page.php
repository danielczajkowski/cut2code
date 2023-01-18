<?php 
get_header(); 


$page_elements = get_field('page-elements');



    

foreach($page_elements as $page_elements_row) {
    switch ($page_elements_row['acf_fc_layout']) {
        case 'hero':
            $data = [
                'content_wrapper' => $page_elements_row['content_wrapper'],
                'gallery' => $page_elements_row['gallery'],
            ];
            get_template_part( 'components/page_sections/hero/hero_section', '', $data);
            break;
    
        case 'tripple_content':
            get_template_part( 'components/page_sections/tripple_content/tripple_content_section', '', $page_elements_row['tripple_repeater']);
            break;
    
        case 'image__content_-_5050':
            $data = [
                'content_wrapper' => $page_elements_row['content_wrapper'],
                'image' => $page_elements_row['image'],
            ];
            get_template_part( 'components/page_sections/image__content/image__content', '', $data);
            break;
    
        case 'big_header':
            $data = [
                'subheader' => $page_elements_row['subheader'],
                'header' => $page_elements_row['header'],
            ];
            get_template_part( 'components/page_sections/big_header/big_header_section', '', $data);
            break;

        case 'posts':
            get_template_part( 'components/page_sections/posts/post_section');
            break;
    
        case 'quote':
            get_template_part( 'components/page_sections/quote/quote_section', '', $page_elements_row['quote']);
            break;
    
        case 'newsletter':
            $data = [
                'subheader' => $page_elements_row['subheader'],
                'header' => $page_elements_row['header'],
            ];
            get_template_part( 'components/page_sections/newsletter/newsletter_section', '', $data);
            break;
        
        default:
            break;
    }
}





get_footer(); 
?>