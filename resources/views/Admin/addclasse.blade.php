@extends('layouts.admin')

@section('content')


<br><br><br>
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="col-lg-12 margin-tb">
    <div class="pull-left"><h2> <br></h2></div>
    <div class="pull-right">
        <a class="btn btn-primary" href="">Classes</a>
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
<li class="active"><a href="#description">Informations classe</a></li>
<li><a href="#INFORMATION"></a></li>
</ul>

<form method="POST" action="{{ route('classe.store') }}">
@csrf

<div class="row">
    <div class="form-group col-lg-12">
        <label></label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nom de classe" autofocus>
    </div>
    <div class="form-group col-lg-12">
        <label>{{ __('Frais annuel') }}</label>
        <input id="prenom" type="text" class="form-control @error('montant') is-invalid @enderror" name="montant" value="{{ old('montant') }}" required autocomplete="montant" autofocus>
    </div>
    <div class="form-group-inner">
    
    <div class="col-lg-6 col-md-9 col-sm-9 col-xs-12">
        <label>Spécialité</label>
    <div class="form-select-list">
    <select class="form-control custom-select-value">
            @foreach ($specialites as $spe)
            <option value="{{ $spe->id }}">{{ $spe->type }}</option>
            @endforeach
        </select>
    </div>
    </div>

    <div class="col-lg-6 col-md-9 col-sm-9 col-xs-12">
        <label>Niveau</label>
    <div class="form-select-list">
    <select class="form-control custom-select-value" name="niveauspe_id">
            @foreach ($Niveau as $niveau)
            <option value="{{ $niveau->niveauspeId }}">{{ $niveau->cycleLib }}</option>
            @endforeach
        </select>
    </div>
    </div>

    </div>
    @foreach ($Adminschool as $school)
    <input id="structures_id" type="text" name="structures_id" value="{{$school->structId}}" style="display: none;">
    @endforeach
    
    
    
</div>
    <button type="submit" class="btn btn-warning">
            {{ __('Ajouter étudiant') }}
        </button>

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
<h1>Liste des <span class="table-project-n">Classes</span></h1>
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
<th data-field="email" data-editable="true">Classe</th>
<th data-field="date" data-editable="true">Frais d'étude</th>
<th data-field="action">Action</th>
</tr>
</thead>
<tbody>

 @foreach ($Adminschool as $classe)
<tr>
<td></td>
<td>{{ $classe->classesId}}</td>
<td>{{ $classe->classes_name}}</td>
<td>{{ $classe->montant }}</td>
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