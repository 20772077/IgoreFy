<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Music extends Controller
{
    public function main(){
        $albums = DB::table("albumDB")->select("album_id","album_title", "year_of_release", "artist","src")->get();
        return view("music.main", [ 'albums'=>$albums, "index"=>0]);
    }
    public function addMusic(Request $request){
        $res = $request->input("songsNum");
        return view("music.addMusic", ["res"=> $res]);
    }
    public function addAlbum(Request $request){
        $srcSongs = "aFileStorage/albumCovers/";
        $srcCovers = "aFileStorage/songs/";
        $tmpFileAC = $_FILES["albumCover"];
        rename($tmpFileAC["tmp_name"],$srcCovers.$tmpFileAC["name"]);
        $tmpFileAN = $_POST["albumName"];
        $tmpFileAA = $_POST["albumArtist"];
        $tmpFileAY = $_POST["albumYear"];
        $id = DB::table("albumDB")->insertGetId([
            'album_title'=>$tmpFileAN,
            'year_of_release'=>$tmpFileAY,
            'artist'=>$tmpFileAA,
            'src'=>$srcCovers.$tmpFileAC["name"]]);
        $iterations = $_POST["amountOfSongs"]+0; 
        var_dump($_FILES["song-0"]);
        for($i = 0; $i < $iterations; $i++){
            //цикл для добавления песни
            $tmpFileSong = $_FILES["song-".$i];
            rename($tmpFileSong["tmp_name"],$srcSongs.$tmpFileSong["name"]);
            DB::table("musicDB")->insert([
                'title'=>$tmpFileSong['name'],
                'album_id'=>$id,
                'yearOfRelease'=>$tmpFileAY,
                'artist'=>$tmpFileAA,
                'src'=>$srcSongs.$tmpFileSong["name"]]);
            //конец цикла
        }
        return redirect()->back();
    }
    public function listenAlbum(){
        $songs = DB::table("musicDB")->select("*")->where("album_id","=",$_GET["album"])->get();
        return view("music.album",["album"=>$songs, "index"=>0]);
    }
}