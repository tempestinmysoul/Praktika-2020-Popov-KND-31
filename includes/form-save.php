<?php 
	
	$link = mysqli_connect('localhost', 'root', '', 'test') 
        or die("Ошибка " . mysqli_error($link));

	$id = $_POST['id'];  
	$date_ = $_POST['date'];
	$manager = $_POST['manager'];
	$customer = $_POST['customer'];  
	$manager_name = $_POST['manager_name'];  
	$customer_number = $_POST['customer_number'];       	
	$description = $_POST['description'];  

   	$query = "INSERT INTO `orders` (`id`, `date`, `manager`, `customer`, `manager_name`, `customer_number`, `description`) 
        VALUES ('$id', '$date_', '$manager', '$customer', '$manager_name', '$customer_number', '$description')";

    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
    mysqli_close($link);