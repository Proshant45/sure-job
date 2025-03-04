<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
       $jobs = Job:: query()->
       where('title', 'LIKE', '%'.request('q').'%')->
       with(['employer', 'tags'])->get();
        return view('results',['jobs'=>$jobs]);
    }
}
