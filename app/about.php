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
    <?php include 'header.php'; ?>
    <div class="flex flex-row gap-x-2 mt-10">
        <div class="flex flex-col basis-1/2">
            <img class="mb-6" src="./images/constr1.jpg" alt="">
            <img class="mb-6" src="./images/constr2.avif" alt="">
            <img class="mb-6" src="./images/constr3.jpeg" alt="">
        </div>
        <div class="flex flex-col basis-1/2">
            <p class="mb-14">"At our company, we pride ourselves on delivering top-quality construction services, specializing in both residential and commercial projects with a commitment to excellence and customer satisfaction."</p>
            <p class="mb-14">"With over 15 years of experience in the construction industry, our team of skilled professionals is dedicated to turning your vision into reality, ensuring every detail is meticulously handled."</p>
            <p class="mb-14">"Our comprehensive range of services includes design-build, general contracting, project management, and renovation, making us a one-stop solution for all your construction needs."</p>
            <p class="mb-14">"We prioritize safety, sustainability, and innovation in every project we undertake, utilizing the latest technologies and eco-friendly practices to create structures that stand the test of time."</p>
            <p class="mb-14">"Customer satisfaction is at the heart of what we do, and we strive to exceed expectations through transparent communication, on-time delivery, and unparalleled craftsmanship."</p>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>