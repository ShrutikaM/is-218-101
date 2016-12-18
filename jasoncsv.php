<?php
  // open the text file
  $Textfile   = file('carSamples.csv', FILE_IGNORE_NEW_LINES);
  // get a random line

  $title = "Same Title";
  // set a random content
  $content = $Textfile;
  // result
  $result = array('content'   => $content,
                  'title'     => $title);
  // set header
  header('Content-Type: application/json');
  // print the random quote
  echo json_encode($result);
?>