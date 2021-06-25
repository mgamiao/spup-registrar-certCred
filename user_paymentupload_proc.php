<?php session_start(); 
include "perfect_function.php"
?>
        
        <?php
        $target_dir = "user_payment/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                $error_msg1 =  "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            $error_msg1 = "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 5000000) {
            $error_msg1 = "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            $error_msg1 = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $_SESSION['pic_errormsg'] = $error_msg1. "Your file was not uploaded.";
            header("Location: user_track_form.php");
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            ?>
            <div class="alert alert-success">
                <?php
                //edit user record (update value of photo)
                $table_name = "forms";
                $id = $_GET['id'];
                $paymentphoto = basename($_FILES["fileToUpload"]["name"]);

                $user_editedvalues = array (
                    //columname from table => value from post
                        "paymentphoto" => $paymentphoto,
                        
                );
                echo $id;
                echo $paymentphoto;
                update($user_editedvalues, $id, $table_name);
                header("Location: user_track_form.php");
                $_SESSION['alert_msg']=1;
                ?>
            </div>
            <?php
            } else {
                $_SESSION['pic_errormsg'] = "Sorry, there was an error uploading your file.";
                header("Location: user_track_form.php");
            }
        }
        ?>
