<?php

    session_start();

    $link = mysqli_connect("shareddb1d.hosting.stackcp.net","mypics-31370ce6","qVk8rbpex/XZ","mypics-31370ce6");

    if(isset($_POST['submit'])) {

        if($_POST['email']!='' AND $_POST['password']!='') {

            $query = "SELECT * FROM `admin` WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."'";

            $result = mysqli_query($link, $query);

            if(mysqli_num_rows($result)==0) {

                echo "Account does not exist";

            } else {

                $row = mysqli_fetch_array($result);

                if($row['password']==$_POST['password']) {

                    $_SESSION['email'] = $_POST['email'];

                } else {

                    echo "Wrong password";

                }

            }

        } else {

            echo "Complete the form";

        }

    }

    if(isset($_POST['upload'])) {

        $imageName = mysqli_real_escape_string($link, $_FILES['image']['name']);
        $imageData = mysqli_real_escape_string($link, file_get_contents($_FILES['image']['tmp_name']));

        $error=0;

        if($imageName=='') {

            echo "Uploading an image is must.";
            $error=1;

        }

        if(isset($_FILES['image'])){
            $errors= array();
            $file_name = $_FILES['image']['name'];
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
            $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
            
            $expensions= array("jpeg","jpg","png");
            
            if(in_array($file_ext,$expensions)=== false){
                $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }
            
            if($file_size > 16000000){
                $errors[]='File size must be excately 2 MB';
            }
            
            if(empty($errors)==true){
                move_uploaded_file($file_tmp,"uploads/".$file_name);
            }else{
                print_r($errors);
            }
        }
        if($error==0) {

            $query = "INSERT INTO `pictures`(`title`, `location`, `camera`, `mode`, `date`, `time`, `photo`) VALUES('".mysqli_real_escape_string($link, $_POST['title'])."'
            , '".mysqli_real_escape_string($link, $_POST['location'])."', '".mysqli_real_escape_string($link, $_POST['camera'])."', '".mysqli_real_escape_string($link, $_POST['mode'])."'
            , '".mysqli_real_escape_string($link, $_POST['date'])."', '".mysqli_real_escape_string($link, $_POST['time'])."', '".$imageName."')";

            mysqli_query($link, $query);

            echo "Successfully uploaded";

        }

    }

    if(isset($_POST['logout'])) {

        $_SESSION['email']='';

    }

    if(isset($_POST['delete'])) {

            $query = "SELECT * FROM `pictures` WHERE id='".mysqli_real_escape_string($link, $_POST['delete'])."'";

            $row = mysqli_fetch_array(mysqli_query($link, $query));

            $name = $row['photo'];

            $name = "uploads/".$name;

            unlink($name);

            $query = "DELETE FROM `pictures` WHERE id = '".mysqli_real_escape_string($link, $_POST['delete'])."'";

            mysqli_query($link, $query);

            echo "<script> alert('Successfully deleted image.'); </script>";

    }

?>

<style type="text/css">

    table, th, td {

        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
        text-align: center;

    }

</style>

<form method="post" <?php if($_SESSION['email']!='') { echo 'style="display: none;"'; } ?>>

    <input type="text" name="email" placeholder="Enter email address">
    <input type="password" name="password" placeholder="Enter password">
    <button type="submit" name="submit">Submit</button>

</form>

<div <?php if($_SESSION['email']=='') { echo 'style="display: none;"'; } ?>>

    <form method="post" enctype="multipart/form-data">

        <input type="text" placeholder="Enter title of picture" name="title"><br><br>
        <input type="text" placeholder="Enter location" name="location"><br><br>
        <input type="text" placeholder="Enter camera" name="camera"><br><br>
        <input type="text" placeholder="Enter mode" name="mode"><br><br>
        <input type="text" placeholder="Enter date (YYYY-MM-DD)" name="date"><br><br>
        <input type="text" placeholder="Enter time (HH:MM:SS)" name="time"><br><br>
        <input type="file" name="image" class="form_input_file" id="i_image" accept="image/*" autocomplete=off><br><br>
        <input type="submit" name="upload" value="Upload"><br><br>
        <input type="submit" name="logout" value="Logout">

    </form>

    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Title</th>
                <th>Location</th>
                <th>Camera</th>
                <th>Mode</th>
                <th>Date</th>
                <th>Time</th>
                <th>Photo</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <form method="post">
            <?php

                $query = "SELECT * FROM `pictures`";
                
                if($result = mysqli_query($link, $query)) {

                    $i=1;

                    while($row = mysqli_fetch_array($result)) {

                        echo "<tr>";
                        echo "<td>".$i."</td>";
                        echo "<td>".$row['title']."</td>";
                        echo "<td>".$row['location']."</td>";
                        echo "<td>".$row['camera']."</td>";
                        echo "<td>".$row['mode']."</td>";
                        echo "<td>".$row['date']."</td>";
                        echo "<td>".$row['time']."</td>";
                        $id = $row['id'];
                        $link='edit.php?id='.$id;
                        echo '<td><img src="uploads/' .$row['photo']. '" width="150" height="100" alt="No Image"></td>';
                        echo "<td><a href=$link>Edit</a></td>";
                        echo "<td><button name='delete' value=$id>Delete</button>";
                        echo "</tr>";
                        $i++;

                    }

                }

            ?>
        </form>
        </tbody>
    </table>

</div>  





