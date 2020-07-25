<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Destinations extends Model
{
    use SoftDeletes;


    protected $fillable =[
        'title', 'description', 'content', 'image', 'published_at'
    ];

    /**
     * delete image from storage
     * @return void 
     */





    public function deleteImage()
    {
        Storage::delete($this->image);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
