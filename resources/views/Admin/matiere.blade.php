@extends('layouts.admin')

@section('content')


<br><br><br>
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="col-lg-12 margin-tb">
    <div class="pull-left"><h2> <br></h2></div>
    <div class="pull-right">
        <a class="btn btn-primary" href="">Création des cours</a>
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
@foreach ($Adminschool as $matiere)
@endforeach
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
<div class="product-payment-inner-st">
<ul id="myTabedu1" class="tab-review-design">
<li class="active"><a href="#description">Remplir svp</a></li>
<li><a href="#INFORMATION"></a></li>
</ul>
<form method="POST" action="{{ route('matiere.store') }}">
@csrf

<div class="row">
    <div class="form-group col-lg-12">
        <label>{{ __('Nom du cour') }}</label>
        <input id="libelle" type="text" class="form-control @error('libelle') is-invalid @enderror" name="libelle" value="{{ old('libelle') }}" required autocomplete="matiere" autofocus>
    </div>
    <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
    <div class="form-select-list">
    <select name="niveau" class="form-control">
        <option value="none" selected="" disabled="">Choisir niveau</option>
        @foreach ($Niveau as $niveau)
            
            <option value="{{ $niveau->niveauId }}">{{ $niveau->niveauId }} {{ $niveau->cycleLib }} - {{ $niveau->NiveauLib }}</option>
          @endforeach 
        </select>
    </div>
    </div>

    <div style="display: none;">

    <input id="profId" type="text" name="niveau" value="{{ $matiere->profId }}" >
    <input id="classesId" type="text" name="niveau" value="{{ $matiere->classesId }}">

    </div>

</div>

<br><br>
<div class="form-group row mb-0">
<div class="col-md-6 offset-md-4">
    <button type="submit" class="btn btn-warning">
        {{ __('Ajouter') }}
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
<h1>Liste  <span class="table-project-n">matières</span></h1>
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
<th data-field="email" data-editable="true">Matière</th>
<th data-field="phone" data-editable="true">Niveau</th>
<th data-field="action">Action</th>
</tr>
</thead>
<tbody>

 @foreach ($Adminschool as $matiere)
<tr>
<td></td>
<td>{{ $matiere->matiereId}}</td>
<td>{{ $matiere->matiereLib}}</td>
<td>{{ $matiere->matiereNiv }}</td>
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






                </div>
            </div>
        </div>

        

@endsection