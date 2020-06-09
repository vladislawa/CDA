<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PageMeta;
use App\Contact;
class ContactController extends Controller
{
    public function index() 
    {
        $contact = Contact::all();
        $meta = PageMeta::all()->where('page_name', 'Contact')->pluck('meta_description');
        $title = PageMeta::all()->where('page_name', 'Contact')->pluck('meta_title');
        $index = PageMeta::all()->where('page_name', 'Contact')->pluck('index');
        $junk = array("[", "]", "\"");
        $meta_new = str_replace($junk, "", $meta);
        $title_new = str_replace($junk, "", $title);
        return view('contact')->with('desc', $meta_new)->with('title', $title_new)->with('index', $index)->with('contact', $contact);
    }
}
