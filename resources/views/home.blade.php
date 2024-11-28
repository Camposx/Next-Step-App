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
                <th>($job->id)</th>
                <tr>($job->title)</tr>
                <tr>($job->description)</tr>
                <tr>($job->status)</tr>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection
