<?php

session_start(); 

include "../config/connections.php";


$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$query = "SELECT * FROM `user` WHERE `email` = ?";
$stmt = mysqli_prepare($connections, $query);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if (!$result) {
        $response = array('status' => 'error', 'message' => 'Database error');
    } else {
      
        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);

         
            if ($password === $user['password']) {
               
                $_SESSION['user_id'] = $user['user_id'];
                $response = array('status' => 'success', 'message' => 'Login successful');
            } else {
                $response = array('status' => 'error', 'message' => 'Invalid password');
            }
        } else {
            $response = array('status' => 'error', 'message' => 'User not found');
        }
    }

    mysqli_stmt_close($stmt);
} else {
    $response = array('status' => 'error', 'message' => 'Prepared statement error');
}

header('Content-Type: application/json');
echo json_encode($response);

?>
