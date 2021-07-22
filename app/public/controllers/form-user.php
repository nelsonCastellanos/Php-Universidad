<?php
    include_once './db.php';
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $product = $_POST['product'];
    $sql = "INSERT INTO UMBE_COMMERCE.Compra (Nombres,Apellidos,Correo,Telefono,IdProductol)
    VALUES ('$name','$lastName','$email','$phone',$product)";
    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    } 
    mysqli_close($conn);
?>