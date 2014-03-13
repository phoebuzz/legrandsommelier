<?php /* Template Name: Accueil */
get_header(); ?>

<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
		<img src="http://legrandsommelier.dev/wp-content/uploads/2014/03/whisky-whiskey-glass-by-paintevil-shadowness-703601.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              	<?php 
					query_posts('posts_per_page=1');
						while (have_posts()) : the_post(); ?>

				<div class = "jumbotron">
								<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
								<?php the_excerpt();?>
				</div>
				<?php endwhile; wp_reset_query(); ?>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Lire Article</a></p>
            </div>
          </div>
        </div>
        <div class="item">
         <img src="http://legrandsommelier.dev/wp-content/uploads/2014/03/whisky-whiskey-glass-by-paintevil-shadowness-703601.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="http://legrandsommelier.dev/wp-content/uploads/2014/03/whisky-whiskey-glass-by-paintevil-shadowness-703601.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
      <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>

		<div class = "panel panel-default panel-body">
					<div class = "row">
						<div class = "col-md-2">
							<ul class="nav nav-pills nav-stacked">
								<?php wp_list_categories( 'orderby=name&title_li' ); ?>
							</ul>
						</div>
						<div class = "col-md-10">
							<?php while (have_posts()) : the_post(); ?>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
								<p><?php the_excerpt(); ?></p>
								<p class="text-muted">Article par: <?php the_author(); ?> le <?php the_time('F jS, Y' ); ?></p>


							<?php endwhile; wp_reset_query(); ?>

						</div>
					</div>
		</div>

		</div>
			
	<!-- Fin Content -->

<?php get_footer(); ?>