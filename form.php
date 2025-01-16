<?php
error_reporting(0);

      $database = mysqli_connect("localhost","root","","database");
 
       if(isset($_SERVER["REQUEST_METHOD"]))
       {
 
        echo $image = $_FILES['image']['name'];
        echo $video = $_FILES['video']['name'];
        echo $name = $_POST["name"];
        echo $mail = $_POST["email"];
        
          $data = mysqli_query($database,"INSERT INTO `table`(`name`, `email`, `img`, `video`) VALUES ('$name','$mail','$image','$video')");
          if(isset($data))
          {
           header("Location: table.php");
           exit();
          }
          else
          {
            echo "Data not insert";
          }
      }
      ?>
      <?php
        $data = move_uploaded_file($_FILES['image']['tmp_name'],'uploads/' .$_FILES['image']['name']);
$data = move_uploaded_file($_FILES['video']['tmp_name'],'uploads/' .$_FILES['video']['name']);
if(isset($data))
{
        echo "<script>alert('video uploaded .')</script>";
    }


?>

