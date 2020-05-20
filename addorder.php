<?php
include 'conection_bd.php';
 
if( isset( $_POST['add'] ) )
    {	
        $name = $_POST['first_name'];
        $second_name = $_POST['second_name'];
        $city = $_POST['city'];
        $delivery = $_POST['delivery'];
        $payment = $_POST['payment'];
        echo $name ,
        $second_name ,
        $city ,
        $delivery ,
        $payment  ;

        $query = "INSERT INTO client(client_first_name,client_second_name,client_surname, city_id, adress, delivery_id, payment_method_id
        ) VALUES('$name','$second_name','$city','$city','$address','$delivery','$payment')";
        $query_note = mysqli_query($link, $query);
        echo "<script>alert(\"Успешно добавлена!\");</script>"; 
        
    }
?>