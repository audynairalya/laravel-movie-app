<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Movie;
use App\Http\Controllers;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();

        return view('reviews/index', compact('reviews'));
    }

        public function create()
    {
        $movies = Movie::all();
        return view('reviews.create', compact('movies'));
    }

        public function store(Request $request)
    {
        $validatedData = $request->validate([
            'movie_id' => 'required',
            'user' => 'required',
            'rating' => 'required',
            'date' => 'required',
        ]);

        Review::create($validatedData);

        return redirect('/reviews')->with('success', 'Review added successfully!');
    }

<<<<<<< HEAD
    public function edit(review $review)
    {
        $movies = Movie::all();
        return view('reviews.edit', compact('movies', 'review'));
    }

        public function update(Request $request, Review $review)
    {
        $validatedData = $request->validate([
            'movie_id' => 'required',
            'user' => 'required',
            'rating' => 'required',
            'date' => 'required',
        ]);

        $review->update($validatedData);

        return redirect('/reviews')->with('success', 'Review updated successfully!');
    }

=======
>>>>>>> 18230d6573fa50d6e2a0713b6e8beb45cd8c3410
        public function destroy(Review $review)
    {
        $review->delete();
        return redirect('/reviews')->with('success', 'Review deleted successfully!');
    }
}
