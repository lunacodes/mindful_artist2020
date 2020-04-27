<div class="clear:both"></div>

<?php

if ( is_home() ) {

dynamic_sidebar('sidebar-posts');

}

elseif ( is_category( '3' ) ) {

dynamic_sidebar('sidebar-videos');

}

else {

dynamic_sidebar('sidebar-primary');

}

?>
