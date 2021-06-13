<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Report;

class ReportsController extends Controller
{
    public function index() {
        $reports = Report::where('status', 1)->latest('published')->paginate(20);

        return view('reports.all', compact('reports'));
    }

    public function category($slug) {
        $category = Category::where('slug', $slug)->firstOrFail();
        $reports = $category->reports()->where('status', 1)->latest('published')->paginate(20);

        return view('reports.category', compact('reports', 'category'));
    }
}
