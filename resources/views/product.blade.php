@extends('_layouts.main')

@section('content')
<main>
                    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                        <h2 class="mb-7.5 mt-10 text-title-md2 font-bold text-black dark:text-white">
                            Movie List
                        </h2>

                        <div class="grid grid-cols-1 gap-7.5 sm:grid-cols-2 xl:grid-cols-4">
<<<<<<< HEAD
<<<<<<< HEAD

                            @foreach ($movies as $movie)
                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <a href="#" class="block px-4 pt-4">
                                    <img class="object-cover h-60 w-96" src="src/images/movie/{{ $movie->poster }}" alt="Movies" />
=======
                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <a href="#" class="block px-4 pt-4">
                                    <img class="object-cover h-60 w-96" src="src/images/movie/movie-01.jpeg" alt="Movies" />
>>>>>>> 18230d6573fa50d6e2a0713b6e8beb45cd8c3410
=======
                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <a href="#" class="block px-4 pt-4">
                                    <img class="object-cover h-60 w-96" src="src/images/movie/movie-01.jpeg" alt="Movies" />
>>>>>>> 18230d6573fa50d6e2a0713b6e8beb45cd8c3410
                                </a>

                                <div class="p-6 overflow-hidden">
                                    <h4 class="mb-3 text-xl font-semibold text-black dark:text-white">
<<<<<<< HEAD
<<<<<<< HEAD
                                        <a href="#">{{ $movie->title }}</a>
                                    </h4>
                                    <p class="font-medium">
                                    {{ $movie->synopsis }}
                                    </p>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </main>
@endsection
=======
=======
>>>>>>> 18230d6573fa50d6e2a0713b6e8beb45cd8c3410
                                        <a href="#">Dragon Ball Z</a>
                                    </h4>
                                    <p class="font-medium">
                                    Dragon Ball tells the story of a boy named Goku who lives in the middle of a mountain alone. He then meets Bulma, a genius young girl, who is trying to collect 7 magic balls which are said to be able to grant all wishes. These balls are called Dragon Ball.
                                    </p>
                                </div>
                            </div>

                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <a href="#" class="block px-4 pt-4">
                                    <img class="object-cover h-60 w-96" src="src/images/movie/movie-02.jpeg" alt="Cards" />
                                </a>

                                <div class="p-6 overflow-hidden">
                                    <h4 class="mb-3 text-xl font-semibold text-black dark:text-white">
                                        <a href="#">One Piece</a>
                                    </h4>
                                    <p class="font-medium">
                                    One Piece is a renowned Japanese manga series created by Eiichiro Oda. It follows the adventures of Monkey D. Luffy, a young and ambitious pirate whose ultimate goal is to find the legendary One Piece treasure.
                                    </p>
                                </div>
                            </div>

                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <a href="#" class="block px-4 pt-4">
                                    <img class="object-cover h-60 w-96" src="src/images/movie/movie-03.jpeg" alt="Cards" />
                                </a>

                                <div class="p-6 overflow-hidden">
                                    <h4 class="mb-3 text-xl font-semibold text-black dark:text-white">
                                        <a href="#">Demon Slayer</a>
                                    </h4>
                                    <p class="font-medium">
                                    Demon Slayer (Kimetsu no Yaiba) is a popular Japanese manga and anime series created by Koyoharu Gotouge. It tells the story of Tanjiro Kamado, a kind-hearted boy who becomes a demon slayer after his family is slaughtered by demons.
                                    </p>
                                </div>
                            </div>

                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <a href="#" class="block px-4 pt-4">
                                    <img class="object-cover h-60 w-96" src="src/images/movie/movie-04.jpeg" alt="Cards" />
                                </a>

                                <div class="p-6 overflow-hidden">
                                    <h4 class="mb-3 text-xl font-semibold text-black dark:text-white">
                                        <a href="#">Naruto Shippuden</a>
                                    </h4>
                                    <p class="font-medium">
                                    Naruto Shippuden is the sequel to the original Naruto series, continuing the journey of Naruto Uzumaki as he grows older and stronger on his quest to become the greatest ninja and leader of his village, the Hokage
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<<<<<<< HEAD
@endsection
>>>>>>> 18230d6573fa50d6e2a0713b6e8beb45cd8c3410
=======
@endsection
>>>>>>> 18230d6573fa50d6e2a0713b6e8beb45cd8c3410
