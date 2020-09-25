<?php require('elements/header.php'); ?>

<div class="hero">
	<div class="container">
		<div>
			<img src="<?php echo $this->getThemePath(); ?>/img/Oneonta-51-hero-overlay.png" alt="Oneonta 51" class="logo">
		</div>
		<div class="inner">
			<img src="<?php echo $this->getThemePath(); ?>/img/BAM-graphic.svg" alt="Boom Symbol" class="bam" />
			<a href="https://brooks-bbq.myshopify.com/"><button class="btn-yellow">Try the Sauce</button></a>
			<div class="slider-wrapper">
				<div class="sauce-slider">
					<img src="<?php echo $this->getThemePath(); ?>/img/BBQchick.jpg" alt="Chicken Sauce" />
					<img src="<?php echo $this->getThemePath(); ?>/img/big-sauces.jpg" alt="Big Sauces" />
					<img src="<?php echo $this->getThemePath(); ?>/img/sauce-hero-overlay-2.png" alt="Oneonta 51 Sauces"  />
					<img src="<?php echo $this->getThemePath(); ?>/img/rub-hero-overlay-1.png" alt="Oneonta 51 Sauces" />
					<img src="<?php echo $this->getThemePath(); ?>/img/hot-coleslaw.png" alt="Oneonta 51 Hot Coleslaw" />
				</div>	
			</div>
		</div>
	</div>
</div>
<section class="description">
	<div class="container">
		<?php
        $a = new Area('Descriptor Text');
        $a->display($c);
    ?>  
</section>
<section class="flavors">
	<div class="container">
		<h1>Makes a Great Gift</h1>
		<a href="https://brooks-bbq.myshopify.com/"><button class="btn-yellow">Sauce it Up!</button></a>
		<img src="<?php echo $this->getThemePath(); ?>/img/Sauce-box.png" alt="Oneonta 51 Sauce Box" class="sauces">
	</div>
</section>
<section class="video">
	<div class="container">
		<a href="//vimeo.com/355968855" data-lity>
			<img src="<?php echo $this->getThemePath(); ?>/img/video.png" alt="Oneonta 51 Sauces" class="sauces">
		</a>

	</div>
</section>
<section class="social">
	<div class="container">
		<div>
			<img src="<?php echo $this->getThemePath(); ?>/img/IG-post-1.png" alt="Social Image" />
		</div>
		<div>
			<img src="<?php echo $this->getThemePath(); ?>/img/IG-post-4.png" alt="Social Image" />
		</div>
		<div>
			<img src="<?php echo $this->getThemePath(); ?>/img/IG-post-3.png" alt="Social Image" />
		</div>
		<div>
			<img src="<?php echo $this->getThemePath(); ?>/img/IG-post-2.png" alt="Social Image" />
		</div>
	</div>
</section>


<?php require('elements/footer.php'); ?>
