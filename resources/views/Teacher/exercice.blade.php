@extends('layouts.prof')

@section('content')

@foreach($Professeur as $professeur)
{}
@endforeach

<br><br><br>

<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="col-lg-12 margin-tb">
    <div class="pull-left"><h2> <br></h2></div>
    <div class="pull-right">
        <a type="button" class="btn btn-custon-rounded-four btn-default" href="{{ route('Professeur.home') }}" href=""><i class="fa fa-home edu-home-admin" aria-hidden="true"></i> Retour</a>

        <a class="btn btn-warning" href="{{ route('Professeur.VoirCours') }}"></a>
        
    </div>

</div>
</div>
</div>

<div class="container-fluid">
 @if ($message = Session::get('status'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif
</div>

<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
<div class="product-payment-inner-st">
<ul id="myTabedu1" class="tab-review-design">
<li class="active"><a href="#description">Envoie exercice</a></li>
<li><a href="#INFORMATION"></a></li>
</ul>
<form method="POST" action="{{ route('Professeur.addcours') }}" enctype="multipart/form-data">
@csrf

<div class="row">
    <div class="col-lg-6 col-md-9 col-sm-9 col-xs-12">
        <label>Classe</label>
    <div class="form-select-list">
    <select class="form-control custom-select-value" name="classesId">
            @foreach ($ProfesseurClasse as $prof)
            <option value="{{ $prof->classesId }}">{{ $prof->classes_name }} </option>
            @endforeach
        </select>
    </div>
    </div>
    
    <div class="form-group col-lg-12">
        <label></label>
    <div class="form-select-list">
    <select class="form-control custom-select-value" name="typefichier_id">
        @foreach ($TypeFichier as $typeFichier)
        <option value="{{ $typeFichier->id }}">{{ $typeFichier->libelle }}</option>
        @endforeach
        </select>
    </div>
    </div>

    <br><br>
    <div class="form-group col-lg-12">
        <label>{{ __('Nom de l\'exercice') }}</label>
        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
    </div>
    <input id="title" type="text"  name="prof_id" value="{{ Auth::user()->id }}" style="display: none;">

    <input id="title" type="text"  name="clasproId" value="{{ $professeur->clasproId }}" style="display: none;">

    <div class="form-group col-lg-12">
        <label>{{ __('Instructions') }}</label>
        <input id="description" type="text" class="form-control @error('prenom') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
    </div>

    <div class="form-group col-lg-12">
<div class="file-upload-inner ts-forms">
<div class="input prepend-big-btn">
<label class="icon-right" for="prepend-big-btn">
<i class="fa fa-download"></i>
</label>
<div class="file-button">
Upload
<input type="file" name="image" onchange="document.getElementById('prepend-big-btn').value = this.value;">
</div>
<input type="text" id="prepend-big-btn" placeholder="Choisissez un fichier">
</div>
</div>
</div>
    
</div>


<div class="form-group row mb-0">
<div class="col-md-6 offset-md-4">
    <button type="submit" class="btn btn-warning">
        {{ __('Envoyer votre exercice') }}
    </button>
</div>
</div>
</form>
        </div>
    </div>



<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
        <div class="data-table-area mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="sparkline13-list">
<div class="sparkline13-hd">
<div class="main-sparkline13-hd">
<h1>Les  <span class="table-project-n">exercices</span></h1>
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
data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
<thead>
<tr>

<th>Exercice</th>
<th>Fichier</th>
<th>Date créée</th>
<th data-field="action">Action</th>
</tr>
</thead>
<tbody>

@foreach($Exercice as $exercice)
<tr>
<td>{{ $exercice->title }}</td>
<td><a href="URL::to('/') }}/{{ $exercice->image }}"></a></td>
<td>{{ $exercice->daterecept }}</td>
<td></td>
<td><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="Supprimer"></i></button></td>
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


</div>
</div>
</div>

@endsection