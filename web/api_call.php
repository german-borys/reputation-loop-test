<?php
  //Simple function that fetches data using GET
  function apiCall($url)
  {
      $result = file_get_contents($url);
      return $result;
  }
?>
