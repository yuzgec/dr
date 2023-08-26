<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Form;
use App\Models\Page;
use App\Models\Price;
use App\Models\Reference;
use App\Models\Service;
use App\Models\Video;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index(){
        SEOMeta::setTitle('Dr. Turan Çetin');
        SEOMeta::setDescription('Dr. Turan Çetin');
        SEOMeta::setCanonical(url()->full());

        return view('frontend.index');

    }

    public function contact(){
        return view('frontend.contact');
    }

    public function servicedetail($url){
        $Detail = Service::where('slug', $url)->firstOrFail();
        return view('frontend.service.detail', compact('Detail'));
    }

    public function service(){
        return view('frontend.service.index');
    }


    public function blogdetail($url){
        $Detail = Blog::where('slug', $url)->firstOrFail();
        return view('frontend.blog.detail', compact('Detail'));
    }


    public function corporatedetail($url){
        $Detail = Page::where('slug', $url)->firstOrFail();
        return view('frontend.page.detail', compact('Detail'));
    }


    public function blog(){
        return view('frontend.blog.index');
    }

    public function video(){
        $Video = Video::all();
        return view('frontend.video.index', compact('Video'));
    }

}
