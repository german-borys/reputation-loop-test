<?php
   //build our business info section here
   function reviewsHTML($array) {
     foreach ($array as $review) {
       $review_html .= "<div class='panel panel-info'>";
       $review_html .= "
        <div class='panel-heading'>".$review['customer_name']."</div>
        <div class='panel-body'><b>Review:</b>".$review['description']."
        <p>
           <b>Rating:</b> ".$review['rating']."<br/>
           <b>Date:</b> ".$review['date_of_submission']."
        </p>
        <a href='".$review['customer_url']."' class='card-link'>Customer Link</a>
      </div></div>";
     }
     $html = "
      <div class='panel panel-default'>
       <div class='panel-heading'>
         <h3 class='panel-title'>Reviews</h3>
       </div>
       <div class='panel-body'>";
     $html .= $review_html;
     $html .= "</div></div>";

     return $html;
   }
?>
