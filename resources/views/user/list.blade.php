@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Users</h1>
            <table width="100%" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Since</th>
                        <th>Races</th>
                        <th>Fastest Time</th>
                        <th>Average Time</th>
                        <th>Favorite Vehicle</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>
                            <a href="{{ url("/users/{$user->id}") }}">
                                {{ $user->name }}
                            </a>
                        </td>
                        <td>{{ $user->created_at->toFormattedDateString() }}</td>
                        <td>{{ $user->races->count() }}</td>
                        <td>{{ number_format($user->races->sortBy('time_ms')->first()->time_ms / 1000, 3, '.', '') }}</td>
                        <td>{{ number_format($user->races->avg('time_ms') / 1000, 3, '.', '') }}</td>
                        <td>TODO</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
