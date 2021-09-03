<?php
if(function_exists('wp_title')){
// Titles Wordpress no problem
}


else if(function_exists('page_header')){

$page_title = page_header($page_title, true);

if ($page_title){echo $page_title;}

else {echo "ok";}

}
 

else
{echo $metatitle;}
// My pages php/html no problem
?>
