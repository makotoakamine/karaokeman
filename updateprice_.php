<?php
include('connect.php');

$sql = "INSERT INTO Price (prod,price,op_date) VALUES('" . $_POST['Prod'] . "','" . $_POST['Price'] . "',NOW())";
if ($db->query($sql) === TRUE) {
    $response = "<div class=\"alert alert-primary\" role=\"alert\">";
    $response .= "Preço atualizado com sucesso.";
    $response .= "</div>";
} else {
    $response = "<div class=\"alert alert-danger\" role=\"alert\">";
    $response .= "Error: " . $sql . "<br>" . $db->error;
    $response .= "</div>";
}
// $_POST = array();
// include('prodman.php');
?>