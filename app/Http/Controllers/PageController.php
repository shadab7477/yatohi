<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display Home Page 01.
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Display Home Page 02.
     */
    public function home2()
    {
        return view('pages.home2');
    }

    /**
     * Display About Us page.
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Display Services Grid.
     */
    public function services()
    {
        return view('pages.services');
    }

    /**
     * Display Service Details.
     */
    public function serviceDetails()
    {
        return view('pages.service-details');
    }

    /**
     * Display Pricing Plans.
     */
    public function pricing()
    {
        return view('pages.pricing');
    }

    /**
     * Display Testimonials.
     */
    public function testimonials()
    {
        return view('pages.testimonials');
    }

    /**
     * Display Team Grid.
     */
    public function team()
    {
        return view('pages.team');
    }

    /**
     * Display Team Member Details.
     */
    public function teamDetails()
    {
        return view('pages.team-details');
    }

    /**
     * Display FAQ.
     */
    public function faq()
    {
        return view('pages.faq');
    }

    /**
     * Display Projects / Gallery.
     */
    public function projects()
    {
        return view('pages.projects');
    }

    /**
     * Display Project Details.
     */
    public function projectDetails()
    {
        return view('pages.project-details');
    }

    /**
     * Display Blog / News Grid.
     */
    public function blog()
    {
        return view('pages.blog');
    }

    /**
     * Display Blog Post Details.
     */
    public function blogDetails()
    {
        return view('pages.blog-details');
    }

    /**
     * Display Shop Products Grid.
     */
    public function shop()
    {
        return view('pages.shop');
    }

    /**
     * Display Shop Products with Sidebar.
     */
    public function shopSidebar()
    {
        return view('pages.shop-sidebar');
    }

    /**
     * Display Product Details.
     */
    public function shopDetails()
    {
        return view('pages.shop-details');
    }

    /**
     * Display Shopping Cart.
     */
    public function cart()
    {
        return view('pages.cart');
    }

    /**
     * Display Checkout page.
     */
    public function checkout()
    {
        return view('pages.checkout');
    }

    /**
     * Display Contact Us page.
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Display 404 Error page.
     */
    public function error404()
    {
        return view('pages.404');
    }
}

