<div id="social-icons">
<!-- <a href="http://twitter.com/#!/micheletheberge" target="_blank"><img src="/assets/SocialIcon_Twitter32.jpg"></a>
<a href="https://www.instagram.com/micheletheberge/" target="_blank"><img src="/assets/SocialIcon_Instagram32.jpg"></a> -->
<!-- <a href="https://www.facebook.com/pages/Michele-Theberge/141639189231397" target="_blank"><img src="/assets/SocialIcon_Facebook32.jpg"></a> -->
</div>
<br/>
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
