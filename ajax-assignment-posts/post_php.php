<?php
    session_start();
    require("connection.php");
    if(isset($_POST['submit']))
    {
        $post_user   = $_POST['post_list'];

        if(!empty(trim($post_user)) )
        {
            $insert_query = "insert into posts(post) values('$post_user')";
            $result_set = mysqli_query($connection,$insert_query);
            if(!$result_set)
            {
                echo "Error : ".mysqli_error($connection);
            }
            else{
                $id =  mysqli_insert_id($connection);
                $select_query = " select post from posts where id =  $id";
                
                $select_result_set = mysqli_query($connection,$select_query);
                $post = mysqli_fetch_assoc($select_result_set);
                
                $html = "<tr>";
                foreach( $post as $value )
                {
                    $html .= "<td>".$value."</td>";
                   // $html .= "<td><a href="delete.php?id=.$_SESSION['post_id'].">delete</a></td>";
                   // $html .= "<td><a href="edit.php?id=.$_SESSION['post_id'].">edit</a></td>";
                }
                $html .= "</tr>";
                echo $html;    
            }
        }
    }
?>

