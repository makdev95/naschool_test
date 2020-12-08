@extends('layouts.admin')

@section('content')


<br><br><br>


<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">
	<div class="col-lg-12 margin-tb">
    <div class="pull-left"><h2> <br></h2></div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('teacher.index') }}"> Voir</a>
    </div>

    </div>
<div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
<div class="product-payment-inner-st">
<ul id="myTabedu1" class="tab-review-design">
<li class="active"><a href="#description">Utilisateur</a></li>
<li><a href="#other"> Info Enseignant</a></li>
</ul>
<form action="{{route('teacher.store')}}" method="post" enctype="multipart/form-data">
<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="review-content-section">
<div>


<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="row">

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="form-group">
     
    <select name="role" class="form-control">
        <option value="2">Professeur</option>
        </select>
    
</div>
<div class="form-group">
    <input name="nom" type="text" class="form-control" placeholder="Nom enseignant">
</div>
<div class="form-group">
    <input name="prenom" type="text" class="form-control" placeholder="Prénom enseignant">
</div>
<div class="form-group">
    <input name="email" type="text" class="form-control" placeholder="Addresse mail étudiant">
</div>
<div class="form-group">
<div class="file-upload-inner ts-forms">
<div class="input prepend-big-btn">
<label class="icon-right" for="prepend-big-btn">
<i class="fa fa-download"></i>
</label>
<div class="file-button">
Browse
<input type="file" name="image" onchange="document.getElementById('prepend-big-btn').value = this.value;">
</div>
<input type="text" id="prepend-big-btn" placeholder="Choisissez un profil enseignant">
</div>
</div>
</div>
<div class="form-group">
    <input name="phone" type="number" class="form-control" placeholder="Phone number étudiant">
</div>
<div class="form-group">
    <input name="dob" type="date" class="form-control" placeholder="Date de naissance de l'enseignant">
</div>

<div class="form-group">
    <input name="country" type="text" class="form-control" placeholder="Nationaité de l'enseignant">
</div>
<div class="form-group">
    <input name="adresse" type="text" class="form-control" placeholder="Adresse enseignant">
</div>
<div class="form-group">
     
    <select name="sexe" class="form-control">
        <option value="none" selected="" disabled="">Select gender</option>
        <option value="1">M</option>
        <option value="2">F</option>
        </select>
    
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="product-tab-list tab-pane fade active in" id="other">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="review-content-section">
<div id="dropzone1" class="pro-ad">


<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<div class="form-group">
     
    <select name="school" class="form-control">
        <option value="none" selected="" disabled="">Select school</option>
        @foreach ($School as $school)
            
            <option value="{{ $school->idstructure }}">{{ $school->schoolName }}</option>
          @endforeach 
        </select>
    
</div>

<div class="form-group" style="display: none;">
     
    <select name="cour" class="form-control">
        <option value="none" selected="" disabled="">Select cours</option>
        @foreach ($Cours as $cours)
            <option value="{{ $cours->idcours }}">{{ $cours->libelle_cour }}</option>
          @endforeach
        </select>
    
</div>


<div class="form-group">
<div class="file-upload-inner ts-forms">
<div class="input prepend-big-btn">
<label class="icon-right" for="prepend-big-btn">
<i class="fa fa-download"></i>
</label>
<div class="file-button">
Browse
<input type="file" name="cv" onchange="document.getElementById('prepend-big-btn').value = this.value;">
</div>
<input type="text" id="prepend-big-btn" placeholder="CV">
</div>
</div>
</div>
<div class="form-group">
    <textarea name="desc" class="form-control" placeholder="Description du professeur"></textarea>
</div>
<div class="form-group">
    <input name="code" type="text" class="form-control" placeholder="Create code">
</div>

<div class="form-group">
    <input name="passw" type="text" class="form-control" placeholder="Create password">
</div>

<div class="">
    <button type="submit" class="btn btn-primary waves-effect waves-light">Terminer</button>
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

@endsection