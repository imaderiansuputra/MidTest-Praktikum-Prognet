@extends('layouts.admin-user.app')

@section('title', 'Dashboard - Admin')

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
                                        <div class="col-12 align-items-center pb-3 pt-3">
                                            <h3 class="mb-0 text-center">Selamat Datang {{auth()->user()->name}} !!</h3>
                                        </div><br>
                                        <div class="col-12 text-center align-items-center pb-2 pt-1">
                                            <a class="btn bg-gradient-primary mb-0" href="/admin/respon/index"><i class="material-icons text-sm">visibility</i>&nbsp;&nbsp;Cek Laporan</a>
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