<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style2.css">
    <title>Sign In and Sign Up</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="POST">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>
                <input type="text" placeholder="Name" name="T1">
                <input type="email" placeholder="Email" name="T2">
                <input type="password" placeholder="Password" name="T3">
                <input type="submit" name="sup" placeholder="sign up"/>
            </form>
        </div>
        <div class="form-container sign-in">
            <form  method="POST">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="email" placeholder="Email" name="P1">
                <input type="password" placeholder="Password" name="P2">
                <a href="#">Forget Your Password?</a>
                <input type="submit" name="sin" placeholder=" sign in"/>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Welcome, Friend!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>
<?php
if(isset($_POST["sup"]))
{echo "hello";
$a=$_POST["T1"];
$b=$_POST["T2"];
$c=$_POST["T3"];
$con=mysqli_connect('localhost','root','');
if(!$con)
{
die("could not connect".mysqli_error());
}
mysqli_select_db($con,"db");
$s="insert into login values('$a','$b','$c')";
//echo $s;
mysqli_query($con,$s);
mysqli_close($con);
echo "record stored";
}
?>

<?php
if(isset($_POST["sin"]))
{ echo "good";
    $a=$_POST["P1"];
$b=$_POST["P2"];
$con=mysqli_connect('localhost','root','');
if(!$con)
{
die("could not connect".mysqli_error());
}
mysqli_select_db($con,"db");
$s="select * from login where email='$a' and pass='$b' ";
//echo $s;
$r=mysqli_query($con,$s);
while($row=mysqli_fetch_array($r))
{

$f=1;
}
if($f==1)
header("Location: amanKart.html");
else
echo "ither username or password incorrect";
mysqli_close($con);
echo "record selected";
}
?>