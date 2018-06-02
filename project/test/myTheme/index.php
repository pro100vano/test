<?php get_header(); ?>
<body>
	<!-- Шапка сайта ( логотип / номер телефона ) -->
	<div class="container-fluid">
		<div class="container">
			<div class="row text-center h-100 my-3">
				<div class="col-md-2 col-sm-5"><img src="<?php bloginfo('template_url')?>/img/logo.png" alt="logo" class="w-100"></div>
				<div class="col-md-8 col-sm-1"></div>
				<div class="col-md-2 col-sm-6 my-auto">+380 689 89 90</div>
			</div>
		</div>
	</div>

	<!-- Главное меню и строка поиска -->
	<div class="container-fluid d-flex flex-wrap" style="background-color: #F4F4F4;">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a href="#" class="nav-link text-info">Главная</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-dark">О нас</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-dark">Услуги</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-dark">Портфолио</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-dark">Контакты</a>
						</li>
					</ul>
					<?php if ( is_active_sidebar( 'true_side' ) ) : ?>
					 			 
							<?php dynamic_sidebar( 'true_side' ); ?>
					 					 
					<?php endif; ?>					
				</div>
			</nav>
		</div>


		<!-- Слайдер -->
		<div class="container mt-2">
			<div class="row">
				<div class="col-sm-12">
					<div class="carousel slide" id="slide" data-ride="carousel">
						<div class="carousel-inner rounded">
							<div class="carousel-item active">
								<div class="row w-100">
									<div class="col-md-4 bg-primary pr-0">
										<div class="text-white my-4 mx-4 ">
											<div class="d-flex align-items-start flex-column mb-3" style="height: 270px;">
												<div class="mb-auto p-2" style="font-size: 1.4em;">Туристический сервис рассказал об оссобеностях отдыха российских мужчин</div>
												<div class="p-2"><img src="<?php bloginfo('template_url')?>/img/clock.png" alt=""><span class="text-white-50">21 СЕНТЯБРЯ, 2020</span></div>
												<div class="p-2"><button class="btn btn-link text-info bg-white font-weight-bold" style="font-size: 0.7em;">НОВОСТИ</button></div>
											</div>
										</div>
									</div>
									<div class="col-md-8 pl-0">
										<img src="<?php bloginfo('template_url')?>/img/001.png" class="w-100" alt="">
										<div class="row d-block carousel-caption">
											<div class="col-md-1 offset-md-11">
												<div class="btn-group btn-group-sm">
													<button class="btn btn-primary py-0" href="#slide" role="button" data-slide="prev">
														<img src="<?php bloginfo('template_url')?>/img/prev.png" alt="">
													</button>
													<button class="btn btn-primary py-0" href="#slide" role="button" data-slide="next">
														<img src="<?php bloginfo('template_url')?>/img/next.png" alt="">
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row w-100">
									<div class="col-md-4 bg-primary pr-0">
										<div class="text-white my-4 mx-4 ">
											<div class="d-flex align-items-start flex-column mb-3" style="height: 270px;">
												<div class="mb-auto p-2" style="font-size: 1.4em;">Впечатления девушки, путешествующей по Сирии автостопом	</div>
												<div class="p-2"><img src="<?php bloginfo('template_url')?>/img/clock.png" alt=""><span class="text-white-50">3 АВГУСТА, 2016</span></div>
												<div class="p-2"><button class="btn btn-link text-info bg-white font-weight-bold" style="font-size: 0.7em;">СТАТЬЯ</button></div>
											</div>
										</div>
									</div>
									<div class="col-md-8 pl-0">
										<img src="<?php bloginfo('template_url')?>/img/002.png" class="w-100" alt="">
										<div class="row d-block carousel-caption">
											<div class="col-md-1 offset-md-11">
												<div class="btn-group btn-group-sm">
													<button class="btn btn-primary py-0" href="#slide" role="button" data-slide="prev">
														<img src="<?php bloginfo('template_url')?>/img/prev.png" alt="">
													</button>
													<button class="btn btn-primary py-0" href="#slide" role="button" data-slide="next">
														<img src="<?php bloginfo('template_url')?>/img/next.png" alt="">
													</button>
												</div>
											</div>
										</div>	
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row w-100">
									<div class="col-md-4 bg-primary pr-0">
										<div class="text-white my-4 mx-4 ">
											<div class="d-flex align-items-start flex-column mb-3" style="height: 270px;">
												<div class="mb-auto p-2" style="font-size: 1.4em;">В Мьянме запретят забираться на древние памятники из-за некультурных туристов</div>
												<div class="p-2"><img src="<?php bloginfo('template_url')?>/img/clock.png" alt=""><span class="text-white-50">19 ДЕКАБРЯ, 2016</span></div>
												<div class="p-2"><button class="btn btn-link text-info bg-white font-weight-bold" style="font-size: 0.7em;">СПОРТ</button></div>
											</div>
										</div>
									</div>
									<div class="col-md-8 pl-0">
										<img src="<?php bloginfo('template_url')?>/img/003.png" class="w-100" alt="">
										<div class="row d-block carousel-caption">
											<div class="col-md-1 offset-md-11">
												<div class="btn-group btn-group-sm">
													<button class="btn btn-primary py-0" href="#slide" role="button" data-slide="prev">
														<img src="<?php bloginfo('template_url')?>/img/prev.png" alt="">
													</button>
													<button class="btn btn-primary py-0" href="#slide" role="button" data-slide="next">
														<img src="<?php bloginfo('template_url')?>/img/next.png" alt="">
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Блок "О нас" и "Новости" -->
	<div class="container mt-4	">
		<div class="row">
			<div class="col-md-4">
				<p style="font-size: 1.4em;">О нас</p>
				<p class="rounded p-4" style="background-color: #EC9D13;">
					<?php 
					$post = get_post( 1 ); 
					echo $post->post_content;
					?>
				</p>
			</div>
			<div class="col-md-8">
				<p style="font-size: 1.4em;">Новости</p>
				<?php 
				$args = array('post_type' => 'news_posts');
				$posts = get_posts($args);	

				foreach ($posts as $post) {
				?>
					<div class="row my-2">
						<div class="col-md-2">
							<?php echo get_the_post_thumbnail(); ?>
						</div>
						<div class="col-md-9 mx-4">
							<div class="row text-secondary">
								<?php 
								$time = strtotime($post->post_date);
								echo strftime("%d %B, %Y", $time);
								?>
							</div>
							<div class="row">
								<?php echo apply_filters('the_content',$post->post_content);  ?>
							</div>
						</div>
					</div>
				<?
				}			
				 ?>
				
			</div>
		</div>
	</div>

<?php get_footer(); ?>
