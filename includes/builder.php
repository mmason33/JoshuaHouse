<?php
if ( have_rows('builder') ):

    while ( have_rows('builder') ) : the_row();

          if ( get_row_layout() == 'text_area'):
            require('textArea.php');
          endif;

    endwhile;
else:

endif;
?>
