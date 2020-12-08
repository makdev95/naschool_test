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
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
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



    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
           <div class="static-table-area">
<div class="container-fluid">

<div class="row">
<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
<div class="sparkline12-list mg-b-30">
<div class="sparkline12-hd">
<div class="main-sparkline12-hd">
<h1>Countries</h1>
</div>
</div>
<div class="sparkline12-graph">
<div class="static-table-list">
<table class="table hover-table">
<thead>
<tr>
<th>ID</th>
<th>Country</th>
</tr>


</thead>
<tbody>
     
      @foreach ($country as $data)
    <tr>
        <td>{{ $data->idcountry }}</td>
        <td>{{ $data->libellec }}</td>

        <td>
            <a href="country.show/{{ $data->idcountry }}" class="btn btn-primary">Voir</a>
        </td>

        <td>
            <a href="" class="btn btn-danger">Delete</a>
        </td>
        
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