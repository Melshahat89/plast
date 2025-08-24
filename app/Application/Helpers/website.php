<?php
function page($id = null){
    if($id != null){
        return \App\Application\Model\Page::infOrFail($id);
    }
    return \App\Application\Model\Page::get();
}

function getYouTubeId($url){
    if (preg_match('![?&]{1}v=([^&]+)!', $url . '&', $m)){
        return $video_id = $m[1];
    }
    return false;
}

function small($image = ''){
    if($image == ''){
        $image = url(env('NONE_IMAGE'));
    }else{
        $image = imageExist($image , 'SMALL_IMAGE_PATH') ?  url('/'.env('SMALL_IMAGE_PATH').'/'.$image) :  url(env('NONE_IMAGE'));
    }
    return $image ;
}

function imageExist($imageName , $env = 'SMALL_IMAGE_PATH'){
    return file_exists(public_path(env($env).'/'.$imageName)) ? true : false;
}

function large($image= ''){
    if($image == ''){
        $image = url(env('NONE_IMAGE'));
    }else{
        $image = imageExist($image , 'UPLOAD_PATH') ?  url('/'.env('UPLOAD_PATH').'/'.$image) :  url(env('NONE_IMAGE'));
    }
    return $image ;

    // return $image == '' ? env('NONE_IMAGE') : imageExist($image , 'UPLOAD_PATH') ?  url('/'.env('UPLOAD_PATH').'/'.$image) :  env('NONE_IMAGE')  ;
}