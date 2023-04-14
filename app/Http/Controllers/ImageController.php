<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $images = [
            'head' => [
                ''
            ],
            'shirt' => [
                'Shirts/skinnyshirt_black.png',
                'Shirts/skinnyshirt_white.png',
                'Shirts/skinnyshirt_black_breasts.png',
                'Shirts/skinnyshirt_white_breasts.png',

                'Shirts/curvyshirt_black.png',
                'Shirts/curvyshirt_white.png',
                'Shirts/curvyshirt_black_breasts.png',
                'Shirts/curvyshirt_white_breasts.png',


                'Shirts/chubbyshirt_black.png',
                'Shirts/chubbyshirt_white.png',
                'Shirts/chubbyshirt_black_breasts.png',
                'Shirts/chubbyshirt_white_breasts.png',

                'Shirts/mascshirt_black.png',
                'Shirts/mascshirt_white.png',
                'Shirts/mascshirt_black_breasts.png',
                'Shirts/mascshirt_white_breasts.png',
            ],
            'pants' => [
                'curvy/shit_black.png',
                'curvy/shirt_black.png'
            ],

        ];

        return view('images.index', compact('images'));
    }
}
