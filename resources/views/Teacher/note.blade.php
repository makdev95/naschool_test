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
        <a type="button" class="btn btn-custon-rounded-four btn-default" href="{{ route('Professeur.home') }}" href=""> <i class="fa fa-home edu-home-admin" aria-hidden="true"></i> Retour</a>

        <a href="{{ route('Professeur.home') }}" class="btn btn-warning">Mon espace professeur</a>
        
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
<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
<div class="product-payment-inner-st">
<ul id="myTabedu1" class="tab-review-design">
<li class="active"><a href="#description">Noter vos élèves</a></li>
<li><a href="#INFORMATION"></a></li>
</ul>
<form method="POST" action="{{ route('evaluation.store') }}" enctype="multipart/form-data">
@csrf

<div class="row">

    <div class="form-group col-lg-12">
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
    <select name="etudiant" class="form-control">
        <option value="none" selected="" disabled="">Noter sur cet élève</option>
            @foreach ($ClasseEtudiant as $etudiant)
            <option value="{{$etudiant->etudiantId}}">{{ $etudiant->name }} {{ $etudiant->prenom }}</option>
            @endforeach
    </select>
    </div>

    <div class="form-group col-lg-12">
        <label></label>
    <div class="form-select-list">
    <select class="form-control custom-select-value" name="fichiers_id">
        @foreach ($ProfCours as $cours)
        <option value="{{ $cours->courId }}">{{ $cours->title }}</option>
        @endforeach
        </select>
    </div>
    </div>

    <div class="form-group col-lg-12">
        <label>{{ __('Note') }}</label>
        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="note" value="{{ old('title') }}" required autocomplete="title" autofocus>
    </div>

    <input id="title" type="text"  name="prof_id" value="{{ Auth::user()->id }}" style="display: none;">


    <div class="form-group col-lg-12">
        <label>{{ __('Observation') }}</label>
        <input id="description" type="text" class="form-control @error('Observation') is-invalid @enderror" name="observ" value="{{ old('description') }}" required autocomplete="description" autofocus>
    </div>
    
</div>


<div class="form-group row mb-0">
<div class="col-md-6 offset-md-4">
    <button type="submit" class="btn btn-primary">
        {{ __('Noter') }}
    </button>
</div>
</div>
</form>
        </div>
    </div>


<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="data-table-area mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="sparkline13-list">
<div class="sparkline13-hd">
<div class="main-sparkline13-hd">
<h1>  <span class="table-project-n"></span></h1>
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
<table id="table" data-toggle="table" data-pagination="true" data-search="true"  data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
<thead>
<tr>
<th data-field="state" data-checkbox="true"></th>
<th data-field="id">ID</th>
<th data-field="email" data-editable="true">Classe</th>
<th data-field="email" data-editable="true">Etudiant</th>
<th data-field="phone" data-editable="true">Note</th>
<th data-field="action">Action</th>
</tr>
</thead>
<tbody>


<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
</tr>




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