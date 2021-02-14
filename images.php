<?php
    $db = mysqli_connect("localhost", "root", "", "profile");

    if(isset($_POST['submit'])) {
        $image1 = $_FILES['images1']['name'];
        $image2 = $_FILES['images2']['name'];
        $image3 = $_FILES['images3']['name'];

        $name = mysqli_real_escape_string($db, $_POST['name']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $birthday = mysqli_real_escape_string($db, $_POST['birthday']);

        $target1 = "images/".basename($image1);
        $target2 = "images/".basename($image2);
        $target3 = "images/".basename($image3);

        $sql = "INSERT INTO users(name, email, birthday, images1, images2, images3) 
        VALUES ('$name', '$email', '$birthday', '$image1', '$image2', '$image3')";

        mysqli_query($db, $sql);

        if (move_uploaded_file($_FILES['images1']['tmp_name'], $target1) && move_uploaded_file($_FILES['images2']['tmp_name'], $target2) && move_uploaded_file($_FILES['images3']['tmp_name'], $target3)) {
            echo "Image uploaded successfully";
        }else{
            echo "Failed to upload image";
        }

        header("location: index.php");
        exit();

    }
    

?>