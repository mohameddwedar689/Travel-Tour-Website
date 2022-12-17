<?php
    //connection
    $connection = mysqli_connect('localhost' , 'root' , '' , 'book_db');

    if(isset($_POST['submit']))
    {
        $name = mysqli_real_escape_string($connection , $_POST['name']);
        $email = mysqli_real_escape_string($connection , $_POST['email']);
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);

        $select = " SELECT * FROM register_form WHERE email = '$email' && password = '$password' ";

        $result = mysqli_query($connection , $select);

        if(mysqli_num_rows($result) > 0)
        {
            $error[] = "user already exist!";
        }
        else
        {
            if($password != $cpassword)
            {
                $error[] = "password not matched";
            }
            else
            {
                $insert = " INSERT INTO register_form(name , email , password) VALUES('$name' , '$email' , '$password') ";
                mysqli_query($connection , $insert);
                header('location:login_form.php');
            }
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regestration Page</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>" type="text/css">
</head>
<body>
    <!-- Start Registertion Form -->
    <div class="form-container">
        <form action="" method="post">
            <h3>register now</h3>
            <?php
                if(isset($error))
                {
                    foreach($error as $error)
                    {
                        echo '<span class="error-msg">'.$error.'</span>';
                    }
                }
            ?>
            <input type="text" name="name" require placeholder="enter your name">
            <input type="email" name="email" require placeholder="enter your email">
            <input type="password" name="password" require placeholder="enter your password">
            <input type="password" name="cpassword" require placeholder="confirm your password">
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>already have an account? <a href="login_form.php">login now</a></p>

        </form>
    </div>
    <!-- End Regestration Form -->
    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- custom js file link  -->
    <script type="text/javascript" src="js/script.js?v=<?php echo time();?>"></script>
</body>
</html>