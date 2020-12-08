@extends('layouts.admin')

@section('content')


<br><br><br>  


 <div class="col-lg-12 margin-tb">
    <div class="pull-left"><h2> <br></h2></div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('teacher.index') }}"> Retour</a>
    </div>
     <form action="{{ route('teacher.destroy', [$teacher->idteacher]) }}" method="post">
    <div class="pull-left">
        <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button class="btn btn-danger" type="submit"> Supprimer ce prof</button>
        <a href="{{ URL::to('/') }}/resume/{{ $teacher->teacherCv  }}" class="btn btn-info"> Voir son CV</a>
    </div>
</form>

</div>

<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="profile-info-inner">
<div class="profile-img">
<img src="{{ URL::to('/') }}/img/{{ $teacher->photo }}" alt="" />
</div>
<div class="profile-details-hr">
<div class="row">
<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
<div class="address-hr">
<p><b>Name</b><br /> {{ $teacher->nom }}</p>
</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
<div class="address-hr tb-sm-res-d-n dps-tb-ntn">
<p><b>Designation</b><br /> Head of Dept.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
<div class="address-hr">
<p><b>Email ID</b><br /> {{ $teacher->email }}</p>
</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
<div class="address-hr tb-sm-res-d-n dps-tb-ntn">
<p><b>Phone</b><br /> {{ $teacher->phone }}</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="address-hr">
<p><b>Address</b><br /> {{ $teacher->address }}</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<div class="address-hr">
<a href="#"><i class="fa fa-facebook"></i></a>
<h3>500</h3>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<div class="address-hr">
<a href="#"><i class="fa fa-twitter"></i></a>
<h3>900</h3>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<div class="address-hr">
<a href="#"><i class="fa fa-google-plus"></i></a>
<h3>600</h3>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
<div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
<ul id="myTabedu1" class="tab-review-design">
    <li class="active"><a href="#reviews"> Biographie</a></li>
    <li><a href="#INFORMATION">Modifier profil</a></li>
    <li><a href="#resume">CV</a></li>

</ul>
<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade" id="reviews">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="review-content-section">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
<div class="address-hr biography">
<p><b>Nom complet</b><br /> {{$teacher->nom}} {{$teacher->prenom}}</p>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
<div class="address-hr biography">
<p><b>Mobile</b><br /> {{ $teacher->phone }}</p>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
<div class="address-hr biography">
<p><b>Email</b><br /> {{ $teacher->email }}</p>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
<div class="address-hr biography">
<p><b>Location</b><br /> {{ $teacher->nationalite }}</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="content-profile">
<p>{{ $teacher->descript }}</p>
</div>
</div>
</div>
<div class="row mg-b-15">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-12">
<div class="skill-title">
<h2>Skill Set</h2>
<hr />
</div>
</div>
</div>
<div class="progress-skill">
<h2>Java</h2>
<div class="progress progress-mini">
<div style="width: 90%;" class="progress-bar progress-yellow"></div>
</div>
</div>
<div class="progress-skill">
<h2>Php</h2>
<div class="progress progress-mini">
<div style="width: 80%;" class="progress-bar progress-green"></div>
</div>
</div>
<div class="progress-skill">
<h2>Apps</h2>
<div class="progress progress-mini">
<div style="width: 70%;" class="progress-bar progress-blue"></div>
</div>
</div>
<div class="progress-skill">
<h2>C#</h2>
<div class="progress progress-mini">
<div style="width: 60%;" class="progress-bar progress-red"></div>
</div>
</div>
</div>
</div>
<div class="row mg-b-15">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-12">
<div class="skill-title">
<h2>Education</h2>
<hr />
</div>
</div>
</div>
<div class="ex-pro">
<ul>
<li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
</ul>
</div>
</div>
</div>
<div class="row mg-b-15">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-12">
<div class="skill-title">
<h2>Experience</h2>
<hr />
</div>
</div>
</div>
<div class="ex-pro">
<ul>
<li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-12">
<div class="skill-title">
<h2>Subjects</h2>
<hr />
</div>
</div>
</div>
<div class="ex-pro">
<ul>
<li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="product-tab-list tab-pane fade" id="resume">

    <div class="pdf-viewer-area mg-b-15">
<div class="container-fluid">
<div class="row">

<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
<div class="pdf-single-pro">
<a class="media" href="{{ URL::to('/') }}/resume/{{ $teacher->teacherCv }}"></a>
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
    <form action="{{route('teacher.update', [$teacher->iduser])}}" method="post">
<div class="col-lg-6">
    <div class="form-group">
    <input name="nom" type="text" value="{{ $teacher->nom }}" class="form-control">
    </div>
    <input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <input name="prenom" type="text" class="form-control" value="{{ $teacher->prenom }}">
    </div>
    <div class="form-group">
        <input name="email" type="text" class="form-control" value="{{ $teacher->email }}">
    </div>
    <div class="form-group">
        <input name="phone" type="number" class="form-control" value="{{ $teacher->phone }}">
    </div>
    <div class="form-group">
        <input name="dob" type="date" class="form-control" placeholder="Date de naissance">
    </div>
    <div class="form-group">
     
    <select name="sexe" class="form-control">
        <option value="none" selected="" disabled="">Select gender</option>
        <option value="1">M</option>
        <option value="2">F</option>
        </select>
    
</div>
</div>
<div class="col-lg-6">
    <div class="form-group alert-up-pd">
<input name="image" type="file" class="form-control">
</div>

<div class="form-group">
    <input name="country" type="text" class="form-control" value="{{ $teacher->nationalite }}">
</div>
<div class="form-group">
    <input name="adresse" type="text" class="form-control" value="{{ $teacher->address }}">
</div>



</div>
<div class="row">
<div class="col-lg-12">
<div class="payment-adress mg-t-15">
<button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Valider</button>
</div>
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

@endsection