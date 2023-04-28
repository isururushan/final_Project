@extends('layouts.directorApp')
@section('title')
    Dashboard
@stop
@section('pageHeader')
    Dashboard
@stop
@section('content')
<div class="row">
    <div class="col-md-6 col-sm-6">
        <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                    <div class="icon"><i class="fa fa-user"></i></div><strong>Fishermens</strong>
                </div>
                <div class="number dashtext-1">{{count($fishermens)}}</div>
            </div>
            <div class="progress progress-template">
                <div role="progressbar" style="width: {{(count($fishermens)/count($fishermens))*100}}%" aria-valuenow="{{(count($fishermens)/count($fishermens))*100}}" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-sm-6">
        <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                    <div class="icon"><i class="fa fa-user"></i></div><strong>Assistant Directers</strong>
                </div>
                <div class="number dashtext-1">{{count($asdis)}}</div>
            </div>
            <div class="progress progress-template">
                <div role="progressbar" style="width: {{(count($asdis)/count($asdis))*100}}%" aria-valuenow="{{(count($asdis)/count($asdis))*100}}" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-sm-6">
        <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                    <div class="icon"><i class="fa fa-user"></i></div><strong>Do Officers</strong>
                </div>
                <div class="number dashtext-1">{{count($dofficers)}}</div>
            </div>
            <div class="progress progress-template">
                <div role="progressbar" style="width: {{(count($dofficers)/count($dofficers))*100}}%" aria-valuenow="{{(count($dofficers)/count($dofficers))*100}}" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-sm-6">
        <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                    <div class="icon"><i class="fa fa-ship"></i></div><strong>Boats</strong>
                </div>
                <div class="number dashtext-1">{{count($boats)}}</div>
            </div>
            <div class="progress progress-template">
                <div role="progressbar" style="width: {{(count($boats)/count($boats))*100}}%" aria-valuenow="{{(count($boats)/count($boats))*100}}" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-sm-6">
        <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                    <div class="icon"><i class="fa fa-id-card"></i></div><strong>national licenses</strong>
                </div>
                <div class="number dashtext-1">{{count($national_licenses)}}</div>
            </div>
            <div class="progress progress-template">
                <div role="progressbar" style="width: {{(count($national_licenses)/count($national_licenses))*100}}%" aria-valuenow="{{(count($national_licenses)/count($national_licenses))*100}}" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
            </div>
        </div>
    </div>
</div>
@stop
