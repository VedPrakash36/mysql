<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents</title>
    <link rel="stylesheet" href="./style.css">
             

    
</head>
<body>
    <?php
       if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];

        $servername="localhost";
        $username="root";
        $password="";
        $database="loginds";
        $conn=mysqli_connect($servername,$username,$password,$database);
        if($conn){
            echo "yes it connected";
        }
        else{
            echo "no it connected";
        }
    
    echo "<br>";
    $sql="INSERT INTO `user`(`id`,`name`,`password`) VALUES ('1','$username','$password')";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "query failed";

    }else{
        echo "Intersting into table succed";
    }
    
    
}
    
    
    ?>

    <div class="content">
         <div class="col-xs-6">
            <form action="mysql.php",method="post">
               <div class="form-group">
                     <label for="username">User name</label> 
                     <input type="text"name="username" class="form.control"><br><br>
</div>   
                     <div class="form-group">
                        <label for="username">Password</label>
                        <input type="password" name="password" class="form.control">

    </div>
    <input type="submit" class="btn btn-primary" name="submit">
                    

               
            </form>
         </div>
    </div>
</body>
</html>