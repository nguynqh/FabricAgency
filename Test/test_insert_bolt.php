<?php

    $sname = "localhost";
    $uname = "root";
    $password = "";

    $db_name = "fabricagency";

    $conn = mysqli_connect($sname,$uname,$password,$db_name);


    $numRows = 10;

    // Loop để thêm dữ liệu
    for ($i = 0; $i < $numRows; $i++) {
        // Tạo dữ liệu ngẫu nhiên
        $length = rand(1, 255); // Giả sử length là tinyint(3), nên giới hạn giá trị từ 1 đến 255
        $date = date('Y-m-d H:i', strtotime("-$i days")); // Ngày giảm dần để có sự đa dạng
        // $date = '2023-12-05 10:10'; // Ngày giảm dần để có sự đa dạng
        $cost = number_format(rand(1, 10000) / 100, 2); // Decimal(10,2) với giá trị từ 1 đến 100
        
        // Thực hiện truy vấn thêm dữ liệu
        $sql = "INSERT INTO bolt (bolt_code, length, cate_code, sup_code, date, cost) VALUES (NULL,'$length', '1', '1', '$date', '$cost')";

        if ($conn->query($sql) === TRUE) {
            echo "Dữ liệu thêm thành công!";
        } else {
            echo "Lỗi: " . $sql . "<br>" . $conn->error;
        }
    }

?>