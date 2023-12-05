<?php
include "db_conn.php";
// session_start();
if ((isset($_POST['userName'])) && (isset($_POST['password']))) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }

    $username = validate($_POST['userName']);
    $password = validate($_POST['password']);

    if(empty($username)) {
        header("Location: ../index.php?error=Username is required");
        exit();
    } elseif (empty($password)) {
        header("Location: ../index.php?error=Password is required");
        exit();
    } else {
        // -----------------------------------valid---------------------- 
        $sql = "SELECT * FROM account WHERE USERNAME = '$username' AND PASSWORD = '$password' ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)) {
            $row = mysqli_fetch_assoc($result);
            if ( ($row['USERNAME'] === $username) && ($row['PASSWORD'] === $password) ) {
                session_start();
                // echo('12313123');
                $_SESSION['ID'] = $row['ID'];
                $_SESSION['USERNAME'] = $row['USERNAME'];
                $_SESSION['PASSWORD'] = $row['PASSWORD'];
                $_SESSION['ACCOUNT_NAME'] = $row['ACCOUNT_NAME'];
                // echo($_SESSION['ID']);
                header("Location: ../pages/main.php");
                exit();
            }
            // print_r($row);
        } else {
            header("Location: ../index.php?error=Incorect username or password");
            exit();
        }
        
    }
} else {
    header("Location: ../index.php");
    exit();
}

?>