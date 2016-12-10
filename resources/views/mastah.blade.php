@extends('layouts.main')
@section('title', 'Mastah')
@section('content')

  <div class="main-content">
    <div class="page-header">
      <div class="header-left-panel">
        <!--  Title Page -->
        <h1 class="page-title">Profil Mastah</h1>
        <!--  Breadcrumb Section -->
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">Home</a></li>
          <li class="text-info">Mastah</li>
          <li class="active">{{'@' . Auth::user()->nickname}}</li>
        </ol>
      </div>
    </div>

<div class="col-lg-8 col-xs-12 col-md-12">
  <div class="widgett-header cover padding-0 overlap">
    <img class="image-cover" src="{{URL::asset(Auth::user()->cover)}}" alt="Cover Images">
    <div class="widgett-info v-align">
      <div class="align-middle padding-15">
        <div class="inner-middle">
          <a href="javascript:void(0)" class="avatar avatar-lg80 avatar-xs-lg">
          <img src="{{Auth::user()->avatar}}" alt="Profile Images">
          </a>
          <h3 class="margin-bottom-0 margin-top-20 margin-top-xs-5">{{Auth::user()->name}}</h3>
          <span class="pull-left width-100">{{'@' . Auth::user()->nickname}}</span><br>
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="widgett-footer text-center">
        <div class="social-follow">
          <ul class="padding-10">
            <li><a href="javascript:void(0)"><span><i class="fa fa-newspaper-o red"></i></span> <span class="text-muted">12</span></a></li>
            <li><a href="javascript:void(0)"><span><i class="fa fa-film green"></i> </span><span class="text-muted">12</span></a></li>
            <li><a href="javascript:void(0)"><span><i class="fa fa-graduation-cap blue"></i> </span><span class="text-muted">12</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4 col-xs-12 col-md-12">
  <div class="panel top-profile skill-profile margin-bottom-25">
    <div class="panel-body">
      <h4 class="list-title">Personal Information</h4>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
          <div class="first-name-profile">
            <span class="text-name-profile text-info">Name : </span>
            <span class="detail-profile">{{Auth::user()->name}}</span>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-xs-12">
          <div class="first-name-profile">
            <span class="text-name-profile text-info">Email : </span>
            <span class="detail-profile">{{Auth::user()->email}}</span>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-xs-12">
          <div class="first-name-profile">
            <span class="text-name-profile text-info">Nickname : </span>
            <span class="detail-profile">{{'@' . Auth::user()->nickname}}</span>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-xs-12">
          <div class="first-name-profile">
            <span class="text-name-profile text-info">Adress : </span>
            <span class="detail-profile">{{Auth::user()->address}}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
