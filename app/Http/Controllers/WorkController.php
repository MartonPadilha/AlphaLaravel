<?php

namespace App\Http\Controllers;
use Illuminate \ Support \ Facades \ Auth;

use Illuminate\Http\Request;
use App\Work;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::all();
        if (Auth::check() === true) {
            return view('admin.dashboard', [
                'works' => $works
                ]);
            }

        return redirect()->route('admin.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.newWork');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $work = new Work();
        $work->author = Auth::user()->id;
        $work->title = $request->title;
        $work->description = $request->description;
        $work->category = $request->category;
        $work->date = "05/01/2020";
        if ($request->hasFile('file')) {
            $img = $request->file('file');
            $num = rand(0, 9999999999);
            $dir = "images/works";
            $ex = $request->file('file')->guessClientExtension();
            $fileName = "image_" . $num . " . " . $ex;
            $img->move($dir, $fileName);
            $work->file = $dir . "/" . $fileName;
            // $request->file('file')->store('images');
            // $work->file = $request->file('file');
        }
        $work->status = "enable";
        $work->save();

        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Work $works)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $works)
    {
        return view('admin.editWork', [
            'works' => $works
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Work $works)
    {
        $works->title = $request->title;
        $works->description = $request->description;
        $works->category = $request->category;
        if ($request->hasFile('file')) {
            $img = $request->file('file');
            $num = rand(0, 9999999999);
            $dir = "images/works";
            $ex = $request->file('file')->guessClientExtension();
            $fileName = "image_" . $num . " . " . $ex;
            $img->move($dir, $fileName);
            $works->file = $dir . "/" . $fileName;
            // $request->file('file')->store('images');
            // $works->file = $request->file('file');
        }
        $works->save();

        return redirect()->route('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $works)
    {
        $works->delete();
        return redirect()->route('admin');
    }
    
    public function viewWorks(){
        $works = Work::all();
            return view('site.work', [
                'works' => $works
            ]);
    }
}
