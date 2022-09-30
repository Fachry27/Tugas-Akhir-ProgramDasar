<?php
    include 'connection.php';

    if(isset($_POST['submit'])) {
        $title = $_POST['title'];
        $short = $_POST['short'];
        $category = $_POST['kategori'];
        $author = $_POST['author'];
        $date = $_POST['date'];
        $isi = $_POST['isi'];

        // uniq id

        $id_materi = uniqid("U", false);

        //img upload

        $img = $_FILES['img'];

        $imgName = $_FILES['img']['name'];
        $imgTMP = $_FILES['img']['tmp_name'];
        $imgErr = $_FILES['img']['error'];

        $imgext = explode('.',$imgName);

        $imgtype = strtolower(end($imgext));
        
        $allowed = array('png','jpg','jpeg');

        if ($imgErr !== 4){
            if ($imgErr == 0) {
                if(in_array($imgtype, $allowed)){
                    $imgNewName = uniqid('', true).".".$imgtype;
                    $imgDIR = "../materi_img/".$imgNewName;
                    move_uploaded_file($imgTMP, $imgDIR);
                }else{
                    echo "Ext error";
                }
            }else{
                echo "ERORR";
            }
        }else{
            $imgDIR = "../materi_img/dummy.jpeg";
        };

        $sql = "INSERT INTO `materi`(`Title`, `kategori`, `Desk`, `Isi`, `author`, `img_dir`, `id`, `date`) VALUES ('$title','$category','$short','$isi','$author','$imgDIR','$id_materi','$date')";
        $query = mysqli_query($connect, $sql);

        if($query) {
            header('Location: Materi.php');
        }else{
            header('Location: addUser.php?NotOK');
        }

    }
?>