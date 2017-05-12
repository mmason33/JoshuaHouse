<?php

$heroImage = (get_field('hero_image') != '' ? "style='background:url(".get_field('hero_image').")".get_field('hero_position')." no-repeat;background-size:cover;'" : '');
$heroPosition = get_field('hero_position');
$heroParallax = get_field('hero_parallax');
$centerContent = (get_field('center_content') == true ? ' text-center' : '' );
$heroContent = get_field('hero_content');
$sliderCheck = get_field('slider_check');
$sliderImages = get_field('slider_images');
$sliderHeadlines = get_field('slider_headlines');
$sliderExplodeHeadlines = explode(',', $sliderHeadlines);
?>
<?php if( $sliderCheck == false): ?>
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

<?php else: ?>

  <section class="hero">
    <div class="hero--slider--wrap">
      <ul class="hero--slider">
      <?php $i = 0; ?>
      <?php foreach ($sliderImages as $sliderImage): ?>
            <li class="slide">
              <div class="slide--headline"><?php echo $sliderExplodeHeadlines[$i]; ?></div>
              <span class="slide--image" style="background:url(<?php echo $sliderImage['url']; ?>);"></span>
            </li>
      <?php $i++; ?>
      <?php endforeach; ?>

      </ul>
    </div>
  </section>
<?php endif; ?>
