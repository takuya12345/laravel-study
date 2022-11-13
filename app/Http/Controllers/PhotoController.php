<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    // アップロード画面
    public function create()
    {
        return view('photos.create');
    }

    // アップロード処理
    public function store(Request $request)
    {
        $savedFilePath = $request->file('image')->store('photos', 'public');
        $fileName = pathinfo($savedFilePath, PATHINFO_BASENAME);

        // return to_route('photos.create')->with('success', 'アップロードしました');
        return to_route('photos.show', ['photo' => $fileName])->with('success', 'アップロードしました');
    }

    // アップロード画像の表示
    public function show($fileName)
    {
        return view('photos.show', ['fileName' => $fileName]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    // アップロード画像の削除処理
    public function destroy($fileName)
    {
        Storage::disk('public')->delete('photos/' . $fileName);
        return to_route('photos.create')->with('success', '削除しました');
    }
}
