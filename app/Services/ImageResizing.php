<?php

namespace App\Services;

use Storage;
use Image;


class ImageResizing {

  public function imageStore($image) {

    $imageName = $image->store('','images');
    $image->store('','thumbnails');
    $image->store('','miniature');
    // create instance
    $thumbnail = Image::make(Storage::disk('thumbnails')->path($imageName))->resize(300, 300, function ($constraint) {
        // $constraint->aspectRatio();
        $constraint->upsize();
    });  

    $miniature = Image::make(Storage::disk('miniature')->path($imageName))->resize(100, 100, function ($constraint) {
        // $constraint->aspectRatio();
        $constraint->upsize();
    });           
  
    //$path = Storage::disk('thumbnails')->getAdapter()->getPathPrefix();
  
    $thumbnail->save();
    $miniature->save();

    return $imageName;
  }

  public function imageDelete($imageName) {
    storage::disk('images')->delete($imageName);
    storage::disk('thumbnails')->delete($imageName);
    storage::disk('miniature')->delete($imageName);
  }
};
