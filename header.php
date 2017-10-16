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
               <nav>
				<div class="container">
                    <div class="logo">
                         <h2>Flat Earth</h2>
                    </div>
                    <ul id="nav-ul">
                         <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                    </ul>
          		</div>
			</nav>
     </header>
     <div class="container">
          <div id="intro" class="row">
               <div class="col4l">
                    <img src="<?php echo get_bloginfo( 'template_directory' );?>/flat-earth.png" alt="flat-earth" class="responsive">
               </div>
               <div id="intro-right" class="col8l col12x">
                    <h1>Turning your world upside-down</h1>
                    <a href="https://youtu.be/9jnseSHhEWQ">Open your eyes</a>
               </div>
          </div>
     </div>
