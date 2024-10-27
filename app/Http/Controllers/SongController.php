<?php

namespace App\Http\Controllers;

use App\Models\song;
use App\Models\singer;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;


class SongController extends Controller
{
  public function getSongs(Request $request)
  {
    $filter = $request->filter;
    $keyword = $request->keyword;
    //因為都有撈id，所以要區分所屬欄位
    if($filter ==='歌手'){
        $singer_id_query = singer::select('id')->where('name','like','%'.$keyword.'%');
        $songs = song::select(['songs.id','songs.name'])->joinSub($singer_id_query,'singer',function($join){
            $join->on('songs.singer_id','=','singer.id');
        })->get()/* ->simplePaginate(10)->appends(['filter'=> $filter,'keyword'=>$keyword]) */;
        return $songs;
    }else{
        $songs = Song::select('id','name')->where($filter,"like","%".$keyword."%")->simplePaginate(10)->appends(['filter'=> $filter,'keyword'=>$keyword]);
        return $songs;
    }
  }
  public function getSong(Request $request)
  {
    $id = $request->id;
    $song = Song::find($id);
    return $song;
  }
}
