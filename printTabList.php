<?php
$result = $db->query("SELECT * FROM Tab WHERE Tab.status='O'");
    
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option  value='" . $row["id"] . "'>" . $row["tabname"] . "</option>";
    }
} 
?>