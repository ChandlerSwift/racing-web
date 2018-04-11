@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ $vehicle->name }}</h1>
            @include('layouts.race-table', ['races' => $vehicle->races ])
        </div>
    </div>
@endsection
