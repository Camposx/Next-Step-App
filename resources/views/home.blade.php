@extends('layouts.layout')

@section('content')
    <div>
        @foreach($jobs as $job)
            <a class="link" href="{{ route('showJobDetail', ['id' => $job->id]) }}">
                <div class="jobOffer">
                    <div>
                        <div class="title">
                            <h3>{{$job->title}}</h3>
                        </div>
                        <div class="shortDesc">
                            <p>{{$job->description}}</p>
                        </div>
                        <div class="status">
                            <h5>{{$job->status}}</h5>
                        </div>
                        <div class="dateTime">
                            <h4>{{$job->created_at->format('d/m/Y')}}</h4>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
