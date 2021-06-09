<?php

namespace App\Http\Controllers;


use App\Models\Datapunten;
use App\Models\Post;
use App\Mail\PostLiked;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(User $user)
    {
        if(auth()->user()->clearance == 'student') {
            $datapunten = Datapunten::with('user')->where('user_id', auth()->user()->id)->get();
        }
        else {
            $datapunten = Datapunten::all();
        }
        return view('dashboard', ['datapunten' => $datapunten]);
    }
}
