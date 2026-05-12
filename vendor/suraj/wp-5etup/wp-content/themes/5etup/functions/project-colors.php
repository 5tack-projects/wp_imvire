<?php 

    // functions.php in je thema

    // Functie om JSON-bestand te laden en te decoderen
    // function load_colors() {
    //     $json_file = get_template_directory() . '/colors.json';
    //     if (file_exists($json_file)) {
    //         $json_data = file_get_contents($json_file);
    //         $colors = json_decode($json_data, true);
    //         if (is_array($colors)) {
    //             return $colors;
    //         }
    //     }
    //     return [];
    // }

    // Voeg de kleuren toe aan de globale scope voor eenvoudigere toegang
    $colors = load_colors();

    // Gebruik de variabelen in je thema
    add_action('wp_head', function() use ($colors) {
        if (!empty($colors['colors']['brand'])) {
            echo '<style>';
            echo 'body { background-color: ' . esc_attr($colors['colors']['brand']['primary']) . '; }';
            echo '</style>';
        }
    });



/* 
// EXPORT COLORS TO SCSS FILE
  function mytheme_get_colors() {
    return array(
        'brand' => array(
            'primary' => '#00eccc',
            'secondary' => '#00bda5',
            'tertiary' => '#00ffdf',
        ),
        'white' => array(
            100 => '#f1f1f1',
            300 => '#f3f3f3',
            500 => '#f5f5f5',
            700 => '#f8f8f8',
            900 => '#ffffff',
        ),
        'gray' => array(
            100 => '#f1f1f1',
            300 => '#c1c1c1',
            500 => '#999999',
            700 => '#777777',
            900 => '#555555',
        ),
        'black' => array(
            100 => '#444444',
            300 => '#333333',
            500 => '#222222',
            700 => '#111111',
            900 => '#000000',
        ),
        'general' => array(
            'check' => 'green',
            'alert' => 'red',
        ),
    );
  }

  function mytheme_generate_scss() {
    $colors = mytheme_get_colors();

    $scss = "\$colors: (\n";
    foreach ($colors as $category => $values) {
        $scss .= "  $category: (\n";
        foreach ($values as $name => $color) {
            if (is_array($color)) {
                $scss .= "    $name: (\n";
                foreach ($color as $shade => $shadeColor) {
                    $scss .= "      $shade: $shadeColor,\n";
                }
                $scss .= "    ),\n";
            } else {
                $scss .= "    $name: $color,\n";
            }
        }
        $scss .= "  ),\n";
    }
    $scss .= ");\n";

    $file_path = get_stylesheet_directory() . '/css/project/_project-colors.scss';

    // error_log('Generating SCSS file at: ' . $file_path);
    // die("No file created in '$file_path'");

    if (file_put_contents($file_path, $scss) === false) {
        // error_log('Failed to write SCSS file');
        // die("Succeded");
    } else {
        // error_log('SCSS file written successfully');
        // die("Failed");
    }
  }

//   add_action('after_setup_theme', 'mytheme_generate_scss');
add_action('init', 'mytheme_generate_scss');
*/
?>