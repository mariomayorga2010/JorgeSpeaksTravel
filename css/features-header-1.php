<?php
/* 	::

	:: Theme 		: Lemonade
	:: Theme URI	: http://funcoders.com/templates/Lemonade

	:: File 		: features-header-1.php
	:: Name 		: Header style 1
	:: Version      : 1.0

:: 	*/

/* 	:: Page variables :: */
$page = array(
	'name'		=> 'Header style 1',
	'class'		=> 'fc-features fc-page-features-header-1'
);
$optInline['header'] = 'style-1';
?>
<?php require '../FRAMEWORK/includes/header.php'; ?>
			<section class="fc-section fc-bg-black fc-color-invert">
				<div class="fc-section-image fc-section-image-opacity-blur" style="background-image: url(<?php the_image (array('file' => array('page/section', false, 'cloud-square-cut.jpg'), 'link' => true)); ?>)"></div>
				<div class="fc-section-content fc-text-center">
					<?php breadcrumbs(array(
						'pages' => array(
							array('<i class="icon-home-2"></i>', $theme['url']),
							array('Features', $theme['url'].'/features-grid.html'),
							array($page['name'], $theme['url'].'/features-header-1.html', 'fc-active')
						)
					)); ?>
					<hr class="fc-divider">
					<div class="fc-title">
						<h1 class="fc-h2"><?php echo $page['name']; ?></h1>
						<p class="fc-text-lead">Page header with full website information</p>
					</div><!-- .fc-title -->
				</div><!-- .fc-section-content -->
			</section><!-- .fc-section -->
			<section class="fc-section">

				<div class="fc-text">
					<p><?php the_words(100); ?></p>
					<p><?php the_words(300); ?></p>
					<p><?php the_words(200); ?></p>
					<p><?php the_words(500); ?></p>
					<p><?php the_words(200); ?></p>
				</div>

			</section><!-- .fc-section -->
<?php require '../FRAMEWORK/includes/footer.php' ?>