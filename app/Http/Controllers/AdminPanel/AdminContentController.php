<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminContentController extends Controller
{
    protected $appends = [
        'getParentsTree'
    ];
    public static function getParentsTree($content , $title){
        if ($content ->parent_id == 0){
            return $title;
        }
        $parent = Content::find($content ->parent_id);
        $title = $parent->$title .' > ' . $title;
        return MenuController::getParentsTree($parent, $title);
    }


    public function index()
    {
        $data= Content::all();
        return view('admin.content.index', [
            'data' => $data,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data= Menu::all();
        return view('admin.content.create', [
                'data' => $data
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Content();
        $data->menu_id = $request->menu_id;
        $data->user_id = 0; //$request->user_id;
        $data->title = $request->title;
        $data->detail = $request->detail;
        $data->status = $request->status;
        if ($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/content');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content,$id)
    {
        //
        $data= Content::find($id);
        return view('admin.content.show', [
                'data' => $data
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content,$id)
    {
        //
        $data= Content::find($id);
        $datalist= Menu::all();
        return view('admin.content.edit', [
                'data' => $data,
                'datalist' => $datalist
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content, $id)
    {
        //
        $data= Content::find($id);
        $data->menu_id = $request->menu_id;
        $data->user_id = 0; //$request->user_id;
        $data->title = $request->title;
        $data->detail = $request->detail;
        $data->status = $request->status;
        if ($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/content');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content,$id)
    {
        //
        $data = Content::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('/admin/content');
    }
}
