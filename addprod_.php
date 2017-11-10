<?php
include('connect.php');

$sql = "INSERT INTO Prod (prod,proddet,tipo,status,op_date) VALUES('" . $_POST['Prod'] . "','" . $_POST['ProdDescr'] . "','" . $_POST['Type'] . "','O',NOW())";
if ($db->query($sql) === TRUE) {
    $response = "<div class=\"alert alert-primary\" role=\"alert\">";
    $response .= "Produto adicionado com sucesso.";
    $response .= "</div>";
} else {
    $response = "<div class=\"alert alert-danger\" role=\"alert\">";
    $response .= "Error: " . $sql . "<br>" . $db->error;
    $response .= "</div>";
}
$_POST = array();
include('prodman.php');
?>