<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
     <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>
     <header>
          <div class="container">
               <nav>
                    <div class="logo">
                         <h2>Flat Earth</h2>
                    </div>
                    <ul>
                         <li><a href="#">About</a></li>
                         <li><a href="#">Why</a></li>
                         <li><a href="#">How</a></li>
                         <li><a href="#">Contact</a></li>
                    </ul>
               </nav>
          </div>
     </header>
