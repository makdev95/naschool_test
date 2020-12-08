@extends('layouts.prof')

@section('content')


<br><br><br>

<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">
	 <div class="col-lg-12 margin-tb">
    <div class="pull-left"><h2> <br></h2></div>
    <div class="pull-right">
        <a class="btn btn-primary" href="/Naschool/Teacher/Cours"> Voir vos modules</a>
    </div>

</div>

<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="product-payment-inner-st">
<ul id="myTabedu1" class="tab-review-design">
<li class="active"><a href="#description">Ajouter</a></li>
<li><a href="#reviews"></a></li>
</ul>
<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="review-content-section">
<div id="dropzone1" class="pro-ad addcoursepro">
<form action="" method="post" enctype="multipart/form-data">

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="form-group">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input name="coursename" type="text" class="form-control" placeholder="Module">
</div>
<div class="form-group">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input name="coursename" type="text" class="form-control" placeholder="Course Name">
</div>
<div class="form-group">
<div class="file-upload-inner ts-forms">
<div class="input prepend-big-btn">
<label class="icon-right" for="prepend-big-btn">
<i class="fa fa-download"></i>
</label>
<div class="file-button">
Upload
<input type="file" name="image" onchange="document.getElementById('prepend-big-btn').value = this.value;">
</div>
<input type="text" id="prepend-big-btn" placeholder="Choisissez un fichier">
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<div class="form-group">
<textarea name="desc" placeholder="Description du cours"></textarea>
</div>

</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="payment-adress">
<button type="submit" class="btn btn-primary waves-effect waves-light">Confirmer</button>
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


@endsection