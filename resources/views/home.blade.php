@extends('layouts.layout')

@section('content')
    <div>
        <table>
            <thead>
                <th>id</th>
                <th>title</th>
                <th>description</th>
                <th>status</th>
            </thead>
            @foreach($jobs as $job)
            <tbody>
                <tr>
                    <th>{{$job->id}}</th>
                    <tr>{{$job->description}}</tr>
                    <td>{{$job->title}}</td>
                    <td>{{$job->status}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection
