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

                                @foreach ($reviews as $review)

                        <div class="flex flex-col gap-10">
                            <!-- ====== Table Three Start -->
                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-12 md:px-6 2xl:px-7.5">
                                    <div class="col-span-1 flex items-center">
                                        <p class="font-medium">{{ $review['id'] }}</p>
                                    </div>
                                    <div class="w-12 gap-4 col-span-3 flex items-center">
                                        <img src="src/images/movie/{{ $review['poster'] }}" alt="Product" />
                                        <p class="font-medium">{{ $review['title'] }}</p>
                                    </div>
                                    <div class="col-span-2 items-center sm:flex">
                                        <p class="font-medium">{{ $review['name'] }}</p>
                                    </div>
                                    <div class="col-span-5 flex items-center">
                                        <p class="font-medium">{{ $review['rate'] }}</p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <p class="font-medium">{{ $review['date'] }}</p>
                                    </div>
                                </div>

                                @endforeach

                        </div>
                        <!-- ====== Table Section End -->
                    </div>
                </main>
@endsection
