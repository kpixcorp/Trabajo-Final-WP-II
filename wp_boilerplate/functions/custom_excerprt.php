<?php 

function my_excerpt_length($length) {
return 150;
}

add_filter('excerpt_length', 'my_excerpt_length'); 

?>