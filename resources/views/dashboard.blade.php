@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Home</h1>
            @include("layouts.race-table")
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@endsection
