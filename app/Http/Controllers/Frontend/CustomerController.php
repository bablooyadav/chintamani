<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Career;
use App\Models\Yourachievements;
use App\Models\ContactUs;

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

        return view('frontend.about-us');
    }
    public function whychooseus()
    {

        return view('frontend.why-choose-us');
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

    public function insurance()
    {
        $complete = Career::where('status', 3)->get();
        return view('frontend.insurance',compact('complete'));
    }
    public function career()
    {

        return view('frontend.career');
    }
}
