@extends('layouts.super')

@section('content')


<br><br><br>



   

<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">
	<div class="col-lg-12 margin-tb">
    <div class="pull-left"><h2> </h2></div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('country.index') }}"> Back</a>
    </div>

</div>
                <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Pays:</strong>

                {{ $country->libellec }}

            </div>

        </div>


    </div>
</div>
</div>

@endsection