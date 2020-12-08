@extends('layouts.prof')

@section('content')


<!-- Mobile Menu end -->
<br>
<br>
<br>
<div class="breadcome-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="breadcome-list">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="breadcome-heading">
<form role="search" class="sr-input-func">
<input type="text" placeholder="Recherche matière" class="search-int form-control">
<a href="#"><i class="fa fa-search"></i></a>
</form>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<ul class="breadcome-menu">
<li><a href="#">Accueil</a> <span class="bread-slash">/</span>
</li>
<li><span class="bread-blod">Mes matières</span>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="courses-area">
<div class="container-fluid">
<div class="row">

@foreach($matieres as $matiere)
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="courses-inner res-mg-b-30">
<div class="courses-title">
<a href="/Naschool/Etudiant/Learning/Comptabilite"><img src="{{ asset('img/courses/1.jpg') }}" alt=""></a>
<h2>{{$matiere->matiereLib}}</h2>
</div>
<div class="courses-alaltic">
<span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
<span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
<span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
</div>
<div class="course-des">
<p><span><i class="fa fa-clock"></i></span> <b>Etudiants:</b> 5</p>
</div>
<div class="product-buttons">
<button type="button" class="button-default cart-btn">Détails</button>
</div>
</div>
</div>
@endforeach
</div>
</div>
</div>

@endsection