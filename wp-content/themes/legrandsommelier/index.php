<?php get_header();?>
	<?php 
		query_posts('posts_per_page=1');
			while (have_posts()) : the_post(); ?>

	<div class = "jumbotron">
					<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
					<?php the_excerpt();?>
	</div>
	<?php endwhile; wp_reset_query(); ?>

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
			
			<div class = "navbar navbar-default navbar-fixed-bottom">
			
				<div class = "container">
					<p class = "navbar-text pull-left"></p>
				</div>
			
			</div>
			
			<div class = "modal fade" id = "contact" role = "dialog">
			    <div class = "modal-dialog">
			        <div class = "modal-content">
			            <form class = "form-horizontal">
			                <div class = "modal-header">
			                    <h4>Contact Tech Site</h4>
			                </div>
			                <div class = "modal-body">
			                
			                    <div class = "form-group">
			                        
			                        <label for = "contact-name" class = "col-lg-2 control-label">Name:</label>
			                        <div class = "col-lg-10">
			                            
			                            <input type = "text" class = "form-control" id = "contact-name" placeholder = "Full Name">
			                            
			                        </div>
			                        
			                    </div>
			                    
			                    <div class = "form-group">
			                        
			                        <label for = "contact-email" class = "col-lg-2 control-label">Email:</label>
			                        <div class = "col-lg-10">
			                            
			                            <input type = "email" class = "form-control" id = "contact-email" placeholder = "you@example.com">
			                            
			                        </div>
			                        
			                    </div>
			                    
			                    <div class = "form-group">
			                        
			                        <label for = "contact-msg" class = "col-lg-2 control-label">Message:</label>
			                        <div class = "col-lg-10">
			                            
			                            <textarea class = "form-control" rows = "8"></textarea>
			                            
			                        </div>
			                        
			                    </div>		                    
<?php get_footer();?>
