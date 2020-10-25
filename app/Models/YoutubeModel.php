<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YoutubeModel extends Model
{
    protected $table = 'youtube_data';
    public $timestamps = FALSE;
    use HasFactory;
    public function insert($data){
        $insert = new YoutubeModel();
            $insert->video_id=$data->id;
            $insert->video_title=$data->snippet->title;
            $insert->video_url="https://www.youtube.com/watch?v=".$data->id;
            $insert->video_desc=$data->snippet->description;
            $insert->video_thumbnail=json_encode($data->snippet->thumbnails);
            $insert->channel_id=$data->snippet->channelId;
            $insert->channel_title=$data->snippet->channelTitle;
            $insert->channel_desc=$data->snippet->localized->description;
            $insert->channel_thumbnail='';
            if(YoutubeModel::where('video_id', '=', $data->id)->exists()){
                $details=false;
            }else{
                $details = $insert->save();
            }
        return $details;
    }
    public function show($id=''){
        if($id){
           $details = YoutubeModel::where('video_id', '=', $id)->get()->toArray();  
        }
        return $details;
    }
}
