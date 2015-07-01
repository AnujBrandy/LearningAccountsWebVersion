<?php  
      
    include("dbConnection.php");//make connection here  
    if(isset($_POST['submit']))  
    {  
  
        $user_name=$_POST['name'];//here getting result from the post array after submitting the form.  
        $user_pass=$_POST['pass'];//same  
        $user_email=$_POST['email'];//same  
      
      
        if($user_name=='')  
        {  
            //javascript use for input checking  
            echo"<script>alert('Please enter the name')</script>";  
    exit();//this use if first is not work then other will not show  
        }  
      
        if($user_pass=='')  
        {  
            echo"<script>alert('Please enter the password')</script>";  
    exit();  
        }  
      
        if($user_email=='')  
        {  
            echo"<script>alert('Please enter the email')</script>";  
        exit();  
        }  
    //here query check weather if user already registered so can't register again.  
        $check_email_query="select * from Users WHERE userEmail='$user_email'";  
        $run_query=mysqli_query($dbConnection,$check_email_query);  
      
        if( !$run_query || mysqli_num_rows($run_query)==0) 
    {
      
    }
    else 
        {  
    echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
    exit();  
        }  
    //insert the user into the database.  
        $insert_user="insert into Users (userName,userPassword,userEmail) VALUES ('$user_name','$user_pass','$user_email')";  
        if(mysqli_query($dbConnection,$insert_user))  
        {  
            echo"<script>window.open('signin.php','_self')</script>";  
        }  
      
      
      
    }  
      
    ?>