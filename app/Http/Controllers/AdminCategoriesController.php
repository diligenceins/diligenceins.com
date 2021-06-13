<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryEditRequest;

use App\Models\Category;
use App\Models\Meta;

class AdminCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(20);

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {
        $input = $request->all();
        $meta = Meta::create([
            'title' => ($request->meta_title != null) ? $request->meta_title : $request->name,
            'description' => $request->meta_description,
            'keywords' => $request->meta_keywords,
        ]);
        $input['meta_id'] = $meta->id;

        $category = Category::create($input);
        
        $request->session()->flash('message', 'Category created successfully');

        return redirect()->route('admin.categories.index');
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
        $category = Category::findOrFail($id);

        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryEditRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->meta()->update([
            'title' => ($request->meta_title != null) ? $request->meta_title : $request->name,
            'description' => $request->meta_description,
            'keywords' => $request->meta_keywords,
        ]);
        $category->update($request->all());

        $request->session()->flash('message', 'Category Updated successfully');

        return redirect()->route('admin.categories.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->meta->delete();
        $category->delete();

        Session::flash('message', 'Category Deleted successfully');

        return redirect()->route('admin.categories.index');
    }
}
