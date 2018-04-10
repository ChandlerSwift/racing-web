@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tracks</h1>
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
                    @foreach($tracks as $track)
                    <tr>
                        <td>
                            <a href="{{ url("/tracks/{$track->id}") }}">
                                {{ $track->name }}
                            </a>
                        </td>
                        <td>{{ $track->created_at->toFormattedDateString() }}</td>
                        <td>{{ $track->races->count() }}</td>
                        @if($track->races->count() > 0)
                        <td>{{ number_format($track->races->sortBy('time_ms')->first()->time_ms / 1000, 3, '.', '') }}</td>
                        <td>{{ number_format($track->races->avg('time_ms') / 1000, 3, '.', '') }}</td>
                        <td>TODO</td>
                        @else
                        <td colspan="3" style="text-align:center;">---</td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
