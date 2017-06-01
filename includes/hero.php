<?php

$heroImage = (get_field('hero_image') != '' ? "style='background:url(".get_field('hero_image').")".get_field('hero_position')." no-repeat;background-size:cover;'" : '');
$heroPosition = get_field('hero_position');
$heroParallax = get_field('hero_parallax');
$centerContent = (get_field('center_content') == true ? ' text-center' : '' );
$heroContent = get_field('hero_content');
$pagePile = get_field('page_pile');
$sliderPro = get_field('slider_pro');
$sliderImages = get_field('slider_images');
$sliderHeadlines = get_field('slider_headlines');
$sliderExplodeHeadlines = explode(',', $sliderHeadlines);

?>

<?php if(!empty($heroImage) && $sliderPro == false && $pagePile == false): ?>
<section class="hero" <?php echo $heroImage; ?>>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-12<?php echo $centerContent; ?>">
        <section class="hero--content">
          <?php echo $heroContent; ?>
        </section>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
  <?php if($pagePile == true): ?>
    <section class="section" <?php echo $heroImage; ?>>
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
      </div>
    </section>
  <?php endif; ?>

<?php if($sliderPro == true): ?>
  <section class="hero hero--slider">
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
<?php endif; ?>
