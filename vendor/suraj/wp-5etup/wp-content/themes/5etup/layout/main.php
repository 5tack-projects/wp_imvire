<?php 
    // global $template; echo basename($template); 
?>
<?php 
    if(is_page() || is_single()) {
        if(is_page_template()) {
            global $template;
            $template_name = preg_replace('/\.php$/', '', basename($template));
            $template_name = str_replace('page-', '', $template_name);
            get_template_part("pages/$template_name");
        } else {
            get_template_part('layout/hero');
            get_template_part('partials/pageblocks/usp-cards');
            get_template_part('partials/pageblocks/general-info');
            get_template_part('partials/pageblocks/content');
            get_template_part('partials/pageblocks/cta');
            get_template_part('partials/pageblocks/blogs');
        }
        
    }

    // if(is_taxonomy('cases')) {
    //     get_template_part('layout/hero');
    // }

    // if(is_tax()) {
    //     echo "tax";
    // }

    if(is_home() || is_archive()) {
        get_template_part('layout/hero');
        get_template_part('layout/loop');
    }
?>