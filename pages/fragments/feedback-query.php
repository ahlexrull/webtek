<?php
    $user_id = $_SESSION["user_id"];
    $query = $pdo->prepare("select * from feedback natural join service_request natural join user_account where feedback_status = '$status'and
    service_request.sp_id = '$user_id'");
    $query->execute();
    
 
    echo "<tr>";
    echo "<th>Customer</th>";
    echo "<th>Date of Feedback</th>";
    echo "<th>Ranking</th>";
    echo "<th>Action</th>";
    echo "</tr>";
    while ($row = $query->fetch(PDO::FETCH_ASSOC)){
        $firstname = $row['first_name'];
        $middlename = $row['middle_name'];
        $lastname = $row['last_name'];
        $customer = $firstname. " ". $middlename. " ". $lastname;

        echo "<tr>";
        echo "<td>" .$customer ."</td>";
        echo "<td>" .$row['feedback_date'] ."</td>";
        echo "<td>" .$row['ranking'] ."</td>";
        if($status == 1 or $status == 2){
            echo "<td>" .'<button type="button" class="details-modal btn btn-default">Details</button>' ."</td>";                        
        }elseif($status == 3){
            echo "<td>" 
            .'<button type="button" class="details-modal btn btn-default">Reply</button>' 
            .'<button type="button" class="details-modal btn btn-default">Done</button>' 
            ."</td>";          
        } 
        echo "</tr>";
    }
                        
?>