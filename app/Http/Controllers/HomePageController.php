<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomePageController extends Controller
{
    public function home(){
        $today_picks = Http::get('http://localhost:8000/today-picks');
        if ($today_picks->successful()) {
            $data_today = $today_picks->json();
        } else {
            $errorMessage = $today_picks->status() . ' ' . $today_picks->statusText();
            return $errorMessage;
        }

        $user_choices = Http::get('http://localhost:8000/user-choices');
        if ($user_choices->successful()) {
            $data_user = $user_choices->json();
        } else {
            $errorMessage = $user_choices->status() . ' ' . $user_choices->statusText();
            return $errorMessage;
        }

        $title = Http::get('http://localhost:8000/books');
        if ($user_choices->successful()) {
            $book_title = $user_choices->json();
        } else {
            $errorMessage = $user_choices->status() . ' ' . $user_choices->statusText();
            return $errorMessage;
        }

        return view('home', compact('data_today', 'data_user', 'book_title'));
    }

    public function detail($isbn, $judul){
        $data = Http::get("http://localhost:8000/details/{$isbn}");
        if ($data->successful()) {
            $data_detail = $data->json();
        } else {
            $errorMessage = $data->status() . ' ' . $data->statusText();
            return $errorMessage;
        }

        $response = Http::get("http://localhost:8000/recommendations/{$judul}");
        if ($response->successful()) {
            $rec = $response->json();
        } else {
            $errorMessage = $response->status() . ' ' . $response->statusText();
            return $errorMessage;
        }

        return view('detail', compact('data_detail', 'rec'));
    }

}
