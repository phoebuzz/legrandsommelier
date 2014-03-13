	<!DOCTYPE html>
<html>
	<head>
		<title><?php wp_title( '  | ', true, 'right' );?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href = "<?php bloginfo('stylesheet_url'); ?> " rel = "stylesheet">
		<link href="<?php bloginfo('stylesheet_url'); ?>/carousel.css" rel="stylesheet"> 
		<?php wp_head();?>
	</head>
	<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Le Grand Sommelier</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
	<!-- <body>
		
		<div class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container">
				
				<a href = "<?php bloginfo('url'); ?>" class = "navbar-brand">Le Grand Sommelier</a>
				
				<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
				</button>
				
				<div class = "collapse navbar-collapse navHeaderCollapse">
				
					<ul class = "nav navbar-nav navbar-right">
					
						<li><a href = "#">Home</a></li>
						<li class = "dropdown">
							
							<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Blog <b class = "caret"></b></a>
							<ul class = "dropdown-menu">
								<li><a href = "#">Item One</a></li>
								<li><a href = "#">Item Two</a></li>
								<li><a href = "#">Item Three</a></li>
								<li><a href = "#">Item Four</a></li>
							</ul>
						
						</li>
						<li class = "dropdown">
							
							<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Social Media <b class = "caret"></b></a>
							<ul class = "dropdown-menu">
								<li><a href = "#">Twitter</a></li>
								<li><a href = "#">Facebook</a></li>
								<li><a href = "#">Google+</a></li>
								<li><a href = "#">Instagram</a></li>
							</ul>
						
						</li>
						<li><a href = "#">About</a></li>
						<li><a href = "#contact" data-toggle="modal">Contact</a></li>
					
					</ul>
				
				</div>
				
			</div>
		</div>
		
		<div class = "container"> -->