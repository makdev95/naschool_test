@extends('layouts.super')

@section('content')


<br><br><br>
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="col-lg-12 margin-tb">
    <div class="pull-left"><h2> <br></h2></div>
    <div class="pull-right">
        <a class="btn btn-primary" href=""> Panel des écoles</a>
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
<li class="active"><a href="#description">Informations écoles</a></li>
<li><a href="#INFORMATION"> Admin école</a></li>
</ul>
<form action="{{ route('Structure.store') }}" method="post">
<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="review-content-section">
<div id="dropzone1" class="pro-ad">


<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
<div class="form-group">
    <input name="nom" type="text" class="form-control" placeholder="nom établissement">
</div>
<div class="form-group">
    <input name="code" type="text" class="form-control" placeholder="Code de la structure">
</div>
<div class="form-group">
    <input name="adresse" type="text" class="form-control" placeholder="Addresse école">
</div>
<div class="form-group">
    <input name="tel" type="text" class="form-control" placeholder="Numéro de téléphone">
</div>
<div class="form-group">
    <input name="email" type="text" class="form-control" placeholder="Adresse email">
</div>


</div>
</div>



</div>
</div>
</div>
</div>
</div>

<div class="product-tab-list tab-pane fade" id="INFORMATION">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="review-content-section">
<div class="row">
<div class="col-lg-12">
<div class="devit-card-custom">
<div class="form-group">
<input type="text" name="name" class="form-control" placeholder="Nom administrateur">
</div>
<div class="form-group">
<input type="text" name="prenom" class="form-control" placeholder="Prénom administrateur">
</div>
<div class="form-group">
<input type="email" name="email_admin" class="form-control" placeholder="email administrateur">
</div>
<div class="form-group">
<input type="text" name="tel_admin" class="form-control" placeholder="Numéro téléphone administrateur">
</div>
<div class="form-group">
<input type="text" name="adresse_admin" class="form-control" placeholder="Adresse administrateur">
</div>
<input type="text" name="role" class="form-control" value="Admin" style="display: none;">
<div class="form-group">

<input type="text" name="password" class="form-control" placeholder="Créer un mot de passe administrateur">
</div>

<div class="">
    <button type="submit" class="btn btn-primary waves-effect waves-light">Confirmer</button>
</div>


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

<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="data-table-area mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="sparkline13-list">
<div class="sparkline13-hd">
<div class="main-sparkline13-hd">
<h1>Liste  <span class="table-project-n">écoles</span></h1>
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
<th data-field="name" data-editable="true">Nom école</th>
<th data-field="email" data-editable="true">Code</th>
<th data-field="phone" data-editable="true">Adresse</th>
<th data-field="task" data-editable="true">Phone</th>
<th data-field="date" data-editable="true">Email</th>
<th data-field="action">Action</th>
</tr>
</thead>
<tbody>
 @foreach ($School as $data)
<tr>
<td></td>
<td>{{ $data->struct_name }}</td>
<td>{{ $data->code }}</td>
<td>{{ $data->adresse }}</td>
<td>{{ $data->tel }}</td>
<td>{{ $data->email }}</td>
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