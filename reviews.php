<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db.php";

    $prod_id=$_POST["prod_id"];      
    if(isset($_POST["name"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $content = $_POST["content"];
        $rating = $_POST["rating"];
    $rating_query = "INSERT INTO `reviews` (`id`, `name`, `email`, `content`, `product_id`, `rating`, `submit_date`) VALUES (NULL, '$name', '$email', '$content', '$prod_id', '$rating', current_timestamp())";
    $run_query = mysqli_query($con,$rating_query) or die(mysqli_error($con));
    echo "sc";
    }
    else{
    $rating_query = "SELECT * FROM `reviews` WHERE product_id=$prod_id";
    $run_query = mysqli_query($con,$rating_query) or die(mysqli_error($con));

    if(mysqli_num_rows($run_query) > 0){
        // $i=1;
		while($row = mysqli_fetch_array($run_query)){
            
			$id = $row["id"];
            $name = $row["name"];
            $email = $row["email"];
            $content = $row["content"];
            $rating = $row["rating"];
            $date = $row["submit_date"];

            $optionString = '';
            for ($x = 1; $x <= $rating; $x++) {
                $optionString .= "<i class='fa fa-star'></i>";
            }
            if($rating<5){
                $rating = 5-$rating;
                for ($x = 1; $x <= $rating; $x++) {
                    $optionString .= "<i class='fa fa-star-o empty'></i>";
                }   
            }
            
			echo "
					
            <li>
            <div class='review-heading'>
                <h5 class='name'>$name</h5>
                <p class='date'>$date</p>
                <div class='review-rating'>
                   $optionString 
                </div>
            </div>
            <div class='review-body'>
                <p>$content</p>
            </div>
        </li>
                    
			";
            
		}
    }
}
?>