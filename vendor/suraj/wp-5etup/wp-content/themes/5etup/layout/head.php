<!DOCTYPE html>
<html lang="en">
<head>
      <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-M4LPCF48');</script>
    <!-- End Google Tag Manager -->
    <!-- Google tag (gtag.js) - GA4-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GH39PJCZRL"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-GH39PJCZRL');
    </script>
    <!-- Google tag (gtag.js) - UA-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JRBVL4X5CN"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-JRBVL4X5CN');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= bloginfo('title') ?></title>

    <!-- <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/default.css"> -->
    <!-- <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/style.css"> -->


    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">


    <?php get_header(); ?> 

</head>

<?php 
$template = "";
$template_name = "";

if(is_page_template()) {
  global $template;
  $template_name = preg_replace('/\.php$/', '', basename($template));
  $template_name = str_replace('page-', '', $template_name);

  // die($template_name);
}
// if (is_page_template('page-frontpage.php')) {
//   $current_page = "frontpage";
// } else if (is_page_template('page-brand.php')) {
//   $current_page = "brandpage";
// } else if (is_page_template('page-contact.php')) {
//   $current_page = "contact";
// } else if (is_page_template('page-cv.php')) {
//   $current_page = "cv";
// } else if(is_tax($taxonomy = 'brand')) {
//   $current_page = "$taxonomy $brand";
// } else if (is_single()) {
//   $current_page = "single";
// } else {
//   $current_page = "";
// }
?>

<body id="body" class="<?= $template_name ?> scroll-top">

    <main>

