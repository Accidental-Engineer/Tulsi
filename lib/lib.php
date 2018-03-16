<?php
//function for view count

function viewCount($val){
  if ($val>=0 && $val < 1000) {
    echo number_format((float)$val, 1, '.', '')." views";
  }
  if ($val>=1000 && $val < 1000000) {
    echo round($val/1000, 1)."K views";
  }
  if ($val>=1000000 && $val < 1000000000) {
    echo number_format((float)$val/1000000, 1, '.', '')."M views";
  }
  if ($val>=1000000000) {
    echo number_format((float)$val/1000000000, 1, '.', '')."B views";
  }
}

//For video processing
require '/vendor_ffmpeg/autoload.php';
$process_percent = 0;
function encodeVideo($file_config){
  $ffmpeg = FFMpeg\FFMpeg::create(array(
      'ffmpeg.binaries'  => 'C:/ffmpeg/bin/ffmpeg.exe',
      'ffprobe.binaries' => 'C:/ffmpeg/bin/ffprobe.exe',
  	'timeout'          => 3600, // The timeout for the underlying process
      'ffmpeg.threads'   => 12,   // The number of threads that FFMpeg should use
  ));
  $location = $file_config["location"];
  $save_location = $file_config["save_loaction"];
  $quality = $file_config["quality"];
  $file_name = $file_config["name"];
  $width = 0;
  $height = 0;
  $bitrate =0;
  $audio_channel = 2;
  $audio_bitrate = 0;
  $thumbnail = "../res/img/thumbnail/".$file_name;

  if ($quality == "high") {
    $width = 1280;
    $height = 720;
    $bitrate = 1856;
    $audio_bitrate = 128;
  }
  else if ($quality == "med") {
    $width = 848;
    $height = 480;
    $bitrate = 1216;
    $audio_bitrate = 64;
  }
  else if ($quality == "low") {
    $width = 424;
    $height = 240;
    $bitrate = 576;
    $audio_bitrate = 64;
  }
  $video = $ffmpeg->open($location);
  $video
      ->filters()
      ->resize(new FFMpeg\Coordinate\Dimension($width, $height))
      ->synchronize();
  $video
      ->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(10))
      ->save($thumbnail);
  $format = new FFMpeg\Format\Video\X264();
  $format->on('progress', function ($video, $format, $percentage) {
    session_start();
    $_SESSION['progress_percent'] = $percentage;
    session_write_close();
  });
  $format->setAudioCodec("libmp3lame")
  		->setKiloBitrate($bitrate)
      ->setAudioChannels($audio_channel)
      ->setAudioKiloBitrate($audio_bitrate);
  $video
      ->save($format,$save_location);
}

//generation video name
function genVidName(){
    $string='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefhijklmnopqrstuvwxyz1234567890';
    $string_shuff=str_shuffle($string);
    $name = substr($string_shuff,0,16);
    return $name;
}


?>
