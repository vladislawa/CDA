<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Application;

class Main extends Model
{

    protected $fillable = ['title', 'body'];

    public function getImageUrlAttribute($value)
    {
        $imageUrl= "";

        if (! is_null($this->image)) 
        {   
            $imagePath = public_path() . "/img/" . $this->image;
            if (file_exists($imagePath)) $imageUrl = asset("img/" . $this->image);
            
     }
     return $imageUrl;

    }

}
