@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Export Data</h1>
            <p>To download a complete dump of the data as a CSV file which can be opened with Excel, click the button below.</p>
            <p>This includes all race data since 2015 by all racers, using all vehicles, across all tracks.</p>
            <a class="btn btn-primary" href="/data/dump">Download Data</a>
        </div>
    </div>
@endsection
