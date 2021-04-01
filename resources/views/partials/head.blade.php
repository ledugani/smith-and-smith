<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @php
    wp_head();
    
    $id = get_the_ID();
    if ( is_home() ) {
      $id = get_option( 'page_for_posts' );
    }
    
    $custom_javascript = get_field( 'custom_javascript', $id );
    $custom_css        = get_field( 'custom_css', $id );
    
    if ( ! empty($custom_css) ) {
      echo "\n";
      echo '<style id="custom_css" type="text/css">' . $custom_css . '</style>';
    }
    if ( ! empty($custom_javascript) ) {
      echo "\n";
      echo '<script id="custom_javascript" type="text/javascript">' . $custom_javascript . '</script>';
    }
  @endphp
</head>