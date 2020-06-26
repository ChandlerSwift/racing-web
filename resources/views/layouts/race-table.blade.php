@isset($normal_table)
<table width="100%" class="table table-striped table-bordered">
@else {{-- DataTable --}}
<table width="100%" class="table table-striped table-bordered datatable">
@endif
    <thead>
        <tr>
            <th>Driver</th>
            <th>Vehicle</th>
            <th>Track</th>
            <th>Time</th>
            <!-- TODO: Average Speed -->
        </tr>
    </thead>
    <tbody>
        @foreach($races as $race)
        <tr>
            <td>{{ $race->user->name }}</td>
            <td>{{ $race->vehicle->name }}</td>
            <td>{{ $race->track->name }}</td>
            <td>{{ number_format($race->time_ms / 1000, 3, '.', '') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
