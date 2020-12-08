@extends('layouts.student')

@section('content')

<br><br>
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
    <a href="{{ route('Etudiant.home') }}" class="btn btn-warning">Mon accueil</a>
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
<h1>Mes  <span class="table-project-n">cours</span></h1>
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
<th>Desc</th>
<th>Formateur</th>
<th>Date de recéption</th>
<th>Télécharger</th>
<th>Commentaire</th>
</tr>
</thead>
<tbody>

@foreach($StudentCours as $cours)
<tr>
<td></td>
<td>Intro</td>
<td>Cours</td>
<td>Laud OBAMI</td>
<td>{{$cours->daterecept}}</td>
<td> <a href="/cours/{{$cours->image}}"><i class="fa fa-cloud-download edu-check-icon" aria-hidden="true"></i></a></td>
<td><a href="{{ route('Etudiant.courseChat') }}"><i class="educate-icon educate-interface"></i></a></td>
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

