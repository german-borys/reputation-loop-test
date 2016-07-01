<?php
   //build our business info section here
   function businessInfoHTML($array) {
     $html = "
      <div class='panel panel-default'>
       <div class='panel-heading'>
         <h3 class='panel-title'>".$array['business_name']."</h3>
       </div>
       <div class='panel-body'>";
     $html .= "<b>Address: </b>".$array['business_address']."</br>";
     $html .= "<b>Phone: </b>".$array['business_phone']."</br>";
     $html .= "<b>Average Rating: </b>".$array['total_rating']['total_avg_rating']." <span class='glyphicon glyphicon-star-empty'></span></br>";
     $html .= "<b>Number Of Reviews: </b>".$array['total_rating']['total_no_of_reviews']."</br>";
     $html .= "<a href='".$array['external_url']."'><span class='label label-success'>Website<span></a>";
     $html .="</div></div>";
     return $html;
   }
?>
