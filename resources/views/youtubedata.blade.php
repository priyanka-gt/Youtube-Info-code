<style>
.video-list  {
margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 250px;
  height:210px;
}
</style>
<?php if (!empty($arr_list)) {
    foreach ($arr_list->items as $yt) {
        echo '<div class="video-list">';

        echo "<p><img src='".$yt->snippet->thumbnails->default->url."' height=".$yt->snippet->thumbnails->default->height." width=".$yt->snippet->thumbnails->default->width."><a href=".url('/detail')."/video_id=".$yt->id."></br><b>". $yt->snippet->title ."</b></a></p>";
        echo '</div>';

    }
 
}?>