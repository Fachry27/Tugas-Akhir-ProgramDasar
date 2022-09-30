<?php
    include 'connection.php';

    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $birth = $_POST['birth'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        // uniq id

        $id_user = uniqid("U", false);

        //img upload

        $img = $_FILES['img_usr'];

        $imgName = $_FILES['img_usr']['name'];
        $imgTMP = $_FILES['img_usr']['tmp_name'];
        $imgErr = $_FILES['img_usr']['error'];

        $imgext = explode('.',$imgName);

        $imgtype = strtolower(end($imgext));
        
        $allowed = array('png','jpg','jpeg');

        if ($imgErr !== 4){
            if ($imgErr == 0) {
                if(in_array($imgtype, $allowed)){
                    $imgNewName = uniqid('', true).".".$imgtype;
                    $imgDIR = "../user_img/".$imgNewName;
                    move_uploaded_file($imgTMP, $imgDIR);
                }else{
                    echo "Ext error";
                }
            }else{
                echo "ERORR";
            }
        }else{
            $imgDIR = "../user_img/user.png";
        };

        $sql = "INSERT INTO `users`(`id_user`, `name`, `birth`, `password`, `phone`, `email`, `user_img`) VALUES ('$id_user','$nama','$birth','$password','$phone','$email','$imgDIR')";
        $query = mysqli_query($connect, $sql);

        if($query) {
            header('Location: User.php');
        }else{
            header('Location: addUser.php?NotOK');
        }

    }
?>