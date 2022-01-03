<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function aboutpage()
    {
        return view('about');
    }

    public function gallerypage()
    {
        return view('gallery');
    }

    public function faqspage()
    {
        return view('faqs');
    }

    public function fellowshipspage()
    {
        return view('fellowships');
    }

    public function fellowdetailspage()
    {
        return view('fellowship-details');
    }

    public function contactspage()
    {
        return view('contacts');
    }

    public function servicepage()
    {
        return view('service-single');
    }

}
