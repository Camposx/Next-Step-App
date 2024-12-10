@extends('layouts.layout')

@section('content')
    <div>
        <h3>Description</h3>
        <p>{{$jobs->description}}</p>
    </div>

    <table>
        <thead>
            <th>id</th>
            <th>title</th>
            <th>status</th>
        </thead>
        <tbody>
            @if (!($jobs->jobs_tracking)->isEmpty())
                
                @foreach ($jobs->jobs_tracking as $jobs_track)
                    <tr>
                        <td>{{$jobs_track->notes}}</td>
                        <td>{{$jobs_track->step_name}}</td>
                        <td>{{$jobs_track->track_status}}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td>Esta vacío</td>
                </tr>    
            @endif
        </tbody>
    </table>

@endsection