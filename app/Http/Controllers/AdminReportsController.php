<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Http\Requests\ReportCreateRequest;
use App\Http\Requests\ReportEditRequest;

use App\Models\Report;
use App\Models\Category;
use App\Models\User;
use App\Models\Meta;

class AdminReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::paginate(20);

        return view('admin.reports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reportSku = $this->generateSku();
        $categories = Category::pluck('name', 'id');
        return view('admin.reports.create', compact('categories', 'reportSku'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReportCreateRequest $request)
    {
        $input = $request->all();
        $user = Auth::user();

        $meta = Meta::create([
            'title' => ($request->meta_title != null) ? $request->meta_title : $request->title,
            'description' => $request->meta_description,
            'keywords' => $request->meta_keywords,
        ]);
        $input['meta_id'] = $meta->id;

        $user->reports()->create($input);

        $request->session()->flash('message', 'Report created successfully');

        return redirect()->route('admin.reports.index');
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
        $report = Report::findOrFail($id);
        $categories = Category::pluck('name', 'id');

        return view('admin.reports.edit', compact('report', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReportEditRequest $request, $id)
    {
        $report = Report::findOrFail($id);
        $report->meta()->update([
            'title' => ($request->meta_title != null) ? $request->meta_title : $request->title,
            'description' => $request->meta_description,
            'keywords' => $request->meta_keywords,
        ]);
        $report->update($request->all());

        $request->session()->flash('message', 'Report updated successfully');

        return redirect()->route('admin.reports.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = Report::findOrFail($id);
        $report->meta->delete();
        $report->delete();

        Session::flash('message', 'Report Deleted successfully');

        return redirect()->route('admin.reports.index');
    }

    public function generateSku() {
        $report = Report::select('sku')->orderBy('sku', 'desc')->first();
        $newSku = (int)str_replace('DI', '', $report->sku);
        return 'DI' . (++$newSku);
    }
}
