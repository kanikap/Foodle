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
function id($response, $ind){
  return "" .  $response->businesses[$ind]->id;
}
function categories($response, $ind){
  $length = count($response->businesses[$ind]->categories);
  if ($length > 0)
    $return = $response->businesses[$ind]->categories[0][0];
  else
    $return = "";
  for ($i = 1; $i < $length; $i++) {
    $return = $return .", ". $response->businesses[$ind]->categories[$i][0];
  }
  return($return);
}
function url($response, $ind) {
  return "" . $response->businesses[$ind]->url;
}
function phone($response, $ind) {
    $return = $response->businesses[$ind]->phone;
    return($return);
}


?>