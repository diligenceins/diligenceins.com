<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

use App\Http\Requests\PageCreateRequest;
use App\Http\Requests\PageEditRequest;

use App\Models\Page;
use App\Models\Meta;

class AdminPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::paginate(20);

        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageCreateRequest $request)
    {
        $input = $request->all();
        $meta = Meta::create([
            'title' => ($request->meta_title != null) ? $request->meta_title : $request->name,
            'description' => $request->meta_description,
            'keywords' => $request->meta_keywords,
        ]);
        $input['meta_id'] = $meta->id;

        $page = Page::create($input);
        
        $request->session()->flash('message', 'Page created successfully');

        return redirect()->route('admin.pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $page = Page::findOrFail($id);

        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PageEditRequest $request, $id)
    {
        $page = Page::findOrFail($id);
        $page->meta()->update([
            'title' => ($request->meta_title != null) ? $request->meta_title : $request->name,
            'description' => $request->meta_description,
            'keywords' => $request->meta_keywords,
        ]);
        $page->update($request->all());

        $request->session()->flash('message', 'Page Updated successfully');

        return redirect()->route('admin.pages.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        $page->meta->delete();
        $page->delete();

        Session::flash('message', 'Page Deleted successfully');

        return redirect()->route('admin.pages.index');
    }
}
