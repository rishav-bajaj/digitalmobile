<?php  
 include'conn.php';
 try  
 {  
     
      if(isset($_POST["login"]))  
      {  
           
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  

                $query = "SELECT * FROM login WHERE uname = :uname AND password = :password";  
                $statement = $conn->prepare($query);  
                $statement->execute(  
                     array(  
                          'uname'     =>     $_POST["username"],  
                          'password'     =>    $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                include'conn.php';
                $sql = "SELECT *from login WHERE uname='".$_POST["username"]."'";
                $result = mysqli_query($conn2, $sql);
                $row = mysqli_fetch_assoc($result); 
                mysqli_close($conn2);
                $act="$row[activation]";
                
         if($act=='Deactive'){
        echo"<script>alert('Your Account Is Deactived !! ')</script>"; 
        echo"<script>window.location='login.php'</script>";
                      }
                      
                     else{
                      session_start();
                     $_SESSION["usid"] = $_POST["username"];
                      header("location:index.php");  
                      $ip=$_SERVER['REMOTE_ADDR'];
                      $_SESSION['ip']=$ip;
                      
                      
                      
include'conn.php';
$sql = "SELECT *from login WHERE uname='".$_POST["username"]."'";
$result = mysqli_query($conn2, $sql);
$row = mysqli_fetch_assoc($result); 
mysqli_close($conn2);
$p=$row['permission'];
$_SESSION["Permission"] =$p;

$time_now=mktime(date('H')+5,date('i')+30,date('s'));
$date =$_SESSION['usid'].date('His', $time_now);

$_SESSION['session_id1']=$date;

$_SESSION['session_id2']=$date;
                }}  
                else  
                {  
                    echo"<script>alert('UserName and Password Does Not Match !! ')</script>"; 
                    echo"<script>window.location='login.php'</script>";
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>