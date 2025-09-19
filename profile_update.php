<?php
session_start();
include 'server/inc/connection.php'; // এখানে তোমার ডাটাবেস connection আছে ধরলাম

if (isset($_POST['customer_id'])) {
    $customer_id = $_POST['customer_id'];
    $name   = mysqli_real_escape_string($con, $_POST['name']);
    $email  = mysqli_real_escape_string($con, $_POST['email']);
    $phone  = mysqli_real_escape_string($con, $_POST['phone']);
    $address= mysqli_real_escape_string($con, $_POST['address']);
    $nic    = mysqli_real_escape_string($con, $_POST['nic']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);

    // Photo upload handle
    $photo = "";
    if (!empty($_FILES['photo']['name'])) {
        $filename = time() . '_' . basename($_FILES['photo']['name']);
        $target_dir = "uploads/users/";
        $target_file = $target_dir . $filename;

        if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)) {
            $photo = $filename;
        }
    }

    // যদি নতুন ছবি আপলোড করা হয়
    if ($photo != "") {
        $sql = "UPDATE customer 
                SET name='$name', email='$email', phone='$phone', 
                    address='$address', nic='$nic', gender='$gender', photo='$photo'
                WHERE customer_id='$customer_id'";
    } else {
        $sql = "UPDATE customer 
                SET name='$name', email='$email', phone='$phone', 
                    address='$address', nic='$nic', gender='$gender'
                WHERE customer_id='$customer_id'";
    }

    if (mysqli_query($con, $sql)) {
        header("Location: profile.php?success=1");
        exit();
    } else {
        echo "Error updating profile: " . mysqli_error($con);
    }
} else {
    echo "Invalid request!";
}
?>
