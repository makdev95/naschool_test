@extends('layouts.student')

@section('content')

@foreach($Student as $student)

@endforeach

<br><br>
<br><br>
<div class="blog-details-area mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="blog-details-inner">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="latest-blog-single blog-single-full-view">
<div class="blog-image">
<a href="#"><img src="img/blog-details/1.jpg" alt="" />
</a>
<div class="blog-date">
<p><span class="blog-day">20</span> May</p>
</div>
</div>
<div class="blog-details blog-sig-details">
<div class="details-blog-dt blog-sig-details-dt courses-info mobile-sm-d-n">
<span><a href="#"><i class="fa fa-user"></i> <b>Nom du cours:</b> Droit des affaires</a></span>

<span><a href="#"><i class="fa fa-comments-o"></i> <b>Nom du Professeur:</b> {{ $student->name }} {{ $student->prenom }}</a></span>
</div>
<h1><a class="blog-ht" href="#">Description du cours</a></h1>

<p>Lorem ipsum dolor sit amet, consectetur </p>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="comment-head">
<h3>Commentaire</h3>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="user-comment">
<img src="img/contact/1.jpg" alt="" />
<div class="comment-details">
<h4>Jonathan Doe 2015 15 July <span class="comment-replay">Repondre</span></h4>
<p>Shabby chic selfies pickled Tumblr letterpress iPhone. Wolf vegan retro selvage literally <span class="mobile-sm-d-n">Wes Anderson ethical four loko. Meggings blog chambray tofu pour-over. Pour-over Tumblr keffiyeh, cornhole whatever cardigan Tonx lomo.Shabby.</span></p>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="user-comment admin-comment">
<img src="img/contact/2.jpg" alt="" />
<div class="comment-details">
<h4>Jonathan Doe 2015 15 July <span class="comment-replay">Replay</span></h4>
<p>Shabby chic selfies pickled Tumblr letterpress iPhone. Wolf vegan retro selvage literally <span class="mobile-sm-d-n">Wes Anderson ethical four loko. Meggings blog chambray tofu pour-over. Pour-over Tumblr keffiyeh, cornhole whatever cardigan
Tonx lomo.Shabby.</span></p>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="user-comment user-coment2">
<img src="img/contact/3.jpg" alt="" />
<div class="comment-details">
<h4>Jonathan Doe 2015 15 July <span class="comment-replay">Replay</span></h4>
<p>Shabby chic selfies pickled Tumblr letterpress iPhone. Wolf vegan retro selvage literally Wes Anderson <span class="mobile-sm-d-n">ethical four loko. Meggings blog chambray tofu pour-over. Pour-over Tumblr keffiyeh, cornhole whatever cardigan Tonx lomo.Shabby.</span></p>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="lead-head">
<h3>Laisser un commentaire</h3>
</div>
</div>
</div>
<div class="row">
<div class="coment-area">
<form id="comment" action="#" class="comment">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog-res-mg-bt">
<div class="form-group">
<input name="name" class="responsive-mg-b-10" type="text" placeholder="Name" />
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="form-group">
<input name="email" type="text" placeholder="Email" />
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="form-group">
<textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
</div>
<div class="payment-adress comment-stn">
<button type="submit" class="btn btn-primary waves-effect waves-light">Send</button>
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

@endsection