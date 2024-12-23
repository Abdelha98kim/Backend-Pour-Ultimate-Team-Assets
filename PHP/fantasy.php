<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fantasy Website">
    <title>Youcode League</title>
    <link rel="shortcut icon" href="../src/assets/img/champion-league-ball.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Css/style.css">
</head>
<body>
    <!-- Navbar  -->
     <?php
     include ("navbar.php");
     ?>

    <!-- Main -->
     <main class="bg-[#FFF6E9] font-[Outfit] h-auto w-full flex" id="main">
        <!-- terrain + button -->
        <section class="h-screen " id="sec1">
            <div class="relative h-screen">
                <figure class="flex justify-center w-full h-screen">
                    <img src="../src/assets/img/Youcode-terrain.png" alt="Soccer terrain">
                </figure>
                <!-- RW AND LW -->
                <div class="relative bottom-36 w-full flex justify-center">
                    <div class="flex justify-between w-[90%]">
                            <figure class="flex justify-center w-14 h-14">
                                <button class="bg-[#1F509A] rounded-full w-full focus:border-2 focus:border-white" id="rw">+</button>
                            </figure>
                            <figure class="flex justify-center w-14 h-14">
                                <button class="bg-[#1F509A] rounded-full w-full focus:border-2 focus:border-white" id="lw">+</button>
                            </figure>
                    </div>
                </div>

                <!-- ST  -->
                <div class="flex relative bottom-36 justify-center w-full">
                            <figure class="flex justify-center w-14 h-14">
                                <button class="bg-[#1F509A] rounded-full w-full focus:border-2 focus:border-white" id="st">+</button>
                            </figure>
                </div>

                <!-- CM-LEFT AND CM-RIGHT -->
                <div class="relative bottom-[350px] w-full flex justify-center">
                    <div class="flex justify-between w-1/2">
                            <figure class="flex justify-center w-14 h-14">
                                <button class="bg-[#FFBD39] rounded-full w-full focus:border-2 focus:border-white" id="cmr">+</button> 
                           </figure>
                            <figure class="flex justify-center w-14 h-14">
                                <button class="bg-[#FFBD39] rounded-full w-full focus:border-2 focus:border-white" id="cml">+</button>
                            </figure>
                    </div>
                </div>

                <!-- CM-TOP -->
                <div class="flex absolute top-[350px] justify-center w-full">
                    <figure class="flex justify-center w-14 h-14">
                        <button class="bg-[#FFBD39] rounded-full w-full focus:border-2 focus:border-white" id="cmt">+</button>
                    </figure>
                </div>

                <!-- LB ANB RB -->
                <div class="absolute top-[230px] w-full flex justify-center">
                    <div class="flex justify-between w-[70%]">
                            <figure class="flex justify-center w-14 h-14">
                                <button class="bg-[#EB5353] rounded-full w-full focus:border-2 focus:border-white" id="rb">+</button>
                            </figure>
                            <figure class="flex justify-center w-14 h-14">
                                <button class="bg-[#EB5353] rounded-full w-full focus:border-2 focus:border-white" id="lb">+</button>
                            </figure>
                    </div>
                </div>

                <!-- CB's -->
                <div class="absolute top-28 w-full flex justify-center">
                    <div class="flex justify-between w-[55%]">
                            <figure class="flex justify-center w-14 h-14">
                                <button class="bg-[#EB5353] rounded-full w-full focus:border-2 focus:border-white" id="cbr">+</button>
                            </figure>
                            <figure class="flex justify-center w-14 h-14">
                                <button class="bg-[#EB5353] rounded-full w-full focus:border-2 focus:border-white" id="cbl">+</button>
                            </figure>
                    </div>
                </div>

                <!-- GK -->
                <div class="flex absolute top-10 justify-center w-full">
                    <figure class="flex justify-center w-14 h-14">
                        <button class="bg-[#33372C] rounded-full w-full focus:border-2 focus:border-white" id="gk">+</button>
                        <button class="bg-[#33372C] rounded-full w-full focus:border-2 hidden" id="gkajoute"></button>
                    </figure>
                </div>

                <!-- Adding terrain form -->
                <section class="w-full h-[60%] bg-white rounded-xl absolute top-44 p-3 hidden" id="sec3">    
                    <div class=" w-full pb-5 flex">
                        <div class="flex gap-2 flex-wrap justify-center" id="form-pop">
                            
                        </div>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" id="close-form-show">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                </section>

                <section class="w-full h-screen bg-gray-200 rounded-xl absolute top-2 p-3 flex items-center hidden" id="sec4">    
                    <div class=" w-full pb-5">
                        <p>Where do you want to place this player </p>
                        <select id="positionselect" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                            <option selected=" "></option>
                            <option value="GK">GK</option>
                            <option value="RW">RW</option>
                            <option value="LW">LW</option>
                            <option value="RB">RB</option>
                            <option value="LB">LB</option>
                            <option value="ST">ST</option>
                            <option value="CM">CM</option>
                            <option value="CB">CB</option>
                            <option value="CDM">CDM</option>
                        </select>
                    </div>
                </section>
                
            </div>
            
        </section>

        <!-- player cards -->
        <section class="w-1/3 h-screen" id="sec2">    
            <div class=" w-full pb-5">
                <div class="font-medium text-center py-3 flex justify-between">
                    <h1 class="text-2xl ml-6 py-1 px-4">Players</h1>
                    <button class="mr-6 py-1 px-4 bg-orange-300 rounded" id="add-player">+ Add</button>
                </div>
                <div class="flex gap-2 flex-wrap justify-center" id="displayAddingPlayers">
                    
                </div>
                <div class="flex gap-2 flex-wrap justify-center" id="dis-ply">
                    
                </div>
            </div>
        </section>

        <!-- Adding form -->
        <section class="hidden absolute top-20 w-full h-screen flex items-center justify-center" id="card-ajoute">
            <div>
                <div class="bg-white rounded-lg shadow">
                    <div class="flex items-center justify-between p-4 border-b rounded-t ">
                        <p>New Player</p>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" id="close-button">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <div>
                        <form class="p-4" method="get">
                            <div>
                                <div class="pb-5">
                                    <label for="player-picture" class="block mb-2 text-sm font-medium text-gray-900">Player Picture</label>
                                    <input type="file" name="player-picture" id="player-picture" class="bg-gray-50 text-gray-900 text-sm block w-full">
                                </div>
                                <div class="pb-5">
                                    <label for="country-flag" class="block mb-2 text-sm font-medium text-gray-900">Country Flag</label>
                                    <input type="file" name="country-flag" id="country-flag" class="bg-gray-50 text-gray-900 text-sm block w-full">
                                </div>
                            </div>
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Type Player Full Name">
                            </div>
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Prename</label>
                                <input type="text" name="prename" id="prename" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Type Player Full Name">
                            </div>
                            <div>
                                <label for="rating" class="block mb-2 text-sm font-medium text-gray-900">Rating</label>
                                <input type="number" name="rating" id="rating" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Type Player rate" >
                            </div>
                            <div>
                                <label for="position" class="block mb-2 text-sm font-medium text-gray-900">Position</label>
                                <select id="position" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                    <option selected=" "></option>
                                    <option value="GK">GK</option>
                                    <option value="RW">RW</option>
                                    <option value="LW">LW</option>
                                    <option value="RB">RB</option>
                                    <option value="LB">LB</option>
                                    <option value="ST">ST</option>
                                    <option value="CM">CM</option>
                                    <option value="CB">CB</option>
                                    <option value="CDM">CDM</option>
                                </select>
                            </div>
                            <div class="flex flex-wrap gap-2 w-full justify-center p-4">
                                <div class="w-24">
                                    <label for="pace" class="block mb-2 text-sm font-medium text-gray-900 flex justify-center">pace</label>
                                    <input type="number" name="pace" id="pace" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" >
                                </div>
                                <div class="w-24">
                                    <label for="shooting" class="block mb-2 text-sm font-medium text-gray-900 flex justify-center">shooting</label>
                                    <input type="number" name="shooting" id="shooting" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" >
                                </div>
                                <div class="w-24">
                                    <label for="passing" class="block mb-2 text-sm font-medium text-gray-900 flex justify-center">passing</label>
                                    <input type="number" name="passing" id="passing" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" >
                                </div>
                                <div class="w-24">
                                    <label for="dribbling" class="block mb-2 text-sm font-medium text-gray-900 flex justify-center">dribbling</label>
                                    <input type="number" name="dribbling" id="dribbling" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" >
                                </div>
                                <div class="w-24">
                                    <label for="defending" class="block mb-2 text-sm font-medium text-gray-900 flex justify-center">defending</label>
                                    <input type="number" name="defending" id="defending" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" >
                                </div>
                                <div class="w-24">
                                    <label for="physical" class="block mb-2 text-sm font-medium text-gray-900 flex justify-center">physical</label>
                                    <input type="number" name="physical" id="physical" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" >
                                </div>
                            </div>
                            <div class="flex w-full justify-center pt-4 gap-2">
                                <input type="submit" name="submit" value="+add player" class="text-white inline-flex items-center bg-[#38003d] font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                <!-- <button id="playerAdding" type="button"class="text-white inline-flex items-center bg-[#38003d] font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                    Add Player
                                </button> -->
                                <button id="playerAdding" type="reset"class="text-white inline-flex items-center bg-[#38003d] font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    reset
                                </button>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
            
        </section>
        <?php
              include("./connection.php");

            
              
              if(isset($_GET["submit"])){
                $identifier = mysqli_num_rows(mysqli_query($link, "SELECT id FROM Player")) + 1;
                $name = $_GET["name"];
                $prename = $_GET["prename"];
                $rating = $_GET["rating"];
                $sql = "INSERT INTO player(id, nom, prenom, rating) VALUES ($identifier, '$name', '$prename', $rating)";

                mysqli_query($link, $sql);

            }
        ?>

        
     </main>

     <!-- Footer -->
     <?php
     include ("footer.php");
     ?>


     <script src="../src/javascript/script.js"></script>
</body>
</html>