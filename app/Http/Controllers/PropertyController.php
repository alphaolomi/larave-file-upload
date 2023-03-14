<?php

namespace App\Http\Controllers;

use App\Imports\PropertyImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PropertyController extends Controller
{
    // import
    public function showImport()
    {
        return view('import');
    }

    // import
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx'
        ]);

        $file = $request->file('file');

        Excel::import(new PropertyImport, $file);

        return back()->with('success', 'All good!');
    }
}
