<?php
$sql_query = "SELECT * FROM transaction";

$result = $conn->query($sql_query);

$transaction_data = [];
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
       $transaction_data[] = $row; 
    }
}
$conn->close();