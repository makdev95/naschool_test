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
<li><span class="bread-blod">Classe/</span>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="col-lg-12 margin-tb">
    <div class="pull-left"><h2> <br></h2></div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('classroom.create') }}"> Ajouter une classe</a>
    </div>

    </div>

<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">

<div class="row">

<div class="col-lg-10 col-md-6 col-sm-12 col-xs-12">
<div class="data-table-area mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="sparkline13-list">
<div class="sparkline13-hd">
<div class="main-sparkline13-hd">
<h1>Liste  <span class="table-project-n">Les classes</span></h1>
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
<th data-field="id">ID classe</th>
<th data-field="name" data-editable="true">Classe</th>
<th data-field="email" data-editable="true">Code</th>
<th data-field="action">Action</th>
</tr>
</thead>
<tbody>
 @foreach ($Classroom as $data)
<tr>
<td></td>
<td>{{ $data->idclassroom }}</td>
<td>{{ $data->classLibelle }}</td>
<td>{{ $data->classCode }}</td>
<td><a href="#" class="btn btn-primary text-white ">Edit</a>
        <a href ='#' class="btn btn-danger text-white ">Delete</a></td>
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

<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
<div class="product-payment-inner-st">
<ul id="myTabedu1" class="tab-review-design">
<li class="active"><a href="#description">Classe</a></li>
<li><a href="#reviews"></a></li>
</ul>
<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="review-content-section">
<div id="dropzone1" class="pro-ad addcoursepro">
<form action="{{route('classroom.store')}}" method="post" enctype="multipart/form-data">

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="form-group">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input name="classroom" type="text" class="form-control" placeholder="Nom de la classe">
</div>

<div class="form-group">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input name="code" type="text" class="form-control" placeholder="code">
</div>

<div class="form-group">
     
    <select name="school" class="form-control">
        <option value="none" selected="" disabled="">Select school</option>
        @foreach ($Adminschool as $school)
            <option value="{{ $school->idstructure }}">{{ $school->struct_name }}</option>
          @endforeach
        </select>
    
</div>

</div>

</div>
<div class="row">
<div class="col-lg-12">
<div class="payment-adress">
<button type="submit" class="btn btn-primary waves-effect waves-light">Ajouter</button>
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
<!-- Static Table End -->

@endsection