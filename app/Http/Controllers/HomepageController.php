<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function show(){
        $indonesia_beragama = Article::where('category', 'indonesia_beragama')->latest('id')->get();
        $sadar_budaya = Article::where('category', 'sadar_budaya')->latest('id')->get();
        $implementasi = Article::where('category', 'implementasi')->latest('id')->get();
        $urgensi = Article::where('category', 'urgensi')->latest('id')->get();
        $ragam_tradisi = Article::where('category', 'ragam_tradisi')->latest('id')->get();
        return view('homepage', [
            'indonesia_beragama' => $indonesia_beragama,
            'sadar_budaya' => $sadar_budaya,
            'implementasi' => $implementasi,
            'urgensi' => $urgensi,
            'ragam_tradisi' => $ragam_tradisi,
        ]);
    }
}
