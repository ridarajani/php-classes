<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body class="indexbody">
    <?php
        session_start();
        require_once("constant.php");
        require_once("data.php");
    ?>
    <header>
        <?php    
            foreach($information as $user){
                if($_SESSION['user_id'] == $user['Unique-id']){
                    ?>
                        <h2 class="heading-name"><?php echo WELCOME.$user['Name']; ?></h2>
                    <?php
                }
            }
        ?>
        <p class="para-find"><?php echo FINDLIST ?></p>
    </header>
    <main>
        <section>
            <div class="heading-todo">
                <h2 class="heading-todolist">TO DO LIST</h2>
            </div>
            <?php
                $task = [];
                $_SESSION['status'] = 1;

                if(isset($_POST['addtask'])){
                    $task_list = [];
                    $task['task'] = $_POST['todotask'];
                    $task['status'] = $_SESSION['status'];

                    if(empty($_COOKIE['addtask']) AND !isset($_COOKIE['addtask'])){
                        $task_list[] = $task;
                        $serialize = serialize($task_list);
                        $encode = base64_encode($serialize);
                        setcookie( 'addtask' , $encode , time() + 60*60*24 , "/" );
                    }else{
                        $decode = base64_decode($_COOKIE['addtask']);
                        $unserialize = unserialize($decode);
                        $unserialize[] = $task;
                        $serialize = serialize($unserialize);
                        $encode = base64_encode($serialize);
                        setcookie( 'addtask' , $encode , time() + 60*60*24 , "/" );     
                    }
                }
            ?>
            <div>
                <form class="form-addtask" method="post">
                    <div class="task-filed">
                        <input type="text" name="todotask">
                    </div>
                    <div class="button-task">
                        <input type="submit" name="addtask" value="Add Task" >
                    </div>
                 
                </form>
            </div>
            <?php
                if(isset($_COOKIE['addtask'])){
                    $decode = base64_decode($_COOKIE['addtask']);
                    $unserialize = unserialize($decode);
                    ?>
                    <ul class="ul-list">
                    <?php
                     foreach($unserialize as $key => $value){
                            ?>
                            <li class="li-list">
                            <?php
    	                        foreach ($value as $key2 => $value2) {
                                    ?>
                                        <div>
                                            <p class="p-list" style="<?php echo ($unserialize[$key]['status'] == 2) ? "background : green; color : white;" : " "; ?>">    
                                            <?php echo $value2;break; ?></p>
                                        </div>   
                                    <?php
                                }    
                            ?>
                            <div class="anchor-div">
                                <div class="sub-anchors">
                                    <a href="edit.php?taskedit=<?php echo $key ?>"> edit </a>
                                </div>
                                <div class="sub-anchors">
                                    <a href="delete.php?taskdelete=<?php echo $key ?>"> X </a>
                                </div>
                                <div class="sub-anchors">
                                    <a href="view.php?viewdelete=<?php echo $key ?>">View</a>
                                </div>
                                <div class="sub-anchors">
                                    <a href="status.php?taskstatus=<?php echo $key ?>"> done </a>
                                </div>
                            </div>
                            </li>
                            <?php
                        }
                      ?>  
                    </ul>
                    <?php
                }
            ?>
                <div class="anchor-logout">
                    <a class="button-anchor" href="logout.php">Logout</a>
                </div>
        </section>
    </main>
    <footer>
    </footer>
</body>
</html>