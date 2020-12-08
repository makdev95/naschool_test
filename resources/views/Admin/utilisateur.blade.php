@extends('layouts.admin')

@section('content')


<br><br><br>  


<div class="container-fluid">
 @if ($message = Session::get('user'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif
</div>
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">
	 <div class="col-lg-12 margin-tb">
    <div class="pull-left"><h2> <br></h2></div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('person.create') }}"> Ajouter un utilisateur</a>
    </div>

</div>
<div class="breadcome-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="breadcome-list">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="breadcome-heading">
<form role="search" class="sr-input-func">
<input type="text" placeholder="Recherche..." class="search-int form-control">
<a href="#"><i class="fa fa-search"></i></a>
</form>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<ul class="breadcome-menu">
<li><a href="#">Home</a> <span class="bread-slash">/</span>
</li>
<li><span class="bread-blod">Utilisateurs</span>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="container-fluid">

<div class="row">

<div class="contacts-area mg-b-15">
<div class="container-fluid">
     
<div class="row">
    @foreach ($Person as $person)
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

    <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30">
<div class="panel-body custom-panel-jw">

<img class="img-circle m-b" src="{{ URL::to('/') }}/img/{{ $person->photo }}" width="75">
<h3><a href="{{ route('person.show', [$person->iduser])}}">Nom: {{ $person->nom }}</a></h3>
<p class="all-pro-ad">{{ $person->address }}</p>
<p>Email: {{ $person->email }}</p>
<p>Sexe: {{ $person->sexe }}</p>
<p>{{ $person->nationalite }}</p>
</div>
<div class="panel-footer contact-footer">
<div class="professor-stds-int">
<div class="professor-stds">
<div class="contact-stat"><span>Likes: </span> <strong>956</strong></div>
</div>
<div class="professor-stds">
<div class="contact-stat"><span>Comments: </span> <strong>350</strong></div>
</div>
<div class="professor-stds">
<div class="contact-stat"><span>Views: </span> <strong>450</strong></div>
</div>
</div>
</div>
</div>

</div>
@endforeach
</div>
 
</div>
</div>



@endsection