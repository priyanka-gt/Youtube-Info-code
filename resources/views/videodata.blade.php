<style>
.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}
.gallery img {
  width: 100%;
  height: auto;
}

.desc {
  padding: 15px;
}
</style>
@if(!empty($show_data))
    @foreach($show_data as $val)
        <h3>{{$val['video_title']}}</h3>
        <p><b> Description:</b>{{$val['video_desc']}}</p>
        <h4>Video Url:{{$val['video_url']}}</h4>
        @php $thumnail = json_decode($val['video_thumbnail']); @endphp
        <h3>Channel Title : {{$val['channel_title']}}</h3>
            <p><b>Channel Description:</b>{{$val['channel_desc']}}</p>
            <div class="gallery">
                
                <img src="{{$thumnail->maxres->url}}" width="{{$thumnail->maxres->width}}" height="{{$thumnail->maxres->height}}">
                
                    <div class="desc">Maxresolution</div>
            </div>
            <div class="gallery">
                
                <img src="{{$thumnail->standard->url}}" width="{{$thumnail->standard->width}}" height="{{$thumnail->standard->height}}"> 
                
                    <div class="desc">Standard</div>
            </div>
            <div class="gallery">
                
                <img src="{{$thumnail->high->url}}" width="{{$thumnail->high->width}}" height="{{$thumnail->high->height}}">
                
                    <div class="desc">High</div>
            </div>


            <div class="gallery">
                
                <img src="{{$thumnail->medium->url}}" width="{{$thumnail->medium->width}}" height="{{$thumnail->medium->height}}">
                
                    <div class="desc">Medium</div>
            </div>
            <div class="gallery">
                
                <img src="{{$thumnail->default->url}}" width="{{$thumnail->default->width}}" height="{{$thumnail->default->height}}">
                
                    <div class="desc">Default</div>
            </div>
            
    @endforeach
@endif