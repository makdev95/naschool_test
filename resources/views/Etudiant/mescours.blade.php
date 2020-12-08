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
    <a href="{{ route('Etudiant.home') }}" class="btn btn-warning">Mon accueil</a>
</div>
</div>

<div class="courses-area">
<div class="container-fluid">
<div class="row">

@foreach($Student as $student)
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="courses-inner res-mg-b-30">
<div class="courses-title">
<a href="{{route('Etudiant.contenuMat', [$student->matiereId] )}}"><img src="{{ asset('img/courses/1.jpg') }}" alt=""/></a>
<h2>{{ $student->cours }}</h2>
</div>
<div class="courses-alaltic">
<span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
<span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
<span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
</div>
<div class="course-des">
<p><span><i class="fa fa-clock"></i></span> <b>Professeur:</b> Jane Doe</p>
<p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
</div>
<div class="product-buttons">
<a href="{{route('Etudiant.contenuMat', [$student->matiereId] )}}" class="btn btn-warning" name="classe_id" value="">Contenu matière</a>
</div>
</div>
</div>
@endforeach


</div>
</div>
</div>
@endsection

