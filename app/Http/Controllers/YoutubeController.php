<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YoutubeModel;
class YoutubeController extends Controller
{
    
    public function getYTList($api_url = '') {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $arr_result = json_decode($response);
        if (isset($arr_result->items)) {
            return $arr_result;
        } elseif (isset($arr_result->error)) {
            // var_dump($arr_result); //this line gives you error info if you are not getting a video list.
        }
    }
    public function index($id = ''){
        // return view('youtube');
        if ($id) {
            $show_data = (new YoutubeModel)->show($id);
            return view('videodata',['show_data'=>$show_data]);
        }else{
            $url = "https://www.googleapis.com/youtube/v3/videos?key=". env('GOOGLE_API_KEY')."&chart=mostPopular&maxResults=30&order=date&part=snippet&type=video";
            $arr_list = YoutubeController::getYTList($url);
            foreach($arr_list->items as $items){
                $insert_data = (new YoutubeModel)->insert($items);
            }
            return view('youtubedata', ['arr_list'=>$arr_list]);
        }
    }

    
}
