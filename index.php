<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/css/output.css" rel="stylesheet">
    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
</head>

<body class="bg-[#BCBEC2]">
    <!-- container grid -->
    <div class="grid grid-cols-12 gap-4 ">
        <!-- sidebar -->
        <div class="col-span-2 bg-[#1A1C1E] h-screen  p-4 sticky top-0">
            <div class="bg-neutral-200 rounded-lg p-2 flex items-center gap-2 font-bold"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                Helth</div>
            <div class="w-full h-px bg-neutral-200 mt-8 my-2"><span class=""></span></div>

            <div class="bg-neutral-200 hover:bg-slate-600 hover:text-white transition duration-300 rounded-lg p-2 flex items-center gap-2 font-bold my-4"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                <a href="index.php">HOME</a>
            </div>

            <div class="bg-neutral-200 hover:bg-slate-600 hover:text-white transition duration-300 rounded-lg p-2 flex items-center gap-2 font-bold my-4"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>

                <a href="user.php">USER</a>
            </div>

            <div class="bg-neutral-200 hover:bg-slate-600 hover:text-white transition duration-300 rounded-lg p-2 flex items-center gap-2 font-bold my-4"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

                <a href="riwayat.php">RIWAYAT</a>
            </div>

            <div class=" mt-96 w-full">
                <div class="w-full h-px bg-neutral-200  mt-8 mb-2"><span class=""></span></div>
                <div class="bg-neutral-200 rounded hover:bg-slate-600 hover:text-white transition duration-300 p-2 font-bold"><a href="#">Log Out</a></div>
            </div>



        </div>
        <!-- end sidebar -->
        <!-- Menu -->
        <div class="col-span-10 h-auto p-4 mr-4 mt-4">
            <div class="grid grid-cols-12 bg-[#FFFFFF] rounded-lg shadow-lg p-4 my-2">
                <p class="text-2xl font-semibold">Home</p>
            </div>

            <!-- <div class="grid grid-cols-12 bg-neutral-700 rounded-lg shadow-lg p-4">
                <p class="bg-blue-300 rounded col-span-12 text-white text-2xl">Homesadasdasduser lololol hai kontol</p>
            </div> -->
            <div class="bg-[#FFFFFF] h-screen rounded-lg shadow-lg p-3">
                <div class="grid grid-cols-12 my-10 mb-10 ">

                    <p class="bg-slate-600 text-slate-200  hover:bg-slate-200 hover:text-slate-600 transition duration-300 rounded col-end-13 col-span-2 flex items-center justify-center text-2xl py-2 px-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <a href="user.php">Add User</a>
                    </p>
                </div>

                <div class="grid grid-cols-4 gap-3">
                    <!-- card 1 -->
                    <div class="grid grid-cols-2 bg-neutral-900 text-white p-3 rounded my-2 h-32">
                        <div class=" rounded flex items-center font-bold text-lg">
                            <p>ID Card</p>

                        </div>
                        <div class=" rounded flex justify-end items-center pr-4"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>
                        </div>
                        <div class="col-span-full text-sm mt-6">Tjokroda Ge Yuda Prathama Pudakk</div>
                    </div>
                    <!-- end of card 1-->
                    <!-- card 2 -->
                    <div class="grid grid-cols-2 bg-neutral-900 text-white p-3 rounded my-2 h-32">
                        <div class=" rounded flex items-center font-bold text-lg">
                            <p>Suhu</p>

                        </div>
                        <div class=" rounded flex justify-end items-center pr-4"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>
                        </div>
                        <div class="col-span-full text-sm mt-6">Tjokroda Ge Yuda Prathama Pudakk</div>
                    </div>
                    <!-- end of card 2-->
                    <!-- card 3 -->
                    <div class="grid grid-cols-2 bg-neutral-900 text-white p-3 rounded my-2 h-32">
                        <div class=" rounded flex items-center font-bold text-lg">
                            <p>Berat Badan</p>

                        </div>
                        <div class=" rounded flex justify-end items-center pr-4"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>
                        </div>
                        <div class="col-span-full text-sm mt-6">Tjokroda Ge Yuda Prathama Pudakk</div>
                    </div>
                    <!-- end of card 3-->
                    <!-- card 4 -->
                    <div class="grid grid-cols-2 bg-neutral-900 text-white p-3 rounded my-2 h-32">
                        <div class=" rounded flex items-center font-bold text-lg">
                            <p>Tinggi</p>

                        </div>
                        <div class=" rounded flex justify-end items-center pr-4"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>
                        </div>
                        <div class="col-span-full text-sm mt-6">Tjokroda Ge Yuda Prathama Pudakk</div>
                    </div>
                    <!-- end of card 4-->
                </div>
            </div>

            <!-- <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p>
            <p>Home</p> -->
        </div>


        <!-- end Menu -->
    </div>
    <!-- end container grid -->


</body>

</html>