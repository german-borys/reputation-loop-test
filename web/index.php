<?php
  require('api_call.php');

  $url = "http://test.localfeedbackloop.com/api?apiKey=61067f81f8cf7e4a1f673cd230216112&noOfReviews=10&internal=1&yelp=1&google=1&offset=50&threshold=1";
  $reviews = apiCall($url);

  print('welcome to reputation loop with: '.count($reviews).' reviews');
?>
