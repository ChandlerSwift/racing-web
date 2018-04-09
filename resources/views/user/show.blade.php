@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ $user->name }}</h1>
            @include('layouts.race-table', ['races' => $user->races ])
        </div>
    </div>
@endsection
