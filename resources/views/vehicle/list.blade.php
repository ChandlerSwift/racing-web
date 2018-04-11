@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Vehicles</h1>
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
                    @foreach($vehicles as $vehicle)
                    <tr>
                        <td>
                            <a href="{{ url("/vehicles/{$vehicle->id}") }}">
                                {{ $vehicle->name }}
                            </a>
                        </td>
                        <td>{{ $vehicle->created_at->toFormattedDateString() }}</td>
                        <td>{{ $vehicle->races->count() }}</td>
                        @if($vehicle->races->count() > 0)
                        <td>{{ number_format($vehicle->races->sortBy('time_ms')->first()->time_ms / 1000, 3, '.', '') }}</td>
                        <td>{{ number_format($vehicle->races->avg('time_ms') / 1000, 3, '.', '') }}</td>
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
