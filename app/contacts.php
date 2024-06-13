<?php session_start(); ?>
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
    <div class="flex flex-col">
        <?php include 'header.php'; ?>
        <p class="w-1/4 mt-16 mx-auto flex-grow h-lvh" >This is a contact page</p>
        <?php include 'footer.php'; ?>
    </div>
    
</body>
</html>