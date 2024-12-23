<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="src/assets/img/champion-league-ball.png" type="image/x-icon">
    <title>Youcode-Champion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Navbar  -->
    <nav class="bg-[#38003d] shadow shadow-gray-300 w-100 px-8 md:px-auto">
        <div class="md:h-16 h-28 mx-auto md:px-4 container flex items-center justify-between flex-wrap md:flex-nowrap">
            <div class="text-indigo-500 md:order-1 flex gap-2">
                <figure>
                    <img src="src/assets/img/white-champion-league.png" class="h-10 w-10" alt="champion-league-ball">
                </figure>
                <div class="flex items-center">
                    <p class="font-[Outfit] text-white font-medium">YouCode League</p>
                </div>
            </div>
            <div class="text-gray-500 order-3 w-full md:w-auto md:order-2">
                <ul class="flex font-[Outfit] font-semibold justify-between">
                    <li class="md:px-4 md:py-2 text-white"><a href="#">Home</a></li>
                    <li class="md:px-4 md:py-2 text-white"><a href="#">Shop</a></li>
                    <li class="md:px-4 md:py-2 text-white"><a href="#">About</a></li>
                    <li class="md:px-4 md:py-2 text-white"><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main -->
    <main class="bg-[#ffffff] flex font-[Outfit]">
        <section class="h-screen w-full">
            <div class="h-screen flex flex-col justify-center">
                <p class="text-7xl text-center mx-10">Choose your team and participate in the challenges</p>
                <div class="flex justify-center">
                    <a href="php/fantasy.php">
                        <button class="bg-[#FFF8B8] rounded-lg py-1 px-3 mt-10 ">Create your Fantasy team</button>
                    </a>
                </div>
            </div>
        </section>
    </main>
</body>

</html>