@extends('layouts.admin')

@section('content')


<br><br><br>
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="col-lg-12 margin-tb">
    <div class="pull-left"><h2> <br></h2></div>
    <div class="modal-bootstrap modal-login-form">
    <a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target="#zoomInDown1">Affecter la classe</a>
    </div>&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="pull-right">
        <a class="btn btn-primary" href="">Les étudiants</a>
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
        <h3>Affectation classe</h3>
        <p></p>
        <form method="POST" action="{{ route('affectClasse.store') }}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group-inner">
            <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <label class="login2 pull-right pull-right-pro">Professeur</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
            <div class="form-select-list">
            <select class="form-control custom-select-value" name="professeur"> 
                    @foreach ($Prof as $user) 
                    <option value="{{ $user->profId}}">{{ $user->profId}} {{ $user->name}} {{ $user->prenom}}</option>
                    @endforeach 
                </select>
            </div>
            </div>

            </div>
            </div>

            <div class="form-group-inner">
            <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <label class="login2 pull-right pull-right-pro">Classe</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
            <div class="form-select-list">
                <select class="form-control custom-select-value" name="classe">
                    @foreach ($Professeur as $classe)
                    <option value="{{$classe->classId}}">{{ $classe->classes_name }}</option>
                    @endforeach
                </select>
            </div>
            </div>
            </div>
            </div>

            <div class="form-group-inner">
            <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <label class="login2 pull-right pull-right-pro">Cours à dispenser</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
            <div class="form-select-list">
                <select class="form-control custom-select-value" name="cours">
                    @foreach ($Matiere as $matiere)
                    <option value="{{$matiere->id}}">{{ $matiere->libelle }}</option>
                    @endforeach
                </select>
            </div>
            </div>
            </div>
            </div>
            <div class="form-group-inner">
            <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <label class="login2 pull-right pull-right-pro">{{ __('Prime') }}</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
            <input id="montant" type="text" class="form-control @error('montant') is-invalid @enderror" name="montant" value="{{ old('montant') }}" required autocomplete="montant" autofocus>
            </div>
            </div>
            </div>

           <div class="login-btn-inner">
               
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="login-horizental">
                            <button type="submit" class="btn btn-sm btn-primary login-submit-cs">Affecter la classe</button>
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

<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
<div class="product-payment-inner-st">
<ul id="myTabedu1" class="tab-review-design">
<li class="active"><a href="#description">Utilisateur</a></li>
<li><a href="#other"> Professeur info</a></li>
</ul>


<form action="{{route('professeur.store')}}" method="post" enctype="multipart/form-data">
<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="review-content-section">
<div>


<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">


<div class="form-group">
    <label>{{ __('Nom') }}</label>
    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
</div>
<div class="form-group">
    <label>{{ __('Prénom') }}</label>
   <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
</div>
<div class="form-group-inner" style="display: none;">
    <div class="row">
     <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
    <label class="login2 pull-right pull-right-pro">Role</label>
    </div>
    <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
    <div class="form-select-list">
    <select class="form-control custom-select-value" name="role">
            <option value="Professeur">Professeur</option>
        </select>
    </div>
    </div>
    </div>
    </div>

             @foreach ($Professeur as $structure)
            <input value="{{$structure->id}}" name="school" style="display: none;" />
            @endforeach

 <div class="form-group col-lg-6">
    <label>{{ __('Email') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    </div>
    <div class="form-group col-lg-6">
        <label>{{ __('Numéro téléphone') }}</label>
        <input type="text" class="form-control" name="tel">
    </div>
    <div class="form-group">
        <label>{{ __('Adresse') }}</label>
        <input type="text" class="form-control" name="adresse">
    </div>
    


</div>



</div>
</div>
</div>
</div>
</div>
</div>
<div class="product-tab-list tab-pane fade active in" id="other">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="review-content-section">
<div id="dropzone1" class="pro-ad">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div class="form-group" style="display: none;">
    <select name="classe_id" class="form-control">
        <option value="none" selected="" disabled="">Select classe</option>
            @foreach ($Professeur as $classe)
            <option value="{{$classe->classId}}">{{ $classe->classes_name }}</option>
            @endforeach
    </select>
</div>

<div class="form-group">
    <input name="matricule" type="text" class="form-control" placeholder="Matricule professeur">
</div>

<div class="form-group col-lg-6">
        <label>{{ __('Mot de passe') }}</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    </div>

     <div class="form-group-inner">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Ajouter professeur') }}
        </button>
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
<h1>Liste  <span class="table-project-n">des professeurs</span></h1>
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
<th data-field="id">ID</th>
<th data-field="email" data-editable="true">Nom</th>
<th data-field="phone" data-editable="true">Prénom(s)</th>
<th data-field="task" data-editable="true">Phone</th>
<th data-field="date" data-editable="true">Email</th>
<th data-field="action">Action</th>
</tr>
</thead>
<tbody>


 @foreach ($Prof as $user)
<tr>
<td></td>
<td>{{ $user->id}}</td>
<td>{{ $user->name}}</td>
<td>{{ $user->prenom }}</td>
<td>{{ $user->tel }}</td>
<td>{{ $user->email }}</td>
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

@endsection