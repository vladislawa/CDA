<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['contact_email', 'body', 'contact_image'];
    public function getImageUrlAttribute($value)
    {
        $imageUrl= "";

        if (! is_null($this->contact_image)) 
        {   
            $imagePath = public_path() . "/img/" . $this->contact_image;
            if (file_exists($imagePath)) $imageUrl = asset("img/" . $this->contact_image);
            
     }
     return $imageUrl;

    }
}
