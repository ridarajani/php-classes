<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        require_once('constant.php');
        require_once('connection.php');
    ?>
    <header>
        <div>
            <h1><?php echo DASHBOARD ?></h1>
            <a href="logout.php"><?php echo LOGOUT ?></a>
        </div>
    </header>
    <main>
        <section>
            <div>
                <form method="post">
                   <div>
                        <div>
                            <label><?php echo POST ?></label>
                        </div>
                        <div>
                            <input name="post_list">                           
                        </div>
                    </div>
                    <div>
                        <input type="submit" name="submit" value="Add Post">  
                    </div>
                </form>
            </div>
            <div>
            <?php 
                    $select_query = " select * from posts order by id desc ";     
            
                    $result_set = mysqli_query($connection,$select_query);
                    $post = mysqli_fetch_all($result_set,MYSQLI_ASSOC);
            ?>

            <form method="post">
                <table>  
                    <thead>
                        <tr>
                            <th>Post</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody> 
                            <?php 
                           
                                foreach($post as $posts)
                                {  
                                    $_SESSION['post_id'] = $posts['id'];
                            ?>
                                <tr>
                                    <td><?php echo $posts["post"]?></td>
                                    <td><a href="delete.php?id=<?php  echo $posts['id']; ?>">Delete</a></td>
                                    <td><a href="edit.php?id=<?php   echo $posts['id']; ?>">Edit</a></td>
                                </tr>
                            <?php  
                                    }
                            ?>
                    </tbody>
                </table>
            </form>
            </div>
        </section>
    </main>
    <footer>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    
    $("form").on('submit',function(e){

         e.preventDefault();

         formData = {};

        $(this).find("input").each(function(i,v){ 
            formData[$(this).attr("name")] = $(this).val();
        }) ;  
 
        $.ajax({
            url:"post_php.php",
            type:"POST",
            dataType:"html",
            cache:false,
            data:formData,
            success:function(response){
                    $("table > tbody").prepend(response);
                }  
        }) 
    }) 
    </script>

</body>
</html>