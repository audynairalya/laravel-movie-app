@extends('_layouts.main')

@section('content')
<main>
                    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                        <!-- Breadcrumb Start -->
                        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                            Genre Data
                            </h2>

                            <nav>
                                <a
                                    href="/genres/create"
                                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                                >
                                    Create
                                </a>
                            </nav>
                        </div>
                        <!-- Breadcrumb End -->

                        <!-- ====== Table Section Start -->
                        <div class="flex flex-col gap-10">
                            <!-- ====== Table Two Start -->
                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                <div class="col-span-1 flex items-center">
                                        <p class="font-medium">Id</p>
                                    </div>
                                    <div class="col-span-3 flex items-center">
                                        <p class="font-medium">Anime Name</p>
                                    </div>
                                    <div class="col-span-1 items-center sm:flex">
                                        <p class="font-medium">Genre</p>
                                    </div>
                                    <div class="col-span-3 flex items-center">
                                        <p class="font-medium">Description</p>
                                    </div>
                                </div>
                        
                                <div class="flex flex-col gap-10">
                                    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                    <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                    <div class="col-span-1 flex items-center">
                                            <p class="text-sm font-medium text-black dark:text-white">1.</p>
                                        </div>
                                        <div class="w-12 gap-4 col-span-3 flex items-center">
                                        <img src="src/images/movie/movie-04.jpeg" alt="Product" />
                                            <p class="text-sm font-medium text-black dark:text-white">Naruto Shipudden</p>
                                        </div>
                                        <div class="col-span-1 items-center sm:flex">
                                            <p class="text-sm font-medium text-black dark:text-white">Action/Adventure/Fantasy</p>
                                        </div>
                                        <div class="col-span-3 flex items-center">
                                            <p class="text-sm font-medium text-black dark:text-white">Action-adventure fantasy blends thrilling action with fantastical elements, featuring daring heroes in epic quests against dark forces in imaginative worlds.
                                        </p>
                                        </div>
                                </div>

                                <div class="flex flex-col gap-10">
                                    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                    <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                    <div class="col-span-1 flex items-center">
                                            <p class="text-sm font-medium text-black dark:text-white">2.</p>
                                        </div>
                                        <div class="w-12 gap-4 col-span-3 flex items-center">
                                        <img src="src/images/movie/movie-05.jpeg" alt="Product" />
                                            <p class="text-sm font-medium text-black dark:text-white">Tokyo Ghoul</p>
                                        </div>
                                        <div class="col-span-1 items-center sm:flex">
                                            <p class="text-sm font-medium text-black dark:text-white">Dark Fantasy</p>
                                        </div>
                                        <div class="col-span-3 flex items-center">
                                            <p class="text-sm font-medium text-black dark:text-white">Dark fantasy genre combines fantastical elements with grim, often macabre themes, exploring the darker aspects of human nature and society within supernatural settings.
                                        </p>
                                        </div>
                                </div>

                                <div class="flex flex-col gap-10">
                                    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                    <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                    <div class="col-span-1 flex items-center">
                                            <p class="text-sm font-medium text-black dark:text-white">3.</p>
                                        </div>
                                        <div class="w-12 gap-4 col-span-3 flex items-center">
                                        <img src="src/images/movie/movie-06.jpeg" alt="Product" />
                                            <p class="text-sm font-medium text-black dark:text-white">Jujutsu Kaisen</p>
                                        </div>
                                        <div class="col-span-1 items-center sm:flex">
                                            <p class="text-sm font-medium text-black dark:text-white">Adventure/<br>Dark Fantasy/Supernatural</p>
                                        </div>
                                        <div class="col-span-3 flex items-center">
                                            <p class="text-sm font-medium text-black dark:text-white">This genre fuses thrilling adventures with dark and supernatural elements, blending fantastical settings with sinister themes and supernatural occurrences.
                                        </p>
                                        </div>
                                </div>
                            <!-- ====== Table Two End -->
                        </div>
                        <!-- ====== Table Section End -->
                    </div>
                </main>
@endsection