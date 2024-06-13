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
    <?php 
        if (isset($_POST["logout"]) &&  $_POST["logout"] == 'true'){
            session_unset();
            session_destroy();
        }
        include 'header.php';
    ?>
    <section class="bg-cover bg-center h-96 mb-6" style="background-image: url('./images/redMountain.jpg');"></section>
        <section class="flex flex-col gap-7 lg:flex lg:flex-row lg:mx-auto lg:max-w-5xl mb-6">
            <div>
                <img src="./images/mountainsAndTrees.jpg" alt="">
                <h3 class="font-bold text-center">Šis ir h3 zem bildes!!</h3>
            </div>
            <div>
                <img src="./images/mountainsAndTrees.jpg" alt="">
                <h3 class="font-bold text-center">Šis ir h3 zem bildes!</h3>
            </div>
            <div>
                <img src="./images/mountainsAndTrees.jpg" alt="">
                <h3 class="font-bold text-center">Šis ir h3 zem bildes!</h3>
            </div>
        </section>
        <section class="flex justify-center items-center bg-cover bg-center h-lvh mb-6 text-5xl" style="background-image: url('./images/mountains.jpg');">
            <div>
                <h2 class="text-center">Picture with some heading</h2>
            </div>
        </section>
        <section class="mb-6">
            <div class="flex flex-col lg:gap-4 lg:flex-row lg:max-w-5xl lg:mx-auto mb-1">
                <div class="lg:w-1/2">
                    <img src="./images/lake.jpg" alt="">
                </div>
                <div class="lg:w-1/2">
                    <h2>Šis ir h2 virsraksts</h2>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptatum voluptates sed assumenda harum id ratione laborum ab ut dolores quae numquam eveniet ipsum, eaque labore blanditiis, expedita nihil illo.</p>
                </div>
            </div>
            <div class="flex flex-col lg:gap-4 lg:flex-row-reverse lg:max-w-5xl lg:mx-auto mb-1">
                <div class="lg:w-1/2">
                    <img src="./images/lake.jpg" alt="">
                </div>
                <div class="lg:w-1/2">
                    <h2>Šis ir h2 virsraksts</h2>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptatum voluptates sed assumenda harum id ratione laborum ab ut dolores quae numquam eveniet ipsum, eaque labore blanditiis, expedita nihil illo.</p>
                </div>
            </div>
            <div class="flex flex-col lg:gap-4 lg:flex-row lg:max-w-5xl lg:mx-auto mb-1">
                <div class="lg:w-1/2">
                    <img src="./images/lake.jpg" alt="">
                </div>
                <div class="lg:w-1/2">
                    <h2>Šis ir h2 virsraksts</h2>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptatum voluptates sed assumenda harum id ratione laborum ab ut dolores quae numquam eveniet ipsum, eaque labore blanditiis, expedita nihil illo.</p>           
                </div>
            </div>
        </section>
        <section class="mb-6">
            <div class="lg:max-w-5xl lg:mx-auto mb-3">
                    <h2 class="font-bold text-center">Šis ir h2 virsraksts Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum tenetur itaque omnis natus maiores odio temporibus est reiciendis.</h2>
            </div>
            <div class="grid gap-4 lg:grid-cols-2 lg:max-w-5xl lg:mx-auto">
                <div class="">
                    <img src="./images/mountains.jpg" alt="">
                    <h3 class="pictureDescription">Šis ir h3 zem bildes, šis ir h3 zem bildes!</h3>
                </div>
                <div class="">
                    <img src="./images/mountains.jpg" alt="">
                    <h3 class="pictureDescription">Šis ir h3 zem bildes, šis ir h3 zem bildes!</h3>
                </div>
            </div>
            <div class="grid gap-4 lg:grid-cols-2 lg:max-w-5xl lg:mx-auto">
                <div class="">
                    <img src="./images/mountains.jpg" alt="">
                    <h3 class="pictureDescription">Šis ir h3 zem bildes, šis ir h3 zem bildes!</h3>
                </div>
                <div class="">
                    <img src="./images/mountains.jpg" alt="">
                    <h3 class="pictureDescription">Šis ir h3 zem bildes, šis ir h3 zem bildes!</h3>
                </div>
            </div>
        </section>
        <footer class="flex flex-col lg:flex lg:flex-row lg:gap-4 lg:max-w-5xl lg:mx-auto">
            <div class="basis-1/4 mb-2">
                <img class="" src="./images/mountainsAndTrees.jpg" alt="">
            </div>
            <div class="basis-1/4 mb-2">
                <h2 class="font-bold text-center">Šis ir h2 virsraksts</h2>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit nemo officia ipsa expedita laboriosam earum autem illo.</p>
            </div>
            <div class="basis-1/4 mb-2 ">
                <h2 class="font-bold text-center">Šis ir h2 virsraksts</h2>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit nemo officia ipsa expedita laboriosam earum autem illo obcaecati repellendus eaque maxime quos, architecto recusandae, nulla hic minima quas, veritatis voluptatibus.</p>
            </div>
            <div class="basis-1/4 mb-2">
                <h2 class="font-bold text-center">Šis ir h2 virsraksts</h2>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit nemo officia ipsa expedita laboriosam earum autem illo obcaecati repellendus eaque maxime quos, architecto recusandae, nulla hic minima quas, veritatis voluptatibus.</p>
            </div>
        </footer>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>