<?php
    include "config.php";
    $message="";

    if(isset($_POST['submit'])){
        $email= mysqli_real_escape_string($conn,$_POST['email']);
        $pwd=mysqli_real_escape_string($conn,$_POST['password']);
        if($email!='' && $pwd!=''){
            $sql_query=" SELECT count(*) as UserCount from users where email='$email' and password='$pwd';";
            $result=mysqli_query($conn,$sql_query);
            $row=mysqli_fetch_array($result);
            $count=$row['UserCount'];
            if($count==1){
                $sql_query=" SELECT name as UserName,email as UserEmail,password as PassWord from users where email='$email';";
                $result=mysqli_query($conn,$sql_query);
                $row=mysqli_fetch_array($result);
                if($pwd===$row['PassWord']){
                    $_SESSION['username'] = $row['UserName'];
                    $_SESSION['useremail'] = $row['UserEmail'];
                    header('location:index.php');
                }
                else{
                    $message="Username or password did not match";
                }
            }
            else{
                $message="Username or password did not match";
            }
        }
        else{
            $message="Username or password not entered";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/external.css">
    <style>
         body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; margin-top: 20px; margin-left: auto; margin-right: auto; border: 2px solid grey; border-radius: 20px;background-color:aqua;}
        .help-block { color:red;}
        .form-group{padding-bottom: 10px; padding-top:10px;}
        .btn-btn-primary{font-size:17px;background-color: white;border-radius:10px;padding-left:7px;padding-right:7px;}
    </style>
</head>
<body>
<div id="header" class="header">
        <div class="left-align">
            <h1>AJIO</h1>
        </div>
        <div class="right-align">
            <div id="first" class="first">
                <a href="login.php">Sign In / Join AJIO</a>
                <a href="customercare.html">Customer Care</a>
                <div class="visit"><a href="register.php">Visit AJIOLUXE</a></div>
            </div>
            <div id="second" class="second">
                <form action="url" method="post">
                    <!-- <par class="trend">TRENDS</par> -->
                    <input type="text" placeholder="Search Trends Store">
                    <div id="search" class="search"><button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg></button></div>
                    <div id="heartdrop" class="heartdrop">
                        <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="red" class="bi bi-heart-fill" viewBox="0 0 16 13">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314Z"/>
                        </svg></button>
                    </div>
                    <div id="cartdrop" class="cartdrop">
                        <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                          </svg></button>
                    </div>
                </form>
            </div>
        </div>
</div>
<div id="header1" class="header1">
        <h1 class="title">TRENDS</h1>
        <div id="home" class="dropdown">
            <button><li>MEN</li></button>
            <button><li>WOMEN</li></button>
            <button><li>KIDS</li></button>
            <button><li>BRANDS</li></button>
            <button><li>OFFERS</li></button>
        </div>
</div>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <span class="help-block"><?php echo $message;?></span>
        <form action="" method="post">
            <div class="form-group">
                <label>UserEmail</label>
                <input type="email" name="email" class="form-control">
            </div>    
            <div class="form-group">
                <label>PassWord</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login" name="submit">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html>
