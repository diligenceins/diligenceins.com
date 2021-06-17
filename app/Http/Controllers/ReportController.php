<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Category;
use App\Models\Report;
use App\Models\Country;

class ReportController extends Controller
{
    public function index($categorySlug, $reportSlug) {
        // $checkout = Auth::user()->checkoutCharge();
        $report = Report::where('slug', $reportSlug)->firstOrFail();
        $relatedReports = Report::where('category_id', $report->category_id)->where('id', '!=', $report->id)->limit(4)->get();

        return view('reports.single', compact('report', 'relatedReports'));
    }

    public function sample($slug) {
        $report = Report::where('slug', $slug)->firstOrFail();
        $countries = Country::pluck('nicename', 'id');

        return view('reports.request-sample', compact('report', 'countries'));
    }

    public function inquiry($slug) {
        $report = Report::where('slug', $slug)->firstOrFail();
        $countries = Country::pluck('nicename', 'id');

        return view('reports.enquiry', compact('report', 'countries'));
    }
}
