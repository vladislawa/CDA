<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Main;

class PageController extends BackendController
{
    protected $limit = 1;
    protected $uploadPath;

    public function __construct() 
    {
        parent::__construct();
        $this->uploadPath = public_path('img');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Main::latest()->paginate($this->limit);
        return view("content", compact('content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Main $text)
    {
        return view("create", compact('text'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
       
        ]);

        $request->title;
         
        $request->body;


        $text = new Main;
        $text->author_id = 1;
        $lines = array("\\n", "\\r\\n");
        $new_body = str_replace($lines , "<br>", $request->body);
        $text->title = $request->title;
        $text->body = $new_body;
        $text->updated_at = date("Y-m-d H:i:s");
        $text->created_at = date("Y-m-d H:i:s");

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = $image ->getClientOriginalName();
            $destination = $this->uploadPath;
            $image->move($destination, $fileName);
            $text->image = $fileName;
        }

        $text->save();
        return redirect('index')->with('success', 'Your content was added.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $text = Main::findOrFail($id);
        //return $text->title;
        return view('edit', compact('text'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $text = Main::findOrFail($id);
        //return $text->title;
        return view('edit', compact('text'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
       
        ]);

        $request->title;
        $request->body;

        $text = Main::Find($id);
        $text->author_id = 1;
        $lines = array("\\n", "\\r\\n");
        $new_body = str_replace($lines , "<br>", $request->body);
        $text->title = $request->title;
        $text->body = $new_body;
        $text->updated_at = date("Y-m-d H:i:s");
        $text->created_at = date("Y-m-d H:i:s");

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = $image ->getClientOriginalName();
            $destination = $this->uploadPath;
            $image->move($destination, $fileName);
            $text->image = $fileName;
        }

        $text->update($request->all());
        return redirect('index')->with('success', 'Your content was updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Main::findOrFail($id)->delete();
        //return view("create", compact('text'));
        return redirect('home')->with('deletion', 'Your content was deleted.');
    }
}
