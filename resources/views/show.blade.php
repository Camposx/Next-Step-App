@extends('layouts.layout')

@section('content')
    <div class="offerDetailed">
        <div class="jobOfferDetailed">
            <div class="offerContent">
                <div class="offerHeading">
                    <h2 class="title">{{$jobs->title}}</h2>
                    <p class="smallText">Applied: {{$jobs->created_at->format('d/m/Y')}}</p>
                    <p class="smallText">Last update: {{$jobs->updated_at}}</p>
                </div>
                <div class="offerBody">
                    <div class="company">
                        <p class="smallText">Company:</p>
                        <h5>{{$jobs->company_name}}</h5>
                    </div>
                    <div class="field">
                        <p class="smallText">Salary range: </p>
                        <h5>{{$jobs->salary_range}}</h5>
                    </div>
                    <div class="field">
                        <p class="smallText">Work Type: </p>
                        <h5>{{$jobs->work_type}}</h5>
                    </div>
                    <div class="field">
                        <p class="smallText">Work Mode </p>
                        <h5>{{$jobs->work_mode}}</h5>
                    </div>
                    <div class="field">
                        <p class="smallText">Portal: </p>
                        <h5>{{$jobs->job_portal}}</h5>
                    </div>
                </div>
            </div>
        
            <div class="offerStatus">
                <div class="statusDad">
                    <div class="status">
                        <h5>{{$jobs->status}}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="details">
            <div class="detailsText">
                <h3>Job description:</h3>
                <p>{{$jobs->description}}</p>
            </div>
            <div class="detailsText">
                <h3>Personal notes:</h3>
                <p>{{$jobs->notes}}</p>
            </div>
        </div>
        <div class="trackSection">
            <h2>Offer tracking</h2>
            @if (!($jobs->jobs_tracking)->isEmpty())
            @foreach ($jobs->jobs_tracking as $jobs_track)
                <div class="trackItem">
                    <div class="trackTitle">
                        <h4>{{$jobs_track->step_name}}</h4>
                        <p class="smallText state">{{$jobs_track->track_status}}</p>
                    </div>
                    <p class="trackingNotes">{{$jobs_track->notes}}</p>
                    <p class="smallText ">Last updated: {{$jobs_track->updated_at}}</p>
                </div>
            @endforeach
        @else
            <p>This job have no tracking yet</p> 
        @endif
        </div>
    </div>
@endsection