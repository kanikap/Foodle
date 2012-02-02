<?php
// parse.php
function name($response, $ind) {
    return "" . $response->businesses[$ind]->name;
}
function rating($response, $ind){
  return "" .  $response->businesses[$ind]->rating;
}
function location($response, $ind){
  return "" .  $response->businesses[$ind]->location->city;
}
function snippet($response, $ind){
  return "" .  $response->businesses[$ind]->snippet_text;
}
function ratingimg($response, $ind) {
    return "" . $response->businesses[$ind]->rating_img_url;
}
function snippetimg($response, $ind){
  return "" .  $response->businesses[$ind]->snippet_image_url;
}
function tags($response, $ind){
  return "" .  $response->businesses[$ind]->categories[0][0];
}
function ratingimgsm($response, $ind){
  return "" .  $response->businesses[$ind]->rating_img_url_small;
}

?>