<?php

$textBox = get_sub_field('text_box');
$pagePile = get_sub_field('page_pile');
$fullWidth = (get_sub_field('full_width') == false ? 'container' : 'container-fluid wrapper');
$bgImage = (get_sub_field('bg_image') != '' ? "style='background:url(".get_field('bg_image').")center center no-repeat;background-size:cover;'" : '');
$bgColor = (get_sub_field('bg_color') != '' ? 'style="background-color:'.get_sub_field('bg_color').'";' : '' );
$scrollable = (get_sub_field('scrollable') == true ? ' pp-scrollable' : '');

?>

<?php if($pagePile == true): ?>
  <div class="section<?php echo $scrollable; ?>" <?php echo $bgImage; ?><?php echo $bgColor; ?>>
<?php endif; ?>

  <section class="textArea">
    <div class="<?php echo $fullWidth; ?>">
      <div class="textArea--box row">
        <div class="col-12 col-md-12">
          <?php echo $textBox; ?>
        </div>
      </div>
    </div>
  </section>

<?php if($pagePile == true): ?>
  </div>
<?php endif; ?>
