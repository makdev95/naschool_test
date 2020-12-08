@extends('layouts.admin')

@section('content')


<br><br><br>  




 <div class="col-lg-12 margin-tb">
    <div class="pull-left"><h2> <br></h2></div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('person.index') }}"> Retour</a>
    </div>
     <form action="{{ route('person.destroy', [$person->iduser]) }}" method="post">
    <div class="pull-left">
        <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button class="btn btn-danger" type="submit"> Supprimer cet utilisateur</button>
    </div>
</form>

</div>

<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="profile-info-inner">
<div class="profile-img">
<img src="{{ URL::to('/') }}/img/{{ $person->photo }}" alt="" />
</div>
<div class="profile-details-hr">
<div class="row">
<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
<div class="address-hr">
<p><b>Name</b><br /> {{ $person->nom }}</p>
</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
<div class="address-hr tb-sm-res-d-n dps-tb-ntn">
<p><b>Designation</b><br /> Head of Dept.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
<div class="address-hr">
<p><b>Email ID</b><br /> {{ $person->email }}</p>
</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
<div class="address-hr tb-sm-res-d-n dps-tb-ntn">
<p><b>Phone</b><br /> {{ $person->phone }}</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="address-hr">
<p><b>Address</b><br /> {{ $person->address }}</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<div class="address-hr">
<a href="#"><i class="fa fa-facebook"></i></a>
<h3>500</h3>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<div class="address-hr">
<a href="#"><i class="fa fa-twitter"></i></a>
<h3>900</h3>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<div class="address-hr">
<a href="#"><i class="fa fa-google-plus"></i></a>
<h3>600</h3>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
<div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
<ul id="myTabedu1" class="tab-review-design">
    <li><a href="#INFORMATION">Modifier profil</a></li>
<li><a href="#description">Activity</a></li>
<li><a href="#reviews"> Biography</a></li>

</ul>
<div id="myTabContent" class="tab-content custom-product-edit">


<div class="product-tab-list tab-pane fade" id="INFORMATION">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="review-content-section">
<div class="row">
    <form action="{{route('person.update', [$person->iduser])}}" method="post">
<div class="col-lg-6">
    <div class="form-group">
    <input name="nom" type="text" value="{{ $person->nom }}" class="form-control">
    </div>
    <input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <input name="prenom" type="text" class="form-control" value="{{ $person->prenom }}">
    </div>
    <div class="form-group">
        <input name="email" type="text" class="form-control" value="{{ $person->email }}">
    </div>
    <div class="form-group">
        <input name="phone" type="number" class="form-control" value="{{ $person->phone }}">
    </div>
    <div class="form-group">
        <input name="dob" type="date" class="form-control" placeholder="Date de naissance">
    </div>
    <div class="form-group">
     
    <select name="sexe" class="form-control">
        <option value="none" selected="" disabled="">Select gender</option>
        <option value="1">M</option>
        <option value="2">F</option>
        </select>
    
</div>
</div>
<div class="col-lg-6">
    <div class="form-group alert-up-pd">
<input name="image" type="file" class="form-control">
</div>

<div class="form-group">
    <input name="country" type="text" class="form-control" value="{{ $person->nationalite }}">
</div>
<div class="form-group">
    <input name="adresse" type="text" class="form-control" value="{{ $person->address }}">
</div>

<div class="form-group">
     
    <select name="school" class="form-control">
        <option value="none" selected="" disabled="">Select school</option>
        @foreach ($School as $school)
            
            <option value="{{ $school->idstructure }}">{{ $school->schoolName }}</option>
          @endforeach 
        </select>
    
</div>

</div>
<div class="row">
<div class="col-lg-12">
<div class="payment-adress mg-t-15">
<button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Valider</button>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection