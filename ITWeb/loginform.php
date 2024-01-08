<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIN</title>
    <link rel="icon" href="icon.png">
  <style>
      *{
            margin: 0;
            padding: 0;
        }
        body{
            /* background: url(final.jpg) no-repeat; */
          background-size: cover;
        }
        .main{
            width: 100%;
            height: 10vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        ol{
            list-style: none;
            display: flex;
            font-size: 0.8rem;
        }
        ol li{
            margin: 0 20px;
            padding: 10px 20px;
            position: relative;
            transition: all 0.1s;
            transition-delay: 0.1s;

        }
        ol li a{
            color: black;
            text-decoration: none;

        }
        ol li::before{
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width:100%;
            height: 2px;
            background: white;
            transition: all 0.1s;
        }
        ol li:hover::before{
            bottom: 40px;
            /* background: rgb(79, 79, 243); */
        }
        ol li:hover{
            background:rgb(79, 79, 243) ;
        }
      
      
      .loginbox{
        width: 400px;
        /* background: rgba(0,0,0,.8); */
        padding: 40px;
        position:absolute;
        top: 25%;
        left: 57%;
        transform: translate(-50% -50%);
        color: white;
        opacity: 80%;
      }
       .loginbox h1{ 
           color:black;
          float: left;
          font-size: 40px;
          border-bottom: 2px solid  rgb(105, 88, 255);
          margin-bottom: 45px;
          padding: 6px 0;
       } 
       .textbox{
           width: 100%;
           overflow: hidden;
           font-size: 18px;
           padding: 8px 0;
           margin: 8px 0;
           border-bottom: 1px solid  rgb(105, 88, 255);
       }
       .textbox input{
           border: none;
           outline: none;
           background: none;
           color: black;
           font-size: 18px;
           width: 80%;
           float: left;
            margin:  0 10px;
       }
       .btn{
           width: 100%;
           background: none;
           border: 2px solid  rgb(105, 88, 255);
           color: black;
           padding: 5px;
           font-size: 18px;
           cursor: pointer;
           margin: 14px 0;

       }
       .btn:hover{
           background-color: rgb(105, 88, 255);
           cursor: pointer;
       }
       a{
           color: rgb(105, 88, 255);
       }
       .img{
        position:absolute;
        top: 15%;
        left: 5%;
        transform: translate(-50% -50%);
       }
       .img img{
           height:610px;
           width:700px;
           -webkit-filter: drop-shadow(6px 6px 10px rgb(0,0,0));
       }
       h4{
           color:black;
       }
       @media  screen  and (max-width:968px) {
            .main{
            width: 80%;
            height: 10vh;
            display: flex;
            justify-content: center;
            align-items: center;
        } 
        ol li{
            margin: 0 15px;
            /* margin-left:5%; */
            padding: 5px 5px;
            position: relative;
            transition: all 0.1s;
            transition-delay: 0.1s;

        }
        .img{
         position: absolute;
           top:14%;
           left:5%;
           transform: translate(-50% -50%);
            }
            .img img{
                    height: 550px;
                    width: 350px;
                    }
         .loginbox{
        width: 400px;
        /* background: rgba(0,0,0,8); */
        /* background:blue; */
        padding: 40px;
        position:absolute;
        top: 24%;
        left: 45%;
        transform: translate(-50% -50%);
        color: white;
      }
      .loginbox h1{ 
           color:black;
          float: left;
          font-size: 30px;
          border-bottom: 2px solid  rgb(105, 88, 255);
          margin-bottom: 45px;
          padding: 6px 0;
       } 
       .textbox input{
           border: none;
           outline: none;
           background: none;
           color: black;
           font-size: 14px;
           width: 60%;
           float: left;
            margin:  0 8px;
       }
       .textbox{
           width: 100%;
           overflow: hidden;
           font-size: 18px;
           padding: 8px 0;
           margin: 8px 0;
           border-bottom: 1px solid  rgb(105, 88, 255);
       }
     
        }
        @media  screen and (max-width:480px ){
            .img{
            position: absolute;
           top: 14%;
           left:15%;
           transform: translate(-50% -50%);
            }
            .img img{
                    height: 220px;
                    width: 300px;
            }
            .main{
            width: 100%;
            height: 10vh;
            
            display: flex;
            justify-content: center;
            align-items: center;
        }
        ol li{
            margin: px 10px;
            padding: 10px 10px;
            position: relative;
            transition: all 0.1s;
            transition-delay: 0.1s;

        }
        .loginbox{
        width: 380px;
        /* background: rgba(0,0,0,8); */
        /* background:blue; */
        padding: 20px;
        position:absolute;
        top: 50%;
        left: 0%;
        transform: translate(-50% -50%);
        color: white;
      }
      .btn:hover{
           background-color: rgb(105, 88, 255);
           cursor: pointer;
       }
    }


        



  </style>
</head>
<body>

 <?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    // if(isset($_POST['login']))
    {

        include 'config.php';
        $username=$_POST["username"];
        $password=$_POST["pass"];
        $sql="select * from `data`.`info` where name='$username' AND password='$password'";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if($num == 1){
            // session_start();
             
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$username;
            //  header("location:welcome.php");
            
             echo "<script type='text/javascript'>window.location.href='welcome.php'</script>";
        }
        else{
           
           $message = "wrong Creaditials";
           echo "<script type='text/javascript'>alert('$message');</script>";
        } 
    }
    ?>
    
   
    <div class="main">
        <ol>
            <li><a href="welcome.php">HOME</a></li>
           <li><a href="download.html">DOWNLOAD</a></li>
          
        </ol>
        <br>
    </div>
    <form method="POST">
    <div class="loginbox">
        <h1>Login</h1>
        
        <div class=" textbox ">
          
            <input type="text" placeholder="User" name="username" value="" required>
        </div>
        <div class=" textbox">
            <input type="Password" placeholder="Password" name="pass" value="" required>
        </div>
        <input class="btn" type="submit" name="login" value="Log In">

  
    <h4 >Don't have an account <a href="index.php"  >Sign.In</a></h4>
    </div>
</form>
    <div class="img">
        <img src="login.svg">
    </div>

</body>
</html>