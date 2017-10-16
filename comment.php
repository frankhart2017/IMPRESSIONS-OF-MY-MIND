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

    if(isset($_POST['logout'])) {

        $_SESSION['email']='';

    }

    if(isset($_POST['delete'])) {

            $query = "DELETE FROM `comment` WHERE id = '".mysqli_real_escape_string($link, $_POST['delete'])."'";

            mysqli_query($link, $query);

            echo "<script> alert('Successfully deleted comment.'); </script>";

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

    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Comment</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <form method="post">
            <?php

                $query = "SELECT * FROM `comment`";
                
                if($result = mysqli_query($link, $query)) {

                    $i=1;

                    while($row = mysqli_fetch_array($result)) {

                        echo "<tr>";
                        $id=$row['id'];
                        echo "<td>".$i."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['comment']."</td>";
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





