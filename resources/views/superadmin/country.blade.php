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

<div class="col-lg-12 margin-tb">
    <div class="pull-left"><h2> </h2></div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('country.create') }}"> Add country</a>
    </div>

</div>
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
 
      @foreach ($Country as $country)
    <tr>
        <td>{{ $country->idcountry }}</td>
        <td>{{ $country->libellec }}</td>

        <td>
          <form action="{{ route('country.destroy',[$country->idcountry]) }}" method="post">

            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <a href="{{ route('country.show', $country->idcountry)}}" class="btn btn-primary">Voir</a>

            <a href="{{ route('country.edit', [$country->idcountry]) }}" class="btn btn-info">Modifier</a>

            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
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