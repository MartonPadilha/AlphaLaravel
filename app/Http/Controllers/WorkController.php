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
        $work->date = $request->date;
        if ($request->hasFile('file')) {
            $img = $request->file('file');
            $num = rand(0, 9999999999);
            $dir = "images/works";
            $ex = $request->file('file')->guessClientExtension();
            $fileName = "image_" . $num . " . " . $ex;
            $img->move($dir, $fileName);
            $work->file = $dir . "/" . $fileName;
        }
        $work->status = "enable";
        $work->save();

        return redirect()->route('admin')->withStatus('Obra adicionada com sucesso a sua galeria!');
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
        }
        $works->save();

        return redirect()->route('admin')->withStatus('Obra editada com sucesso!');
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
        $delete['success'] = true;
        $delete['message'] = 'A obra foi deletada com sucesso da sua galeria!';
        echo json_encode($delete);
        return;
    }
    
    public function viewWorks(){
        $works = Work::all();
            return view('site.work', [
                'works' => $works
            ]);
    }
}
