<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Slider;
use App\Models\Yourachievements;

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
        $whychoose = Yourachievements::where('status', 3)->get();
        $complete = Yourachievements::where('status', 6)->first();
        $support = Yourachievements::where('status', 5)->first();
        $getfreescore = Yourachievements::where('status', 7)->first();
        return view('frontend.index', compact('financial', 'complete', 'whychoose', 'support', 'getfreescore'));
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

        return view('frontend.contact-us');
    }
    public function blog()
    {

        return view('frontend.blog');
    }

    public function insurance()
    {

        return view('frontend.insurance');
    }
    public function career()
    {

        return view('frontend.career');
    }
}
