<meta charset="utf-8">
<?php
$host = "localhost";
$user = "root";
$pwd = "15042546";
$db = "ikaa";

$conn = mysqli_connect($host, $user, $pwd) or die("เชื่อมต่อฐานข้อมูลไม่ได้");
mysqli_select_db($conn, $db) or die("เลือกฐานข้อมูลไม่ได้");
mysqli_query($conn, "set names utf8"); //ทำให้อ่านภาษไทยใน Database ได้

// if(isset($_GET["id"])){
//     $p_id = $_GET["id"];
//     $sql = "SELECT * FROM `products` WHERE `p_id` ='{$_GET['id']}'";
//     $rs = mysqli_query($conn, $sql);
//     $totla_cart = "SELECT * FROM `products`";
//     $totla_cart_rs = mysqli_query($conn, $totla_cart);
// }
?>