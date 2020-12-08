@extends('layouts.admin')

@section('content')


<br><br><br>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="data-table-area mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="sparkline13-list">
<div class="sparkline13-hd">
<div class="main-sparkline13-hd">
<h1>Liste  <span class="table-project-n">des tuteurs</span></h1>
</div>
</div>
<div class="container-fluid">
 @if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
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
<th>Nom</th>
<th>Prénom</th>
<th>Téléphone</th>
<th>Adresse</th>
<th>Email</th>
<th data-field="action">Action</th>
</tr>
</thead>
<tbody>


@foreach ($Tuteurs as $tuteur)
<tr>
<td></td>
<td></td>
<td>{{ $tuteur->name}}</td>
<td>{{ $tuteur->prenom}}</td>
<td>{{ $tuteur->tel}}</td>
<td>{{ $tuteur->adresse}}</td>
<td>{{ $tuteur->email}}</td>
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



