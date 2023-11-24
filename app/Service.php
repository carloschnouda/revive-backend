<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Service extends Model
{


    protected $table = 'services';

    protected $guarded = ['id'];





    /* Start custom functions */

    public $appends = ['gallery'];

    function getGalleryAttribute()
    {

        //Get Gallery Image Full Path As An Array
        $array = json_decode($this->image_gallery);
        $image_gallery = [];
        foreach ($array as $key => $singleImage) {
            $image_gallery[] = Storage::url($singleImage);
        }

        return $image_gallery;
    }

    /* End custom functions */
}
