@extends('FrontEndView.layouts.frontMaster')
@section('content')
    <div class="rs-breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title " style="color:#ffffff">
                    On-Going Project
                </h1>
            </div>
        </div>
    </div>



    <div class="rs-project style3 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                @foreach ($onGoingProject as $key => $onGoingProject)
                    <div class="col-lg-4 col-md-6 mb-30">
                        <a href="">
                            <div class="project-item">
                                <div class="project-img">
                                    <a href=""><img src="{{ asset('public/image/project') }}/{{ $onGoingProject->project_header_image }}" alt="{{ $onGoingProject->project_name }}"></a>
                                </div>
                                <div class="project-content">
                                    <div class="portfolio-inner">
                                        <h3 class="title text-dark"><a href="{{ route('FrontEnd.ProjectDetailsShow',['project_slug'=>$onGoingProject->project_slug]) }}">{{ $onGoingProject->project_name }}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
