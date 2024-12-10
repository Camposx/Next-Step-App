@extends('layouts.layout')

@section('content')
    <div>
        @foreach($jobs as $job)
            <a class="link" href="{{ route('showJobDetail', ['id' => $job->id]) }}">
                <div class="jobOffer">
                        <div class="offerContent">
                            <div class="offerHeading">
                                <h3>{{$job->title}}</h3>
                                <p>Applied: {{$job->created_at->format('d/m/Y')}}</p>
                            </div>
                            <div class="offerBody">
                                <div class="company">
                                    <p>Company:</p>
                                    <h5>{{$job->company_name}}</h5>
                                </div>
                                <div class="field">
                                    <p>Salary range: </p>
                                    <h5>{{$job->salary_range}}</h5>
                                </div>
                                <div class="field">
                                    <p>Work Type: </p>
                                    <h5>{{$job->work_type}}</h5>
                                </div>
                                <div class="field">
                                    <p>Work Mode </p>
                                    <h5>{{$job->work_mode}}</h5>
                                </div>
                                <div class="field">
                                    <p>Portal: </p>
                                    <h5>{{$job->job_portal}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="offerStatus">
                            <div class="statusDad">
                                <div class="status">
                                    <h5>{{$job->status}}</h5>
                                </div>
                            </div>
                            <div class="lastUpdate">
                                <p>Last update: {{$job->updated_at}}</p>
                            </div>
                        </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
