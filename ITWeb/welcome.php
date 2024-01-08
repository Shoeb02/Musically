<?php
session_start();

if(!isset($_SESSION['username']) || ($_SESSION['loggedin']!=true)){
    // header("loaction:loginform.php");
    //  echo "<script type='text/javascript'>alert('Please Login First');</script>";
     echo "<script type='text/javascript'>window.location.href='loginform.php'</script>";
    
    //exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="icon" href="icon.png">
</head>
<style>
    html{
        scroll-behavior:smooth;
    }
    *{
        margin: 0;
        padding: 0;
    }
    body{
       /* // background: url(final.jpg) no-repeat; */
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
        color: rgb(0, 0, 0);
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
    h1{
            font-size: 70px;
            color: rgb(116, 137, 255);
            margin-left: 50%;
            margin-top: 9%;
            font-family:sans-serif;
            font-style: bold;
             /* text-shadow: 2px 2px 7px rgb(79, 79, 243);  */
             text-shadow: 2px 2px 7px rgb(116, 137, 255); 
    }
    .btn{
            margin-left:60%;
            margin-top: 5%;
            font-family: sans-serif;
            font-style: italic;
            border-radius: 20% 20% 20% 20%;
            background: rgb(113, 110, 255);
            
            color: rgb(43, 255, 0);
            text-decoration: none;
            padding: 20px;
            box-shadow:3px 3px 10px #c2e9fb 51%;
            
        }
        .btn a{
            /* color:rgb(31, 53, 253) ; */
            color:black;
            text-decoration: none;
            padding: 7px;
            font-style:sans-serif;
            font-weight: bold;
            font-size: large;
           
        }
        .btn:hover{
            /* background-color:rgb(17, 255, 57) ; */
            /* background-color:white; */
            /* background-color:grey; */
            opacity: 70%;
            
            
        }
        .btn a:hover{
            /* color: rgb(0, 0, 0); */
            color:white;
        }  
        .btn a:active{
            color:rgb(31, 53, 253);
        }
        .img{
            position: absolute;
            top:8%;
            left: 5%;
            transform: translate(-50,-50);

        }
        .img img{
            height: 620px;
            width: 630px;
            -webkit-filter: drop-shadow(4px 4px 5px rgb(0,0,0));
        }
        @media  screen  and (max-width:980px) {
            .main{
            width: 100%;
            height: 10vh;
            display: flex;
            justify-content: center;
            align-items: center;
        } 
        ol li{
            margin: 0 15px;
            /* margin-left:5%; */
            padding: 8px 8px;
            position: relative;
            transition: all 0.1s;
            transition-delay: 0.1s;

        }
        .img{
         position: absolute;
           top:14%;
           left:0%;
           transform: translate(-50% -50%);
            }
            .img img{
                    height: 400px;
                    width:400px;
                    }
            h1{
             font-size: 50px;
            color: rgb(116, 137, 255);
            margin-left: 50%;
            margin-top: 11%;
            font-family:sans-serif;
            font-style: bold;
             /* text-shadow: 2px 2px 7px rgb(79, 79, 243);  */
             text-shadow: 2px 2px 7px rgb(116, 137, 255);
            } 
                }
            
             @media  screen and (max-width:480px ){
            .img{
            position: absolute;
           top: 14%;
           left:5%;
           transform: translate(-50% -50%);
            }
            .img img{
                    height: 300px;
                    width: 350px;
            }
            .main{
            width: 100%;
            height: 10vh;
            
            display: flex;
            justify-content: center;
            align-items: center;
        }ol li{
            margin: 3px 3px;
            padding: 4px 4px;
            position: relative;
            transition: all 0.1s;
            transition-delay: 0.1s;
        }
    
        h1{
            margin-top:93%; 
            margin-left:7%;
            font-size:40px;
        }
        .btn{
            margin-top:13%;
            margin-left:20%;
            padding: 10px;
        }
    }
        
    </style>

     <body>
    <div class="main">
        <ol>
            <li><a href="welcome.php">HOME</a></li>
           <li><a href="download.html">DOWNLOAD</a></li>
          
          <li><a href="logout.php">LOG OUT</a></li>
        </ol>
        <br>
    </div>
  
    
    <h1>
        DOWNLOAD AND<br> ENJOY BEST<br> QUALITY MUSIC !
    </h1>
    
    
    <div class="img">
        <img src="hm.svg">
    </div>
    <div class="b">
        <button class="btn" type="button"><a href="download.html" </a>Download Now</button>
      
        </div>
   
</body>
</html>