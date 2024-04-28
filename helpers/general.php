<?php 

function _stripTags($text = '')
{
  $data = strip_tags(preg_replace("/<img[^>]+\>/i", '', stripcslashes($text)), '');

  return $data;
}