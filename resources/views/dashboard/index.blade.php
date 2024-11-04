@extends('layouts.SupUserMaster')
@section('title', 'Dashboard ~ Super User - Techno Apogee Limited')

@section('SupUserContent')

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('Administrator.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <iframe width="1100" height="825" src="https://lookerstudio.google.com/embed/reporting/7c591429-75d2-4c85-a6ed-6f8c6d853ace/page/vDQkD" frameborder="0" style="border:0" allowfullscreen></iframe>

            </br>
            <iframe width="1100" height="825" src="https://lookerstudio.google.com/embed/reporting/9470aeae-a656-476e-8348-60bb39a35323/page/6zXD" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>
    </section>



@endsection
