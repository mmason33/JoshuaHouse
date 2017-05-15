<?php
if ( have_rows('builder') ):

    while ( have_rows('builder') ) : the_row();

          if ( get_row_layout() == 'text_area'):
            require('textArea.php');
          endif;

          if ( get_row_layout() == 'page_pile'):
            require('pagePile.php');
          endif;

    endwhile;
else:

endif;
?>
