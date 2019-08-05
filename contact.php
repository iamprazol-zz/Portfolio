<?php
/**
 * Created by PhpStorm.
 * User: prajjwal
 * Date: 2/16/19
 * Time: 5:31 PM
 */

$conn_error="Couldn\'t connect to the server";
$con = mysqli_connect("localhost", "Prajjwal", "prajjwal123");

if(!$con || !@mysqli_select_db($con, "portfolio")) {
    die($conn_error);
}
?>
