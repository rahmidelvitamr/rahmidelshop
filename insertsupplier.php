<?php
$host = "127.0.0.1";
$user = "root";
$password = "123456";
$code = $_POST['supplier_code'];
$cnn = mysqli_connect($host, $user, $password);
$sql = "INSERT INTO midelsys.M_SUPPLIER (SUPPLIER_CODE, SUPPLIER_NAME, ADDRESS, PHONE_NUMBER) values ('$_POST[supplier_code]', '$_POST[supplier_name]', '$_POST[supplier_address]', '$_POST[supplier_phone]')";
$result = mysqli_query($cnn, $sql);
$counter = 1;

if ($result == false) {
    
    
    
    die('Error: ' . mysqli_error($cnn));
    
}else{
        echo '<script type="text/javascript">';
        echo 'alert("Data Supplier Berhasil Ditambahkan");';
        echo 'window.location.href = "supplier.php";';
        echo '</script>';
    
    
    

}

?>