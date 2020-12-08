@extends('layouts.super')

@section('content')


<br><br><br>



   

<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">
	 <div class="col-lg-12 margin-tb">
    <div class="pull-left"><h2> Show Country</h2></div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('country.index') }}"> Back</a>
    </div>

</div>
<div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
<div class="product-payment-inner-st">
<ul id="myTabedu1" class="tab-review-design">
<li class="active"><a href="#description">Add country</a></li>
<li><a href="#reviews"> Account Information</a></li>
</ul>
<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="review-content-section">
<div id="dropzone1" class="pro-ad">
<form action="{{route('country.store')}}" method="post">

<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<div class="form-group">
    <input name="country" type="text" class="form-control" placeholder="Add country">
</div>

</div>
</div>

<div class="">
    <button type="submit" class="btn btn-primary waves-effect waves-light">Confirm</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

</div>

@endsection