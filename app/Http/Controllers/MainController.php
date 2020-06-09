<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Main;
use App\Application;
use App\PageMeta;
class MainController extends Controller
{
    public function index() 
    {
        $content = Main::all();
        $analytics_f = Application::all()->pluck('facebook_pix');
        $analytics_g = Application::all()->pluck('gooogle_analytics');
        $meta = PageMeta::all()->where('page_name', 'Home')->pluck('meta_description');
        $title = PageMeta::all()->where('page_name', 'Home')->pluck('meta_title');
        $index = PageMeta::all()->where('page_name', 'Home')->pluck('index');
        $junk = array("[", "]", "\""); 
        $meta_new = str_replace($junk, "", $meta);
        $title_new = str_replace($junk, "", $title);
        $scr = array("[\"", "\"]", "\\r\\n", "\\"); 
        $analytics_facebook = str_replace($scr, "", $analytics_f);
        $analytics_google = str_replace($scr, "", $analytics_g);
        $fileName_g="google.js";
        file_put_contents($fileName_g, $analytics_google);
        $fileName_f="facebook.js";
        file_put_contents($fileName_f, $analytics_facebook);
  
        return view('index')->with('content', $content)->with('desc', $meta_new)->with('index', $index)->with('title', $title_new);
    }
}
