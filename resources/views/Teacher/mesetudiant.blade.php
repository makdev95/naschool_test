@extends('layouts.prof')

@section('content')


<br><br><br>
<div class="contacts-area mg-b-15">
<div class="container-fluid">
	
<div class="row">

@foreach($ClasseEtudiant as $etudiant)
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
	
<div class="student-inner-std res-mg-b-30">
<div class="student-img">
<img src="" alt="" />
</div>
<div class="student-dtl">
<h2>{{ $etudiant->name }} {{ $etudiant->prenom }}</h2>
<p class="dp">Classe: {{ $etudiant->classes_name }}</p>
<p class="dp-ag"><b>Age:</b> 20 Years</p>

@if($etudiant->isOnline())
<span class="badge-info">En ligne</span>
@else
<span class="badge-dark">Offline</span>
@endif
</div>
</div>
</div>
@endforeach

</div>
</div>
</div>

@endsection