<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Report;

class ReportController extends Controller
{
    public function index($categorySlug, $reportSlug) {
        $report = Report::where('slug', $reportSlug)->firstOrFail();

        return view('reports.single', compact('report'));
    }
}
