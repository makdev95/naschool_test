@extends('layouts.admin')

@section('content')

<br><br><br>
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">

</div>
</div>

<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="product-payment-inner-st">
<ul id="myTabedu1" class="tab-review-design">
<li class="active"><a href="#description">Basic Information</a></li>
<li><a href="#reviews"> Account Information</a></li>
<li><a href="#INFORMATION">Social Information</a></li>
</ul>
<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="review-content-section">
<div id="dropzone1" class="pro-ad">
<form action="{{route('person.create')}}" method="post">

<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="form-group">
    <input name="nom" type="text" class="form-control" placeholder="Full Name">
</div>
<div class="form-group">
    <input name="prenom" type="text" class="form-control" placeholder="Prénom">
</div>
<div class="form-group">
    <input name="phone" type="number" class="form-control" placeholder="Mobile no.">
</div>
<div class="form-group">
    <input name="dob" id="finish" type="text" class="form-control" placeholder="Date of Birth">
</div>
<div class="form-group">
    <input name="email" type="text" class="form-control" placeholder="Email">
</div>

</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<div class="form-group res-mg-t-15">
    <textarea name="address" placeholder="Addresse"></textarea>
</div>
<div class="form-group">
    <select name="sexe" class="form-control">
		<option value="none" selected="" disabled="">Select Gender</option>
		<option value="0">Male</option>
		<option value="1">Female</option>
	</select>
</div>
<div class="form-group">
    <select name="nationalite" class="form-control">
			<option value="none" selected="" disabled="">Select country</option>
			<option value="Congolaise">Congo</option>
			<option value="Camerounaise">Cameroun</option>
			<option value="Gabonaise">Gabon</option>
			<option value="Sud africaine">Afrique du Sud</option>
			<option value="Ghaneene">Ghana</option>
			<option value="Nigeriane">Nigeria</option>
		</select>
</div>

</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="payment-adress">
    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="product-tab-list tab-pane fade" id="reviews">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="review-content-section">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="devit-card-custom">
<div class="form-group">
<input type="text" class="form-control" placeholder="Email">
</div>
<div class="form-group">
<input type="number" class="form-control" placeholder="Phone">
</div>
<div class="form-group">
<input type="password" class="form-control" placeholder="Password">
</div>
<div class="form-group">
<input type="password" class="form-control" placeholder="Confirm Password">
</div>
<a href="#!" class="btn btn-primary waves-effect waves-light">Submit</a>
</div>
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
<div class="col-lg-12">
<div class="devit-card-custom">
<div class="form-group">
<input type="url" class="form-control" placeholder="Facebook URL">
</div>
<div class="form-group">
<input type="url" class="form-control" placeholder="Twitter URL">
</div>
<div class="form-group">
<input type="url" class="form-control" placeholder="Google Plus">
</div>
<div class="form-group">
<input type="url" class="form-control" placeholder="Linkedin URL">
</div>
<button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
            </div>
        </div>

@endsection