@extends('_layouts.main')

@section('content')
<main>
                    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                        <!-- Breadcrumb Start -->
                        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                            Review Data
                            </h2>

                            <nav>
                                <a
                                    href="/movies/create"
                                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                                >
                                    Create
                                </a>
                            </nav>
                        </div>
                        <!-- Breadcrumb End -->

                        <!-- ====== Table Section Start -->
                        
                        <div class="flex flex-col gap-10">
                            <!-- ====== Table Three Start -->
                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-12 md:px-6 2xl:px-7.5">
                                    <div class="col-span-1 flex items-center">
                                        <p class="font-medium">Id</p>
                                    </div>
                                    <div class="col-span-3 flex items-center">
                                        <p class="font-medium">Anime Name</p>
                                    </div>
                                    <div class="col-span-2 items-center sm:flex">
                                        <p class="font-medium">User Name</p>
                                    </div>
                                    <div class="col-span-5 flex items-center">
                                        <p class="font-medium">Rating Comment</p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <p class="font-medium">Date
                                    </div>
                                </div>

                        <div class="flex flex-col gap-10">
                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-12 md:px-6 2xl:px-7.5">
                                    <div class="col-span-1 flex items-center">
                                        <p class="text-sm font-medium text-black dark:text-white">1.</p>
                                    </div>
                                    <div class="col-span-3 gap-4 flex items-center">
                                    <img class="w-12" src="src/images/movie/movie-07.jpeg" alt="Product" />
                                        <p class="text-sm font-medium text-black dark:text-white">Haikyu!!</p>
                                    </div>
                                    <div class="col-span-2 items-center sm:flex">
                                        <p class="text-sm font-medium text-black dark:text-white">Adinda Alfianti</p>
                                    </div>
                                    <div class="col-span-5 flex items-center">
                                        <p class="text-sm font-medium text-black dark:text-white">"5 Star for HAIKYU!! it's a dynamic anime series <br> that follows Shoyo Hinata's journey in high school volleyball. With its thrilling sports action, compelling character development, and themes of teamwork <br> and perseverance, it's a must-watch for anime <br> and sports fans alike."
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                    <p class="text-sm font-medium text-black dark:text-white">
                                        02/07/23 <br> 09:45 AM
                                        </p>
                                    </div>
                                </div>

                        <div class="flex flex-col gap-10">
                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-12 md:px-6 2xl:px-7.5">
                                    <div class="col-span-1 flex items-center">
                                        <p class="text-sm font-medium text-black dark:text-white">2.</p>
                                    </div>
                                    <div class="col-span-3 gap-4 flex items-center">
                                    <img class="w-12" src="src/images/movie/movie-08.jpeg" alt="Product" />
                                        <p class="text-sm font-medium text-black dark:text-white">Detective Conan</p>
                                    </div>
                                    <div class="col-span-2 items-center sm:flex">
                                        <p class="text-sm font-medium text-black dark:text-white">Dodod Nerra Alhea</p>
                                    </div>
                                    <div class="col-span-5 flex items-center">
                                    <p class="text-sm font-medium text-black dark:text-white">
                                        "Best anime ever!! Highly recommend it 💕✨ <br> It is funny, full of mystery, while some episodes <br> has action and adventure. A must-see series for <br> any anime or mystery fan. And even the comedy <br> makes it worth while for those of you that don't <br> care much about both categories."
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                    <p class="text-sm font-medium text-black dark:text-white">
                                        09/04/23 <br> 07:30 AM
                                        </p>
                                    </div>
                                </div>

                        <div class="flex flex-col gap-10">
                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-12 md:px-6 2xl:px-7.5">
                                    <div class="col-span-1 flex items-center">
                                        <p class="text-sm font-medium text-black dark:text-white">3.</p>
                                    </div>
                                    <div class="col-span-3 gap-4 flex items-center">
                                    <img class="w-12" src="src/images/movie/movie-09.jpeg" alt="Product" />
                                        <p class="text-sm font-medium text-black dark:text-white">My hero Academia</p>
                                    </div>
                                    <div class="col-span-2 items-center sm:flex">
                                        <p class="text-sm font-medium text-black dark:text-white">Nathania Wibowo</p>
                                    </div>
                                    <div class="col-span-5 flex items-center">
                                    <p class="text-sm font-medium text-black dark:text-white">
                                    "10 out of 10, This Movie delivers an electrifying <br> extension of the beloved anime series. Set in a <br> world where superpowers, or quirks, are the norm, <br> the film follows young hero-in-training, Izuku <br> Midoriya, and his classmates on a thrilling adventure. Packed with intense action sequences, heartfelt <br> moments, and stunning animation, it's a must-watch <br> for fans of the series."</p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                    <p class="text-sm font-medium text-black dark:text-white">
                                        17/06/21 <br> 10:12 PM
                                        </p>
                                    </div>
                                </div>
                        </div>
                        <!-- ====== Table Section End -->
                    </div>
                </main>
@endsection