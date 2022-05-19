@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('¿ESTÀS SEGURO?') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        
                        <!--------------->
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4" style="margin: 0">
                                <a href="/home" id="gooey-button" style="border:5px solid rgb(175, 84, 84);margin:10px;right:40%;font-size: 10px;letter-spacing: 2px;background-color:rgb(254, 136, 136);color: rgb(156, 23, 23)" class="boton-roles btn-primary btn" >NO</a>
                                <a href="/deleteuser" id="gooey-button" style="border:5px solid rgb(175, 84, 84);margin:10px;right:40%;font-size: 10px;letter-spacing: 2px;background-color:rgb(254, 136, 136);color: rgb(156, 23, 23)" class="boton-roles btn-primary btn" >SI</a>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection