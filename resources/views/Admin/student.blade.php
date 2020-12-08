@extends('layouts.admin')

@section('content')


<br><br><br>
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="col-lg-12 margin-tb">
    <div class="pull-left"><h2> <br></h2></div>
    <div class="modal-bootstrap modal-login-form" style="background-color: #ec971f">
    <a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target=""></a>&nbsp;&nbsp;
    </div>

    <div class="modal-bootstrap modal-login-form" style="background-color: #a93e90">
    <a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target="#addprof">Ajouter un étudiant</a>&nbsp;&nbsp;
    </div>

    <div class="modal-bootstrap modal-login-form" style="background-color: #a93e90">
    <a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target="#addtuteur">Ajouter un tuteur</a>&nbsp;&nbsp;
    </div>

    &nbsp;&nbsp;&nbsp;&nbsp;
    <div class="pull-right">
        <a class="btn btn-primary" href="">Les étudiants</a>
    </div>

</div>
</div>
</div>

<div class="container-fluid">
 @if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
</div>

<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">

<div id="addtuteur" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-close-area modal-close-df">
<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
</div>
<div class="modal-body">
<div class="modal-login-form-inner">
<div class="row">

</div>
<div class="row">
  <form action="{{ route('tuteur.store') }}" method="post" enctype="multipart/form-data">

  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
     <div class="form-group">
    <select name="student_id" class="form-control">
        <option value="none" selected="" disabled="">Select Etudiant</option>
            @foreach ($students as $student)
            <option value="{{ $student->studentId }}"> {{ $student->name }} {{ $student->prenom }}</option>
            @endforeach
        </select>
    </div>

    <div class="row">

    <div class="form-group col-lg-6">
        <label>Nom du tuteur</label>
        <input id="name" type="text" class="form-control" name="nomtuteur">
    </div>
    <div class="form-group col-lg-6">
        <label>Prénom du tuteur</label>
       <input id="prenomT" type="text" class="form-control" name="prenomtuteur">
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-6">
        <label>Date de naissance</label>
        <input id="name" type="date" class="form-control" name="datetuteur">
    </div>
    <div class="form-group col-lg-6">
        <label>Lieu de naissance</label>
       <input id="lieututeur" type="text" class="form-control" name="lieututeur" >
    </div>
</div>
<div class="form-group">
    <label>Profession du tuteur</label>
   <input id="profession" type="text" class="form-control" name="profession" >
</div>

<div class="row">
    <div class="form-group col-lg-6">
    <label>Email tuteur</label>
    <input type="email" class="form-control" name="emailtuteur">
    </div>
    <div class="form-group col-lg-6">
        <label>Numéro téléphone tuteur</label>
        <input type="text" class="form-control" name="teltuteur">
    </div>
</div>
    <div class="form-group">
        <label>Adresse tuteur</label>
        <input type="text" class="form-control" name="addrtuteur">
    </div>

    <div class="form-group-inner">
        <button type="submit" class="btn btn-warning">
            {{ __('Ajouter un tuteur') }}
        </button>
    </div>

</form>
</div>
</div>
</div>
</div>
</div>
</div>


<div id="addprof" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-close-area modal-close-df">
<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
</div>
<div class="modal-body">
<div class="modal-login-form-inner">

<div class="row">
<div class="col-lg-12 col-md-5 col-sm-12 col-xs-12">
<div class="product-payment-inner-st">
<ul id="myTabedu1" class="tab-review-design">
<li class="active"><a href="#description">Utilisateur</a></li>
<li><a href="#other"> Etudiant info</a></li>
</ul>


<form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">

<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="review-content-section">
<div>


<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">


<div class="form-group">
    <label>{{ __('Nom étudiant') }}</label>
    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
</div>
<div class="form-group">
    <label>{{ __('Prénom étudiant') }}</label>
   <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
</div>

<div class="row">
<div class="form-group col-lg-6">
    <label>{{ __('Date de naissance') }}</label>
    <input type="date" class="form-control" name="datenaiss" required autocomplete="prenom" autofocus>
    </div>

    <div class="form-group col-lg-6">
        <label>{{ __('Lieu de naissance') }}</label>
        <input type="text" class="form-control" name="lieunaiss" required autocomplete="prenom" autofocus>
    </div>
