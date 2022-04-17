@extends('layouts.admin-user.app')

@section('title', 'Data Keluhan - Lapor')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible text-white" role="alert">
            <span class="text-sm">{{ $message }}</span>
            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-dismissible text-white" role="alert">
            <span class="text-sm">{{ $message }}</span>
            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="grid-margin stretch-card">
                <div class="row">
                    <div class="col-12">
                        <div class="card my-3">                 
                            <div class="card-body pb-0 p-3">
                                <div class="table">
                                    <div class="row">
                                        <div class="col-6 align-items-center">
                                            <h3 class="mb-0">Keluhan</h3>
                                        </div>
                                        <div class="col-6 text-end align-items-center">
                                            <a class="btn bg-gradient-success mb-0" href="/user/keluhan/create"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah Keluhan</a>
                                        </div><hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach ($keluhans as $keluhan)
                        @if ($keluhan->user_id==\Auth::user()->id) 
                        <div class="card my-3">
                            <div class="card card-body">
                                <div class="row">                                    
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 align-items-center">
                                                <h4><a href="">{{ $keluhan->judul }}</a></h4>
                                            </div>
                                            <div class="col-6 text-end align-items-center">
                                                <a class="btn bg-gradient-info mb-0" href="/user/keluhan/show/{{$keluhan->id}}"><i class="material-icons text-sm">visibility</i>&nbsp;&nbsp;Detail</a>
                                            </div>
                                        </div>                                
                                        <hr>
                                        <p>{{ $keluhan->keluhan }}</p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        @endif
                        @endforeach                                                  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


