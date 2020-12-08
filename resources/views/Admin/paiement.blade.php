@extends('layouts.admin')

@section('content')

<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="col-lg-12 margin-tb">
    <div class="pull-left"><h2> <br></h2></div>

</div>
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
<li><a href="#">Accueil</a> <span class="bread-slash">/</span>
</li>
<li><span class="bread-blod">Paiement</span>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>



        <!-- Static Table Start -->
<div class="row">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="data-table-area mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="sparkline13-list">
<div class="sparkline13-hd">
<div class="main-sparkline13-hd">
<h1>Liste  <span class="table-project-n">écoles</span> Table</h1>
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
<th>Nom</th>
<th>Prénom</th>
<th>Montant</th>
<th>Banque</th>
<th data-field="action">Action</th>
</tr>
</thead>
<tbody>
 @foreach ($Student as $data)
<tr>
<td></td>
<td></td>
<td></td>
<td>{{ $data['montant'] }}</td>
<td></td>
<td class="datatable-ct"><i class="fa fa-check"></i>
</td>
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
<!-- Static Table End -->

@endsection