<?php

namespace App\Http\Controllers;

use App\Models\singer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SingerController extends Controller
{
   public function get(Request $request)
   {
    $keyword = $request->keyword;
    $singer = Singer::where('name','like','%'. $keyword .'%')->get()->simplePaginate(20)->appends('keyword',$keyword);
    return $singer;
   }
}
