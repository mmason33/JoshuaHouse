<?php

$content = get_sub_field('content');
$bgImage = get_sub_field('bg_image');

?>

<section class="page-pile">
  <div class="section" style="background:url('<?php echo $bgImage; ?>')no-repeat center center;background-size:cover;">
    <div class="row">
      <div class="col-12 col-md-12">
        <?php echo $content; ?>
      </div>
    </div>
  </div>
</section>
