Install and To set up a new project on the Google Developers Console:
composer require google/apiclient

After getting our credentials from the Google Developers Console, we need to register them inside our application:

// .env
GOOGLE_API_KEY='USER_GOOGLE_API_KEY';

Create Controller , Model and View for Application:

YoutubeController
YoutubeModel
youtubedata.blade.php
videodata.blade.php

CURL Request for Youtube Details:
https://www.googleapis.com/youtube/v3/videos?key="GOOGLE_API_KEY"

Get the data from the url and save them in DB with some parameter
 DATABSE Name: YoutubeDatabase