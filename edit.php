<?php

    $link = mysqli_connect("shareddb1d.hosting.stackcp.net","mypics-31370ce6","qVk8rbpex/XZ","mypics-31370ce6");

    if(isset($_POST['submit'])) {

        if(!empty($_POST['title'])) {

            $query = "UPDATE `pictures` SET title='".mysqli_real_escape_string($link, $_POST['title'])."' WHERE id='".$_GET['id']."'";

            mysqli_query($link, $query);

        }

        if(!empty($_POST['location'])) {

            $query = "UPDATE `pictures` SET location='".mysqli_real_escape_string($link, $_POST['location'])."' WHERE id='".$_GET['id']."'";

            mysqli_query($link, $query);

        }

        if(!empty($_POST['camera'])) {

            $query = "UPDATE `pictures` SET camera='".mysqli_real_escape_string($link, $_POST['camera'])."' WHERE id='".$_GET['id']."'";

            mysqli_query($link, $query);

        }

        if(!empty($_POST['mode'])) {

            $query = "UPDATE `pictures` SET mode='".mysqli_real_escape_string($link, $_POST['mode'])."' WHERE id='".$_GET['id']."'";

            mysqli_query($link, $query);

        }

        if(!empty($_POST['date'])) {

            $query = "UPDATE `pictures` SET date='".mysqli_real_escape_string($link, $_POST['date'])."' WHERE id='".$_GET['id']."'";

            mysqli_query($link, $query);

        }

        if(!empty($_POST['time'])) {

            $query = "UPDATE `pictures` SET time='".mysqli_real_escape_string($link, $_POST['time'])."' WHERE id='".$_GET['id']."'";

            mysqli_query($link, $query);

        }

        echo "<script> alert('Successfully updated'); </script>";

        echo "<script> location.href='upload.php'; </script>";

    }

?>



<form method="post">

    <input type="text" placeholder="Enter title of picture" name="title"><br><br>
    <input type="text" placeholder="Enter location" name="location"><br><br>
    <input type="text" placeholder="Enter camera" name="camera"><br><br>
    <input type="text" placeholder="Enter mode" name="mode"><br><br>
    <input type="text" placeholder="Enter date (YYYY-MM-DD)" name="date"><br><br>
    <input type="text" placeholder="Enter time (HH:MM:SS)" name="time"><br><br>
    <input type="submit" name="submit" value="Submit">

</form>