<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index() {
        return view('data.index');
    }

    public function dumpAll() {
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=racing-data.csv",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        $races = \App\Race::all();

        $callback = function() use ($races) {
            $file = fopen('php://output', 'w');
            fputcsv($file, ["id", "timestamp", "user", "vehicle", "track", "time"]);

            foreach($races as $race) {
                fputcsv($file, array($race->id, $race->created_at, $race->user->name, $race->vehicle->name, $race->track->name, $race->time_ms));
            }
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function apidoc() {
        return view('data.apidoc');
    }
}
