<?php
$data = 
array(
  0 => array(
  'id' => 1,
  'name' => 'Foo', 
  'image' => array(
    'url' => '/pub/foo.jpg'
    )
  ),
  1 => array(
  'id' => 2,
  'name' => 'Bar', 
  'image' => array(
    'url' => '/pub/bar.jpg' 
    )
  ),
  2 => array(
  'id' => 3,
  'name' => 'Foo Bar', 
  'image' => array(
    'url' => '/pub/foobar.jpg' 
    )
  ) 
);

getImageURL($data);

function getImageURL($data) {
  $result = array();

  for ($x = 0; $x < count($data); $x++) {
    $result[$x] = $data[$x]['image']['url'];
  }
  var_dump($result);
}

?>