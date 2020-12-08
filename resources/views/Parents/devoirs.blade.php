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
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="data-table-area mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="sparkline13-list">
<div class="sparkline13-hd">
<div class="main-sparkline13-hd">
<h1>Devoirs de classe  <span class="table-project-n"></span></h1>
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
<th>Devoirs</th>
<th>Instructions</th>
<th>Date d'envoie</th>

</tr>
</thead>
<tbody>

@foreach($devoirs as $devoir)
<tr>
<td></td>
<td>{{ $devoir->title }}</td>
<td>{{ $devoir->desc }}</td>
<td>{{ $devoir->created_at }}</td>
<td> <a href="/cours/{{$devoir->image}}"><i class="fa fa-cloud-download edu-check-icon" aria-hidden="true"></i></a></td>
<td><a href=""><i class="educate-icon educate-interface"></i></a></td>
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



