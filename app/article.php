<?php 
    session_start();
    include 'functions.php';
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
<body class="flex flex-col min-h-screen">
    <?php
        if(isset($_POST["title"]) && (isset($_SESSION["name"]))){
            insertArticles($_POST["title"], $_POST["imageurl"], $_POST["body"],);
        }
    ?>


    <?php include 'header.php'; ?>
    <div class="flex flex-col gap-8 flex-grow">
        <?php 
            $result = getArticles();
            while($row = mysqli_fetch_assoc($result)){ ?>
            <div class="flex flex-row justify-center">
                <div class="basis-1/12 bg-green-100 rounded p-2">
                    <?= $row["title"]; ?>
                </div>
                <div class="basis-3/5 max-w-3xl bg-green-100 rounded p-2">
                    <?= $row["body"]; ?>
                </div> 
            </div>
        <?php } ?>
        <div class="w-3/5 max-w-xl mx-auto bg-slate-300 p-3 text-center text-lg rounded">
            Add your article to the database!
        </div>
            <form class="w-3/5 max-w-xl mx-auto bg-slate-300 p-3 rounded" action="./article.php" method="POST">
                <label class="block" for="title">Title</label>
                <input class="border border-black mb-2 rounded-md w-1/2" type="text" name="title">
                <label class="block" for="body">Body</label>
                <textarea class="border border-black mb-2 rounded-md w-full h-16" type="text-area" name="body"></textarea>
                <label class="block" for="imageurl">Image url</label>
                <input class="border border-black mb-4 rounded-md w-1/2" type="text" name="imageurl">
                <input class="mx-auto block border border-black rounded-md w-1/5 min-w-min p-2 bg-lime-200" type="submit" value="Submit">
                <?php if(isset($_POST["title"]) && (!isset($_SESSION["name"]))){ ?>
                    <p class="text-red-600">You are not authorized to submit articles, please log in first! </p>
                <?php } ?>
            </form>
        </div>
    </div>
    <div class="mb-0 ml-0"><?php include 'footer.php'; ?></div>
</body>
</html>