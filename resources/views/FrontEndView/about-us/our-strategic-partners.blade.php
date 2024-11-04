@extends('FrontEndView.layouts.frontMaster')
@section('content')


    <div class="rs-breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title " style="color:#ffffff">
                    Our Strategic Partners
                </h1>
            </div>
        </div>
    </div>
    <section class="bg-light pt-5 pb-5 shadow-sm">
        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <h3 class="text-uppercase border-bottom mb-4">Fire Hydrant & Sprinkler System</h3>
                </div>
            </div>
            <div class="row">
                @foreach ($fireHidrent as $keyStretegic => $fireHidrent)
                    <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                        <div class="card">
                            <img src="{{ asset('public/image/about-us/strategic-partners') }}/{{ $fireHidrent->strategic_partners_logo }}"
                                class="card-img-top" width="200px" height="200px" alt="{{ $fireHidrent->strategic_partners_name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $fireHidrent->strategic_partners_name }}</h5>
                                <p class="card-text mb-4">{{ \Str::limit($fireHidrent->strategic_partners_about,100) }}.</p>
                                <a href="{{ route('FrontEndStrategic.PartnersDetails',['strategic_id'=>$fireHidrent->id,'strategic_partner_name'=>$fireHidrent->strategic_partners_name]) }}" class="btn btn-warning text-light bg-secondary mt-auto align-self-start">&rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        

        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <h3 class="text-uppercase border-bottom mb-4">Fire Detection Systems</h3>
                </div>
            </div>
            <div class="row">
                
                @foreach ($fireDetectionSystem as $fireKey => $fireDetectionSystem)
                    <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                        <div class="card">
                            <img src="{{ asset('public/image/about-us/strategic-partners') }}/{{ $fireDetectionSystem->strategic_partners_logo }}"
                                class="card-img-top" alt="{{ $fireDetectionSystem->strategic_partners_name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $fireDetectionSystem->strategic_partners_name }}</h5>
                                <p class="card-text mb-4">{{ \Str::limit($fireDetectionSystem->strategic_partners_about,69) }}.</p>
                                <a href="{{ route('FrontEndStrategic.PartnersDetails',['strategic_id'=>$fireDetectionSystem->id,'strategic_partner_name'=>$fireDetectionSystem->strategic_partners_name]) }}" class="btn btn-warning text-light bg-secondary mt-auto align-self-start">&rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
        
        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <h3 class="text-uppercase border-bottom mb-4">Fire Suppression Systems</h3>
                </div>
            </div>
            <div class="row">
                
                @foreach ($fireSusppressionSystem as $keySusppression => $fireSus)
                    <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                        <div class="card">
                            <img src="{{ asset('public/image/about-us/strategic-partners') }}/{{ $fireSus->strategic_partners_logo }}"
                                class="card-img-top" alt="{{ $fireSus->strategic_partners_name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $fireSus->strategic_partners_name }}</h5>
                                <p class="card-text mb-4">{{ \Str::limit($fireSus->strategic_partners_about,69) }}.</p>
                                <a href="{{ route('FrontEndStrategic.PartnersDetails',['strategic_id'=>$fireSus->id,'strategic_partner_name'=>$fireSus->strategic_partners_name]) }}" class="btn btn-warning text-light bg-secondary mt-auto align-self-start">&rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>


        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <h3 class="text-uppercase border-bottom mb-4">Expansion Joint Systems</h3>
                </div>
            </div>
            <div class="row">
                
                @foreach ($jointSystems as $keyJoint => $jointSystems)
                    <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                        <div class="card">
                            <img src="{{ asset('public/image/about-us/strategic-partners') }}/{{ $jointSystems->strategic_partners_logo }}"
                                class="card-img-top" alt="{{ $jointSystems->strategic_partners_name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $jointSystems->strategic_partners_name }}</h5>
                                <p class="card-text mb-4">{{ \Str::limit($jointSystems->strategic_partners_about,69) }}.</p>
                                <a href="{{ route('FrontEndStrategic.PartnersDetails',['strategic_id'=>$jointSystems->id,'strategic_partner_name'=>$jointSystems->strategic_partners_name]) }}" class="btn btn-warning text-light bg-secondary mt-auto align-self-start">&rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>


        
        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <h3 class="text-uppercase border-bottom mb-4">HVAC Solutions</h3>
                </div>
            </div>
            <div class="row">
                
                @foreach ($HVACSystems as $keyHvac => $HVACSystems)
                    <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                        <div class="card">
                            <img src="{{ asset('public/image/about-us/strategic-partners') }}/{{ $HVACSystems->strategic_partners_logo }}"
                                class="card-img-top" alt="{{ $HVACSystems->strategic_partners_name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $HVACSystems->strategic_partners_name }}</h5>
                                <p class="card-text mb-4">{{ \Str::limit($HVACSystems->strategic_partners_about,69) }}.</p>
                                <a href="{{ route('FrontEndStrategic.PartnersDetails',['strategic_id'=>$HVACSystems->id,'strategic_partner_name'=>$HVACSystems->strategic_partners_name]) }}" class="btn btn-warning text-light bg-secondary mt-auto align-self-start">&rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>



        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <h3 class="text-uppercase border-bottom mb-4">Busbar Trunking Systems</h3>
                </div>
            </div>
            <div class="row">
                
                @foreach ($BBTSystems as $bbtKey => $BBTSystems)
                    <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                        <div class="card">
                            <img src="{{ asset('public/image/about-us/strategic-partners') }}/{{ $BBTSystems->strategic_partners_logo }}"
                                class="card-img-top" alt="{{ $BBTSystems->strategic_partners_name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $BBTSystems->strategic_partners_name }}</h5>
                                <p class="card-text mb-4">{{ \Str::limit($BBTSystems->strategic_partners_about,69) }}.</p>
                                <a href="{{ route('FrontEndStrategic.PartnersDetails',['strategic_id'=>$BBTSystems->id,'strategic_partner_name'=>$BBTSystems->strategic_partners_name]) }}" class="btn btn-warning text-light bg-secondary mt-auto align-self-start">&rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
        
        
        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <h3 class="text-uppercase border-bottom mb-4">Lightning Protection Systems (LPS)</h3>
                </div>
            </div>
            <div class="row">
                
                @foreach ($lightingProtectionSystems as $lpKey => $lightingProtec)
                    <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                        <div class="card">
                            <img src="{{ asset('public/image/about-us/strategic-partners') }}/{{ $lightingProtec->strategic_partners_logo }}"
                                class="card-img-top" alt="{{ $lightingProtec->strategic_partners_name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $lightingProtec->strategic_partners_name }}</h5>
                                <p class="card-text mb-4">{{ \Str::limit($lightingProtec->strategic_partners_about,69) }}.</p>
                                <a href="{{ route('FrontEndStrategic.PartnersDetails',['strategic_id'=>$lightingProtec->id,'strategic_partner_name'=>$lightingProtec->strategic_partners_name]) }}" class="btn btn-warning text-light bg-secondary mt-auto align-self-start">&rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
        
        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <h3 class="text-uppercase border-bottom mb-4">Hotel & Hospital Solutions</h3>
                </div>
            </div>
            <div class="row">
                
                @foreach ($hotelAndHospitalSystem as $hotelKey => $hotelHospital)
                    <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                        <div class="card">
                            <img src="{{ asset('public/image/about-us/strategic-partners') }}/{{ $hotelHospital->strategic_partners_logo }}"
                                class="card-img-top" alt="{{ $hotelHospital->strategic_partners_name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $hotelHospital->strategic_partners_name }}</h5>
                                <p class="card-text mb-4">{{ \Str::limit($hotelHospital->strategic_partners_about,69) }}.</p>
                                <a href="{{ route('FrontEndStrategic.PartnersDetails',['strategic_id'=>$hotelHospital->id,'strategic_partner_name'=>$hotelHospital->strategic_partners_name]) }}" class="btn btn-warning text-light bg-secondary mt-auto align-self-start">&rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
        
        
        
        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <h3 class="text-uppercase border-bottom mb-4">Office and Shopping Malls Automation Solution</h3>
                </div>
            </div>
            <div class="row">
                
                @foreach ($officeAndShoppingMal as $officeKey => $officeSopingMal)
                    <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                        <div class="card">
                            <img src="{{ asset('public/image/about-us/strategic-partners') }}/{{ $officeSopingMal->strategic_partners_logo }}"
                                class="card-img-top" alt="{{ $officeSopingMal->strategic_partners_name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $officeSopingMal->strategic_partners_name }}</h5>
                                <p class="card-text mb-4">{{ \Str::limit($officeSopingMal->strategic_partners_about,69) }}.</p>
                                <a href="{{ route('FrontEndStrategic.PartnersDetails',['strategic_id'=>$officeSopingMal->id,'strategic_partner_name'=>$officeSopingMal->strategic_partners_name]) }}" class="btn btn-warning text-light bg-secondary mt-auto align-self-start">&rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
        
        
        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <h3 class="text-uppercase border-bottom mb-4">Automation Solution for Residences and Villas</h3>
                </div>
            </div>
            <div class="row">
                
                @foreach ($residentialSolutions as $resKey => $resSolution)
                    <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                        <div class="card">
                            <img src="{{ asset('public/image/about-us/strategic-partners') }}/{{ $resSolution->strategic_partners_logo }}"
                                class="card-img-top" alt="{{ $resSolution->strategic_partners_name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $resSolution->strategic_partners_name }}</h5>
                                <p class="card-text mb-4">{{ \Str::limit($resSolution->strategic_partners_about,69) }}.</p>
                                <a href="{{ route('FrontEndStrategic.PartnersDetails',['strategic_id'=>$resSolution->id,'strategic_partner_name'=>$resSolution->strategic_partners_name]) }}" class="btn btn-warning text-light bg-secondary mt-auto align-self-start">&rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
        
        
        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <h3 class="text-uppercase border-bottom mb-4">Industrial and Warehouse Automation Solution</h3>
                </div>
            </div>
            <div class="row">
                <!--ADD CLASSES HERE d-flex align-items-stretch-->
                @foreach ($industrialSolution as $indkey => $industrySolution)
                    <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                        <div class="card">
                            <img src="{{ asset('public/image/about-us/strategic-partners') }}/{{ $industrySolution->strategic_partners_logo }}"
                                class="card-img-top" alt="{{ $industrySolution->strategic_partners_name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $industrySolution->strategic_partners_name }}</h5>
                                <p class="card-text mb-4">{{ \Str::limit($industrySolution->strategic_partners_about,69) }}.</p>
                                <a href="{{ route('FrontEndStrategic.PartnersDetails',['strategic_id'=>$industrySolution->id,'strategic_partner_name'=>$industrySolution->strategic_partners_name]) }}" class="btn btn-warning text-light bg-secondary mt-auto align-self-start">&rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>


        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <h3 class="text-uppercase border-bottom mb-4">Networking Systems</h3>
                </div>
            </div>
            <div class="row">
                
                @foreach ($networkingSystem as $networkKey => $networkingSystem)
                    <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                        <div class="card">
                            <img src="{{ asset('public/image/about-us/strategic-partners') }}/{{ $networkingSystem->strategic_partners_logo }}"
                                class="card-img-top" alt="{{ $networkingSystem->strategic_partners_name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $networkingSystem->strategic_partners_name }}</h5>
                                <p class="card-text mb-4">{{ \Str::limit($networkingSystem->strategic_partners_about,69) }}.</p>
                                <a href="{{ route('FrontEndStrategic.PartnersDetails',['strategic_id'=>$networkingSystem->id,'strategic_partner_name'=>$networkingSystem->strategic_partners_name]) }}" class="btn btn-warning text-light bg-secondary mt-auto align-self-start">&rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>

        

        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <h3 class="text-uppercase border-bottom mb-4">Closed Circuit Television</h3>
                </div>
            </div>
            <div class="row">
                
                @foreach ($CCTVSystem as $cckey => $CCTVSystem)
                    <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                        <div class="card">
                            <img src="{{ asset('public/image/about-us/strategic-partners') }}/{{ $CCTVSystem->strategic_partners_logo }}"
                                class="card-img-top" alt="{{ $CCTVSystem->strategic_partners_name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $CCTVSystem->strategic_partners_name }}</h5>
                                <p class="card-text mb-4">{{ \Str::limit($CCTVSystem->strategic_partners_about,69) }}.</p>
                                <a href="{{ route('FrontEndStrategic.PartnersDetails',['strategic_id'=>$CCTVSystem->id,'strategic_partner_name'=>$CCTVSystem->strategic_partners_name]) }}" class="btn btn-warning text-light bg-secondary mt-auto align-self-start">&rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>


        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <h3 class="text-uppercase border-bottom mb-4">PABX Systems</h3>
                </div>
            </div>
            <div class="row">
                <!--ADD CLASSES HERE d-flex align-items-stretch-->
                @foreach ($pbaxSystems as $pbaxkey => $pbaxSystems)
                    <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                        <div class="card">
                            <img src="{{ asset('public/image/about-us/strategic-partners') }}/{{ $pbaxSystems->strategic_partners_logo }}"
                                class="card-img-top" alt="{{ $pbaxSystems->strategic_partners_name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $pbaxSystems->strategic_partners_name }}</h5>
                                <p class="card-text mb-4">{{ \Str::limit($pbaxSystems->strategic_partners_about,69) }}.</p>
                                <a href="{{ route('FrontEndStrategic.PartnersDetails',['strategic_id'=>$pbaxSystems->id,'strategic_partner_name'=>$pbaxSystems->strategic_partners_name]) }}" class="btn btn-warning text-light bg-secondary mt-auto align-self-start">&rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>


        

        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <h3 class="text-uppercase border-bottom mb-4">Public Address Systems</h3>
                </div>
            </div>
            <div class="row">
                <!--ADD CLASSES HERE d-flex align-items-stretch-->
                @foreach ($PASystems as $payKey => $PASystems)
                    <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                        <div class="card">
                            <img src="{{ asset('public/image/about-us/strategic-partners') }}/{{ $PASystems->strategic_partners_logo }}"
                                class="card-img-top" alt="{{ $PASystems->strategic_partners_name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $PASystems->strategic_partners_name }}</h5>
                                <p class="card-text mb-4">{{ \Str::limit($PASystems->strategic_partners_about,69) }}.</p>
                                <a href="{{ route('FrontEndStrategic.PartnersDetails',['strategic_id'=>$PASystems->id,'strategic_partner_name'=>$PASystems->strategic_partners_name]) }}" class="btn btn-warning text-light bg-secondary mt-auto align-self-start">&rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>

        

        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <h3 class="text-uppercase border-bottom mb-4">Video Conference Systems</h3>
                </div>
            </div>
            <div class="row">
                <!--ADD CLASSES HERE d-flex align-items-stretch-->
                @foreach ($videoConferance as $vidKey => $videoConferance)
                    <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                        <div class="card">
                            <img src="{{ asset('public/image/about-us/strategic-partners') }}/{{ $videoConferance->strategic_partners_logo }}"
                                class="card-img-top" alt="{{ $videoConferance->strategic_partners_name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $videoConferance->strategic_partners_name }}</h5>
                                <p class="card-text mb-4">{{ \Str::limit($videoConferance->strategic_partners_about,69) }}.</p>
                                <a href="{{ route('FrontEndStrategic.PartnersDetails',['strategic_id'=>$videoConferance->id,'strategic_partner_name'=>$videoConferance->strategic_partners_name]) }}" class="btn btn-warning text-light bg-secondary mt-auto align-self-start">&rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>

        

        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <h3 class="text-uppercase border-bottom mb-4">Intruder / Burglar Alarm System</h3>
                </div>
            </div>
            <div class="row">
                <!--ADD CLASSES HERE d-flex align-items-stretch-->
                @foreach ($alermSystem as $alarmkey => $alermSystem)
                    <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                        <div class="card">
                            <img src="{{ asset('public/image/about-us/strategic-partners') }}/{{ $alermSystem->strategic_partners_logo }}"
                                class="card-img-top" alt="{{ $alermSystem->strategic_partners_name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $alermSystem->strategic_partners_name }}</h5>
                                <p class="card-text mb-4">{{ \Str::limit($alermSystem->strategic_partners_about,69) }}.</p>
                                <a href="{{ route('FrontEndStrategic.PartnersDetails',['strategic_id'=>$alermSystem->id,'strategic_partner_name'=>$alermSystem->strategic_partners_name]) }}" class="btn btn-warning text-light bg-secondary mt-auto align-self-start">&rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>


        

        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <h3 class="text-uppercase border-bottom mb-4">Baggage Scanner & Metal Detector</h3>
                </div>
            </div>
            <div class="row">
                <!--ADD CLASSES HERE d-flex align-items-stretch-->
                @foreach ($metalDetactor as $metalkey => $metalDetactor)
                    <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                        <div class="card">
                            <img src="{{ asset('public/image/about-us/strategic-partners') }}/{{ $metalDetactor->strategic_partners_logo }}"
                                class="card-img-top" alt="{{ $metalDetactor->strategic_partners_name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $metalDetactor->strategic_partners_name }}</h5>
                                <p class="card-text mb-4">{{ \Str::limit($metalDetactor->strategic_partners_about,69) }}.</p>
                                <a href="{{ route('FrontEndStrategic.PartnersDetails',['strategic_id'=>$metalDetactor->id,'strategic_partner_name'=>$metalDetactor->strategic_partners_name]) }}" class="btn btn-warning text-light bg-secondary mt-auto align-self-start">&rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>

        

        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <h3 class="text-uppercase border-bottom mb-4">Parking Management Systems</h3>
                </div>
            </div>
            <div class="row">
                <!--ADD CLASSES HERE d-flex align-items-stretch-->
                @foreach ($parkingSystem as $parkingKey => $parkingSystem)
                    <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                        <div class="card">
                            <img src="{{ asset('public/image/about-us/strategic-partners') }}/{{ $parkingSystem->strategic_partners_logo }}"
                                class="card-img-top" alt="{{ $parkingSystem->strategic_partners_name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $parkingSystem->strategic_partners_name }}</h5>
                                <p class="card-text mb-4">{{ \Str::limit($parkingSystem->strategic_partners_about,69) }}.</p>
                                <a href="{{ route('FrontEndStrategic.PartnersDetails',['strategic_id'=>$parkingSystem->id,'strategic_partner_name'=>$parkingSystem->strategic_partners_name]) }}" class="btn btn-warning text-light bg-secondary mt-auto align-self-start">&rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
        
        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <h3 class="text-uppercase border-bottom mb-4">Digital Hotel Lock Systems</h3>
                </div>
            </div>
            <div class="row">
                <!--ADD CLASSES HERE d-flex align-items-stretch-->
                @foreach ($digitalLock as $digitalKey => $digitalLock)
                    <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                        <div class="card">
                            <img src="{{ asset('public/image/about-us/strategic-partners') }}/{{ $digitalLock->strategic_partners_logo }}"
                                class="card-img-top" alt="{{ $digitalLock->strategic_partners_name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $digitalLock->strategic_partners_name }}</h5>
                                <p class="card-text mb-4">{{ \Str::limit($digitalLock->strategic_partners_about,69) }}.</p>
                                <a href="{{ route('FrontEndStrategic.PartnersDetails',['strategic_id'=>$digitalLock->id,'strategic_partner_name'=>$digitalLock->strategic_partners_name]) }}" class="btn btn-warning text-light bg-secondary mt-auto align-self-start">&rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>


        
    </section>

@endsection
