@extends('layouts.prof')

@section('content')

<br>
<br>
<br>
<style type="text/css">
	
	.btn-wt{
		color: #fff;
	}
</style>
             
<div class="widget-program-box mg-tb-30">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="hpanel widget-int-shape responsive-mg-b-30">
<div class="panel-body">
<div class="text-center content-box">
<h2 class="m-b-xs">Mes cours</h2>

<div class="m icon-box">
<i class="educate-icon educate-star-half"></i>
</div>

<a href="{{ route('Professeur.cours') }}" class="btn btn-warning widget-btn-1 btn-sm"><span class="btn-wt">Voir</span></a>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="hpanel widget-int-shape responsive-mg-b-30">
<div class="panel-body">
<div class="text-center content-box">
<h2 class="m-b-xs">Excercies</h2>

<div class="m icon-box">
<i class="educate-icon educate-miscellanous"></i>
</div>
<a href="{{ route('Professeur.exercice') }}" class="btn btn-warning widget-btn-1 btn-sm"><span class="btn-wt">Voir</span></a>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="hpanel widget-int-shape responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
<div class="panel-body">
<div class="text-center content-box">
<h2 class="m-b-xs">Solutions</h2>
<div class="m icon-box">
<i class="educate-icon educate-interface"></i>
</div>
<a href="{{ route('Professeur.solution') }}" class="btn btn-warning widget-btn-1 btn-sm"><span class="btn-wt">Voir</span></a>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="hpanel widget-int-shape res-tablet-mg-t-30 dk-res-t-pro-30">
<div class="panel-body">
<div class="text-center content-box">
<h2 class="m-b-xs">Note évaluations</h2>

<div class="m icon-box">
<i class="educate-icon educate-charts"></i>
</div>
<a href="{{ route('Professeur.note') }}" class="btn btn-warning widget-btn-1 btn-sm"><span class="btn-wt">Voir</span></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection