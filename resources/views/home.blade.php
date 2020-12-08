@extends('layouts.student')

@section('content')
<div class="container">
 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Student log in') }}
                </div>
</div>
@endsection
