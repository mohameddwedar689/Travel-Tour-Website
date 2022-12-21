<?php
    session_start(); 
    //connection
    $connection = mysqli_connect('localhost' , 'root' , '' , 'book_db');

    if(isset($_POST['submit']))
    {
        $email = mysqli_real_escape_string($connection , $_POST['email']);
        $password = md5($_POST['password']);

        $select = " SELECT * FROM register_form WHERE email = '$email' && password = '$password' ";

        $result = mysqli_query($connection , $select);

        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_array($result);

            if($row['email'] === $email && $row['password'] === $password)
            {
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row["id"];
                header('location:home.php');
            }
            else
            {
                $error[] = 'incorrect email or password';
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
    <title>Login Page</title>

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
            <h3>login now</h3>
            <?php
                if(isset($error))
                {
                    foreach($error as $error)
                    {
                        echo '<span class="error-msg">'.$error.'</span>';
                    }
                }
            ?>
            <input type="email" name="email" require placeholder="enter your email">
            <input type="password" name="password" require placeholder="enter your password">
            <input type="submit" name="submit" value="login now" class="form-btn">
            <p>don't have an account? <a href="register_form.php">register now</a></p>

        </form>
    </div>
    <!-- End Regestration Form -->
    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- custom js file link  -->
    <script type="text/javascript" src="js/script.js?v=<?php echo time();?>"></script>
</body>
</html>