</div>
<div class="form-group-inner" style="display: none;">
    <div class="row">
    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
    <label class="login2 pull-right pull-right-pro">Role</label>
    </div>
    <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
    <div class="form-select-list">
    <select class="form-control custom-select-value" name="role">
            <option value="Etudiant">Etudiant</option>
        </select>
    </div>
    </div>
    </div>
</div>

    @foreach ($Adminschool as $student)
     <div style="display: none;">
        <input type="text" value="{{$student->structId}}" name="structures_id" />
     </div>
    @endforeach
<div class="row">
<div class="form-group col-lg-6">
    <label>{{ __('Email étudiant') }}</label>
    <input type="email" class="form-control" name="email">
    </div>

    <div class="form-group col-lg-6">
        <label>{{ __('Numéro téléphone étudiant') }}</label>
        <input type="text" class="form-control" name="tel">
    </div>
</div>

    <div class="form-group">
        <label>{{ __('Adresse étudiant') }}</label>
        <input type="text" class="form-control" name="adresse">
    </div>
    


</div>



</div>
</div>
</div>
</div>
</div>
</div>
<div class="product-tab-list tab-pane fade in" id="other">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="review-content-section">
<div id="dropzone1" class="pro-ad">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div class="form-group">
    <select name="classe_id" class="form-control">
        <option value="none" selected="" disabled="">Select classe</option>
            @foreach ($Adminschool as $classe)
            <option value="{{ $classe->ClassId }}"> {{ $classe->classes_name }}</option>
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
<input type="file" name="image" onchange="document.getElementById('prepend-big-btn').value = this.value;">
</div>
<input type="text" id="prepend-big-btn" placeholder="Choisissez un profil">
</div>
</div>
</div>

<div class="form-group">
    <select name="sexe" class="form-control">
        <option value="none" selected="" disabled="">Sexe</option>
            <option value="Masculin">Masculin</option>
            <option value="Féminin">Féminin</option>

    </select>
</div>

<div class="form-group">
    <input name="matricule" type="text" class="form-control" placeholder="Matricule étudiant">
</div>

<div class="form-group">
        <label>{{ __('Mot de passe étudiant') }}</label>
        <input type="text" class="form-control" name="password">
    </div>

    
    </div>

</div>

</div>
</div>
</div>
</div>
</div>


<div class="product-tab-list tab-pane fade in" id="tuteur">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="review-content-section">
<div>

     <div class="form-group-inner">
        <button type="submit" class="btn btn-warning">
            {{ __('Ajouter étudiant') }}
        </button>
    </div>
</div>
</div>
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
</div>
</div>




<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="data-table-area mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="sparkline13-list">
<div class="sparkline13-hd">
<div class="main-sparkline13-hd">
<h1>Liste  <span class="table-project-n">des étudiants</span></h1>
</div>
</div>
<div class="sparkline13-graph">
<div class="datatable-dashv1-list custom-datatable-overright">
<div id="toolbar">
<select class="form-control dt-tb">
<option value="">Export Basic</option>
<option value="all">Export All</option>
<option value="selected">Export Selected</option>
</select>
</div>
<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
<thead>
<tr>
<th data-field="state" data-checkbox="true"></th>
<th data-field="id">ID</th>
<th data-field="email" data-editable="true">Nom</th>
<th data-field="phone" data-editable="true">Prénom(s)</th>
<th data-field="task" data-editable="true">Phone</th>
<th data-field="date" data-editable="true">Email</th>
<th data-field="action">Action</th>
</tr>
</thead>
<tbody>


 @foreach ($students as $etudiant)
<tr>
<td></td>
<td></td>
<td>{{ $etudiant->name}}</td>
<td>{{ $etudiant->prenom }}</td>
<td>{{ $etudiant->tel }}</td>
<td>{{ $etudiant->email }}</td>
<td><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
</tr>

@endforeach


</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


@endsection