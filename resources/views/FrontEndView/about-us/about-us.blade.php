@extends('FrontEndView.layouts.frontMaster')
@section('content')

    
    <div class="rs-breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title " style="color:#ffffff">
                    About Us
                </h1>
            </div>
        </div>
    </div>


    <section id="weDo">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-lg-6">
                    <div class="weDo">
                        <img src="{{ asset('public/image/about-us/about-us') }}/{{ $fetchAboutData->image }}" alt="">
                    </div>
                </div>

                <div class="col-lg-6 weDoContent">
                        <div class="weDoContent">
                            {!! $fetchAboutData->description !!}
                        </div>
                </div>
            </div>
        </div>
    </section>

    



@endsection