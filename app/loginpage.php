<?php session_start(); ?>
<?php 
    $password = "secret";
    if (!empty($_POST["name"]) && isset($_POST["password"]) && ($_POST["password"] === $password)){
        $username = $_POST["name"];
        $_SESSION["name"] = $_POST["name"];
        header("Location: home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cool website!</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include 'header.php'; 
    if (!isset($_SESSION["name"])){ ?>
        <div class="h-lvh justify-center">
            <p class="max-w-80 m-auto mb-2 text-center">Please login </p>
            <div class="flex flex-col justify-center">
                <form action="./loginpage.php" method="post" class="flex flex-col justify-center max-w-80 m-auto">
                    <input class="border border-black mb-2 rounded-md" type="text" name="name" placeholder="username">
                    <input class="border border-black mb-2 rounded-md" type="password" name="password" placeholder="password">
                    <input class="border border-black rounded-md " type="submit" value="Submit">
                </form>
            </div>
        </div>
    <?php } else { ?>
        <div class="h-lvh"> You are logged in!</div>
    <?php } ?>
    <div class=""><?php include 'footer.php';?> </div>
</body>
</html>