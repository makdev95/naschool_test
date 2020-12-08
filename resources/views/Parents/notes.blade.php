@extends('layouts.parent')

@section('content')


<br><br><br><br>

<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
	<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
    <a href="{{ route('tuteur-home') }}" class="btn btn-warning">Mon accueil parent</a>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="data-table-area mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="sparkline13-list">
<div class="sparkline13-hd">
<div class="main-sparkline13-hd">
<h1>Notes  <span class="table-project-n"></span></h1>
</div>
</div>
<div class="sparkline13-graph">
<div class="datatable-dashv1-list custom-datatable-overright">
<div id="toolbar">

</div>
<table id="table" data-toggle="table" data-pagination="true" data-search="true"  data-cookie="true"
data-cookie-id-table="saveId"  data-toolbar="#toolbar">
<thead>
<tr>
<th></th>
<th>Cours</th>
<th>Note</th>
<th>Observation</th>
<th>Date de notation</th>

</tr>
</thead>
<tbody>

@foreach($StudentNote as $note)
<tr>
<td></td>
<td>{{ $note->title }}</td>
<td>{{ $note->note }}</td>
<td>{{ $note->observation }}</td>
<td>{{ $note->created_at }}</td>
<td> <a href=""><i class="fa fa-cloud-download edu-check-icon" aria-hidden="true"></i></a></td>
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

<div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
<div class="white-box">
<h3 class="box-title">Notes exerices</h3>
<ul class="basic-list">
<li>Google Chrome <span class="pull-right label-purple label-7 label">31.8%</span></li>
<li>Mozila Firefox <span class="pull-right label-purple label-7 label">31.8%</span></li>
<li>Apple Safari <span class="pull-right label-purple label-7 label">31.8%</span></li>
<li>Internet Explorer <span class="pull-right label-purple label-7 label">31.8%</span>></li>
<li>Opera mini <span class="pull-right label-purple label-7 label">31.8%</span></li>
<li>Mozila Firefox <span class="pull-right label-purple label-7 label">31.8%</span></li>
<li>Safari <span class="pull-right label-purple label-7 label">31.8%</span></li>
</ul>
</div>
</div>


</div>
</div>
</div>


@endsection



