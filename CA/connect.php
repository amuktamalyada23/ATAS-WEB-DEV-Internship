
    <?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
{
     $conn=mysqli_connect('localhost','root','','ca') or die("Connection failed:" .msqli_connect_error());
     if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']))
     {
           $name=$_POST['name'];
           $email=$_POST['email'];
           $message=$_POST['message'];
           $sql="INSERT INTO `contact` (`name`,`email`,`message`) VALUES ('$name','$email','$message')";
           $query=mysqli_query($conn,$sql);
           /**/
           if($query)
           {
                echo '<img src="thankyou.png" alt="" width="100%">
                <h1 style=" color:rgb(24,24,53);text-align:center;">
                <br>
                <br> You will soon recive a mail from us regarding the approval
                 of your appointment.</h1>';
           }
           else
           {
               echo '<h1 style="color:red">ERROR.Try to contact the owner.<h1>';
           }
     }
    }
    ?>
    