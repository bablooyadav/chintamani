<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Career;
use App\Models\Yourachievements;
use App\Models\ContactUs;
use App\Models\Aboutus;

use Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $financial = Yourachievements::where('status', 1)->get();
        $compdata = Yourachievements::where('status', 2)->get();
        $whychoose = Yourachievements::where('status', 3)->get();
        $become = Yourachievements::where('status', 4)->first();
        $support = Yourachievements::where('status', 5)->first();
        $complete = Yourachievements::where('status', 6)->first();
        $getfreescore = Yourachievements::where('status', 7)->first();
        $faqdata = Yourachievements::where('status', 8)->get();
        $blogs = Career::where('status', 2)->get();
        return view('frontend.index', compact('financial', 'complete', 'whychoose', 'support', 'getfreescore','compdata','faqdata','become','blogs'));
    }

    public function aboutus()
    {
        $about = Aboutus::first();
        return view('frontend.about-us',compact('about'));
    }
    public function whychooseus()
    {
        $whychooseus = Yourachievements::where('status', 9)->get();
        return view('frontend.why-choose-us',compact('whychooseus'));
    }

    public function contactus()
    {
        $complete = ContactUs::first();
        return view('frontend.contact-us',compact('complete'));
    }

    public function blog()
    {
        $blogs = Career::where('status', 2)->get();
        return view('frontend.blog',compact('blogs'));
    }

    public function blogdetails($id)
    {
        $ids = decrypt($id);
        $blogdetails = Career::where('id', $ids)->first();
        return view('frontend.blogdetails',compact('blogdetails'));
    }

    public function insurancedetails($id)
    {
        $ids = decrypt($id);
        $insurancedetails = Career::where('id', $ids)->first();
        return view('frontend.insurancedetails',compact('insurancedetails'));
    }

    public function insurance()
    {
        $complete = Career::where('status', 3)->get();
        return view('frontend.insurance',compact('complete'));
    }
    public function careers()
    {
        $careers = Career::where('status',1)->get();
        return view('frontend.careers',compact('careers'));
    }
}
