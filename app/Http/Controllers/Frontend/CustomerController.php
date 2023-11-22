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
        $financial = Yourachievements::where('status',1)->get();
        $complete = Yourachievements::where('status', 6)->first();
        return view('frontend.index', compact('financial','complete'));
    }

}
