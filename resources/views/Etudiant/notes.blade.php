@extends('layouts.student')

@section('content')


<br><br><br>
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
 @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif
</div>
</div><br><br>
<br>


<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
	<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
    <a href="{{ route('Etudiant.home') }}" class="btn btn-primary">Mon accueil</a>
</div>
</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="data-table-area mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="sparkline13-list">
<div class="sparkline13-hd">
<div class="main-sparkline13-hd">
<h1>Mes  <span class="table-project-n">notes</span></h1>
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
<th>Cours</th>
<th>Notes</th>
<th>Formateur</th>
<th>Date de notation</th>
<th>Voir</th>
</tr>
</thead>
<tbody>


<tr>
<td>Intro</td>
<td>15</td>
<td>Laud OBAMI</td>
<td>04/11/2020</td>
<td></td>

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

