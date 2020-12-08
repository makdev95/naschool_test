@extends('layouts.admin')

@section('content')


<br><br><br>
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
    <div class="modal-bootstrap modal-login-form" style="background-color: #a93e90">
    <a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target="#zoomInDown1">Ajouter un niveau scolaire</a>
    </div>&nbsp;&nbsp;&nbsp;&nbsp;
<div class="sparkline11-graph">
<div class="basic-login-form-ad">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div id="zoomInDown1" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-close-area modal-close-df">
<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
</div>
<div class="modal-body">
<div class="modal-login-form-inner">
<div class="row">

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="basic-login-inner modal-basic-inner">
        <h3>Niveau scolaire</h3>
        <div class="container-fluid">
         @if ($message = Session::get('status'))

                <div class="alert alert-success">

                    <p>{{ $message }}</p>

                </div>

            @endif
        </div>
        <form method="POST" action="{{ route('niveauspecialite.store') }}">
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group-inner">
            <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <label class="login2 pull-right pull-right-pro">Spécialité</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
            <div class="form-select-list">
            <select class="form-control custom-select-value" name="specialite">
                    @foreach ($specialites as $spe)
                    <option value="{{$spe->id}}">{{ $spe->type }}</option>
                    @endforeach
                </select>
            </div>
            </div>
            </div>
            </div>

           <div class="form-group-inner">
            <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <label class="login2 pull-right pull-right-pro">Niveau</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
            <div class="form-select-list">
            <select class="form-control custom-select-value" name="niveau">
                    @foreach ($Niveau as $niveau)
                    <option value="{{$niveau->niveauId}}">{{ $niveau->NiveauLib }}</option>
                    @endforeach
                </select>
            </div>
            </div>
            </div>
            </div>

           <div class="login-btn-inner">
               
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="login-horizental">
                            <button class="btn btn-sm btn-warning login-submit-cs" type="submit">Ajouter</button>
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
</div>
</div>
</div>

<div class="pull-left">
    <div class="modal-bootstrap modal-login-form" style="background-color: #ec971f">
    <a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target="#zoomInDown2">Ajouter une spécialité</a>
    </div>
<div class="sparkline11-graph">
<div class="basic-login-form-ad">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div id="zoomInDown2" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-close-area modal-close-df">
<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
</div>
<div class="modal-body">
<div class="modal-login-form-inner">
<div class="row">

</div>&nbsp;&nbsp;
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="basic-login-inner modal-basic-inner">
       
        <form method="POST" action="{{ route('specialite.store') }}">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <div class="row">
    <div class="form-group col-lg-12">
        <label>{{ __('Spécialité') }}</label>
        <input id="specialite" type="text" class="form-control @error('specialite') is-invalid @enderror" name="specialite" value="{{ old('specialite') }}" required autocomplete="specialite" autofocus>
    </div>
    
</div>
            <div class="login-btn-inner">
               
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="login-horizental">
                            <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Ajouter</button>
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
</div>
</div>
</div>

<div class="pull-right">
    <a class="btn btn-primary" href="">Classes</a>
</div>

</div>

</div>
</div>


<div class="container-fluid">
 @if ($message = Session::get('status'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif
</div>

<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
<div class="product-payment-inner-st">
<ul id="myTabedu1" class="tab-review-design">
<li class="active"><a href="#description"></a></li>
<li><a href="#INFORMATION"></a></li>
</ul>
 <form  method="POST" action="{{ route('niveau.store') }}">
       @csrf

    <div class="row">
        <div class="form-group col-lg-12">
            <label>{{ __('Niveau') }}</label>
            <input id="niveau" type="text" class="form-control @error('niveau') is-invalid @enderror" name="niveau" value="{{ old('niveau') }}" required autocomplete="niveau" autofocus>
        </div>

        <div class="col-lg-12 col-md-9 col-sm-9 col-xs-12">
            <label>Cycle</label>
            <div class="form-select-list">
            <select class="form-control custom-select-value" name="cycle">
                    @foreach ($Cycle as $cycle)
                    <option value="{{ $cycle->id }}">{{ $cycle->libelle }}</option>
                    @endforeach
                </select>
            </div>
            </div>
    
    </div>
            <div class="login-btn-inner">
               
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="login-horizental">
                            <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Ajouter</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>


<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
        <div class="data-table-area mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="sparkline13-list">
<div class="sparkline13-hd">
<div class="main-sparkline13-hd">
<h1>Liste  <span class="table-project-n">niveaux</span></h1>
</div>
</div>
<div class="sparkline13-graph">
<div class="datatable-dashv1-list custom-datatable-overright">
<div id="toolbar">
<select class="form-control dt-tb">
<option value="">Export Basic</option>
<option value="all">Export All</option>
<option value="selected">Export Selected</option>
</select>
</div>
<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
<thead>
<tr>
<th data-field="state" data-checkbox="true"></th>
<th data-field="email" data-editable="true">Niveau</th>
<th data-field="email" data-editable="true">Cycle</th>
<th data-field="action">Action</th>
</tr>
</thead>
<tbody>

 @foreach($Niveau as $niveau)
<tr>
<td></td>
<td>{{ $niveau->NiveauLib }}</td>
<td>{{ $niveau->cycleLib }}</td>
<td><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
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




                </div>
            </div>
        </div>

@endsection