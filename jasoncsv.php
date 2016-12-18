<?php
  
  $Textfile   = file('carSamples.csv', FILE_IGNORE_NEW_LINES);
 
  $title = "Same Title";
  // set a random content
  $content = $Textfile;

  $result = array('content'   => $content,
                  'title'     => $title);

  header('Content-Type: application/json');
  // print the random quote
  echo json_encode($result);
?>
