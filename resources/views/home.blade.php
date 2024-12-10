@extends('layouts.layout')

@section('content')
    <div>
        <table>
            <thead>
                <th>id</th>
                <th>title</th>
                <th>status</th>
                <th>Details</th>
            </thead>
            @foreach($jobs as $job)
            <tbody>
                <tr>
                    <th>{{$job->id}}</th>
                    <td>{{$job->title}}</td>
                    <td>{{$job->status}}</td>
                    <td><a href="{{ route('showJobDetail', ['id' => $job->id]) }}">Job details</a></td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection
