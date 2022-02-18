<?php
session_start();
//include_once('update.php');
?>

<html>
    <head>
        <title>TODO List</title>
        <link href="style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <form action="update.php" method="POST">
            <h2>TODO LIST</h2>
            <h3>Add Item</h3>
            <input id="new-task" type="text" name="input" value="<?php echo $_SESSION['myVar']; ?>"><button name="addBtn">
                <?php
                if($_SESSION['count']==0){
                    ?>
                    Add
                <?php
                }else{
                    ?>
                    update
                <?php
                $_SESSION['count']=0;
                }
                ?></button>
            <!-- <form action='update.php' method='POST'>
                <input id="new-task" name='addBtn' type="text"><button>Add</button> -->
            </form>
    
            <h3>Todo</h3>
            <ul id="incomplete-tasks">
                <!-- <li><input type="checkbox"><label>Pay Bills</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>
                <li><input type="checkbox"><label>Go Shopping</label><input type="text" value="Go Shopping"><button class="edit">Edit</button><button class="delete">Delete</button></li> -->
                <?php if(isset($_SESSION['todo'])){
            foreach($_SESSION['todo'] as $key => $value){
                echo '<form action="update.php" method="POST"><li><input type="checkbox" onchange="this.form.submit()" name="check"><label>.'.$value.'</label><input type="text"><button class="edit" name="editButton">Edit</button><button class="delete" name="deleteBtn">Delete</button></li><input type="text" hidden name="mVal" value="'.$key.'"></form>';
            }
        } ?>
            </ul>
    
            <h3>Completed</h3>
            <ul id="completed-tasks">
                 <?php 
                if(isset($_SESSION['checkBox'])){
                    foreach($_SESSION['checkBox'] as $key1=>$value1){
                        echo '<form action="update.php" method="POST"><li><input type="checkbox" checked><label>.'.$value1.'</label><input type="text"><button class="edit" name="editButton2">Edit</button><button class="delete" name="deleteBtn2">Delete</button></li><input type="text" hidden name="mVal" value="'.$key1.'"></form>';
                    }
                }
                ?> 
                <!-- <li><input type="checkbox" checked><label>See the Doctor</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li> -->
            </ul>
        </div>
        

    </body>
</html>