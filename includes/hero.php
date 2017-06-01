<?php

$heroImage = (get_field('hero_image') != '' ? "style='background:url(".get_field('hero_image').")".get_field('hero_position')." no-repeat;background-size:cover;'" : '');
$heroPosition = get_field('hero_position');
$heroParallax = get_field('hero_parallax');
$centerContent = (get_field('center_content') == true ? ' text-center' : '' );
$heroContent = get_field('hero_content');
<<<<<<< HEAD
=======
$pagePile = get_field('page_pile');
>>>>>>> cd9de5b3fe03c4e48e45adcf21185471c4fd20e2
$sliderPro = get_field('slider_pro');
$sliderImages = get_field('slider_images');
$sliderHeadlines = get_field('slider_headlines');
$sliderExplodeHeadlines = explode(',', $sliderHeadlines);
?>
<?php if(!empty($heroImage) && $sliderPro == false): ?>
<<<<<<< HEAD
<section class="hero" <?php echo $heroImage; ?>>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-12<?php echo $centerContent; ?>">
        <section class="hero--content">
          <?php echo $heroContent; ?>
        </section>
=======
  <?php if($pagePile == true): ?>
    <div class="section" <?php echo $heroImage; ?>>
  <?php endif; ?>
  <?php if($pagePile == false): ?>
    <section class="hero hero--image" <?php echo $heroImage; ?>>
  <?php else: ?>
    <section class="hero">
  <?php endif; ?>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-12<?php echo $centerContent; ?>">
            <?php if($heroContent): ?>
              <section class="hero--content">
                <?php echo $heroContent; ?>
              </section>
            <?php endif; ?>
          </div>
        </div>
>>>>>>> cd9de5b3fe03c4e48e45adcf21185471c4fd20e2
      </div>
    </section>
  <?php if($pagePile == true): ?>
    </div>
  <?php endif; ?>

<<<<<<< HEAD
<?php elseif( $sliderPro == true): ?>

  <section class="hero">
=======
<?php elseif($sliderPro == true): ?>

<?php if($pagePile == true): ?>
  <div class="section">
<?php endif; ?>
  <section class="hero hero--slider">
>>>>>>> cd9de5b3fe03c4e48e45adcf21185471c4fd20e2
    <div id="my-slider" class="slider-pro">
      <div class="sp-slides">
      <?php $i = 0; ?>
      <?php foreach ($sliderImages as $sliderImage): ?>
            <div class="sp-slide">
              <img class="sp-image" src="<?php echo $sliderImage['url']; ?>">
              <?php if ($sliderExplodeHeadlines): ?>
                    <h2 class="sp-layer sp-black sp-padding slider--headline" data-position="centerCenter" data-show-transition="up" data-show-delay="600" data-hide-transition="right" data-show-duration="1000"><?php echo $sliderExplodeHeadlines[$i]; ?></h2>
              <?php endif; ?>
            </div>
      <?php $i++; ?>
      <?php endforeach; ?>

      </div>
    </div>
  </section>
<<<<<<< HEAD
<?php else: ?>
=======
<?php if($pagePile == true): ?>
  </div>
<?php endif; ?>
>>>>>>> cd9de5b3fe03c4e48e45adcf21185471c4fd20e2

<?php endif; ?>
