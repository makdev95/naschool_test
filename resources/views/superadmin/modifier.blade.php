@extends('layouts.super')

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
</div>


   

<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
<div class="product-payment-inner-st">
<ul id="myTabedu1" class="tab-review-design">
<li class="active"><a href="#description">Modifier country</a></li>
<li><a href="#reviews"> Account Information</a></li>
</ul>
<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">
<div class="row">

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="review-content-section">
<div id="dropzone1" class="pro-ad">
<form action="{{route('country.update', [$country->idcountry]) }}" method="post">

<input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<div class="form-group">
    <input name="country" value="{{$country->libellec}}" type="text" class="form-control" placeholder="Add country">
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