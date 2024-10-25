<?php

namespace App\Http\Controllers;

use App\Models\song;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SongController extends Controller
{
  public function getSongs(Request $request)
  {
    $filter = $request->filter;
    $keyword = $request->keyword;
    $song = Song::where($filter,"like","%".$keyword."%")->get()->simplePaginate(20)->appends(['filter'=> $filter,'keyword'=>$keyword]);
    return $song;
  }
  public function getSong(Request $request)
  {
    $id = $request->id;
    $song = Song::find($id);
    return $song;
  }
}
