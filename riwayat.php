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
                <p class="text-2xl font-semibold">RIWAYAT</p>
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

                <div class="grid grid-cols-12">
                    <div class="col-span-full">
                        <p class=" text-xl font-bold">RIWAYAT</p>
                    </div>
                    <!-- line divider -->
                    <div class=" col-span-full h-px bg-neutral-900 mb-10"></div>
                    <!-- end line divider -->

                    <table class="col-span-full text-left font-light">

                        <thead class="border-b-2 border-neutral-900">
                            <tr>
                                <th>ID</th>
                                <th>Suhu</th>
                                <th>Berat</th>
                                <th>Tinggi</th>
                                <th>Waktu Scan</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>0100</th>
                                <th>40c</th>
                                <th>50kg</th>
                                <th>190 cm</th>
                                <th>21:35 P.M</th>

                            </tr>


                        </tbody>

                    </table>

                </div>
            </div>


        </div>


        <!-- end Menu -->
    </div>
    <!-- end container grid -->


</body>

</html>