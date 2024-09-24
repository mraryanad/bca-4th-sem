<?php
$sql_query = "SELECT * FROM ledger";
$result = $conn->query($sql_query);

$ledger_data = [];
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
       $ledger_data[] = $row; 
    }
}
$conn->close();