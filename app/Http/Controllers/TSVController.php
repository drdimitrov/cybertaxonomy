<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TSVController extends Controller
{
    public function index()
    {
        return view('tsv.tsv');
    }

    public function parse(Request $request)
    {
        $parsed = [];

        $delimiter = "\n";

        $splitcontents = explode($delimiter, $request->file('tsv')->get());

        foreach ( $splitcontents as $line )
        {
            $parsed[] = explode("\t", $line);
        }

        return view(
            $request->action == 1 ? 'tsv.tsv_parsed': 'tsv.export',
            compact('parsed')
        );

    }
}
