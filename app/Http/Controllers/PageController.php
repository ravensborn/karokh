<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function tutorials() {
        return view('pages.tutorials');
    }
    public function pricing() {
        return view('pages.pricing');
    }
    public function resources() {
        return view('pages.resources');
    }

    public function blog() {
        return view('pages.blog');
    }

    public function gallery() {
        return view('pages.gallery');
    }

    public function contact_us()
    {
        return view('pages.contact-us');
    }

    public function privacy_policy()
    {
        return view('pages.privacy-and-policy');
    }

    public function user_data_deletion()
    {
        return view('pages.user-data-deletion');
    }
}
