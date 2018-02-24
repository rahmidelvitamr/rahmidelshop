<?php
$host = "127.0.0.1";
$user = "root";
$password = "123456";
$cnn = mysqli_connect($host, $user, $password);
$sql = "INSERT INTO midelsys.M_customer (CUSTOMER_NAME, CUSTOMER_ADDRESS, EMAIL, PHONE) values ('$_POST[customer_name]', '$_POST[customer_address]', '$_POST[customer_email]', '$_POST[customer_phone]')";
$result = mysqli_query($cnn, $sql);
$counter = 1;

if ($result == false) {
    
    
    
    die('Error: ' . mysqli_error($cnn));
    
}else{
    echo '<script type="text/javascript">';
    echo 'alert("Data Supplier Berhasil Ditambahkan");';
    echo 'window.location.href = "customer.php";';
    echo '</script>';
    
    
    
    
}

?>