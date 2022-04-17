@extends('layouts.admin-user.app')

@section('title', 'Detail Keluhan - Lapor')

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
                            <div class="bg-gradient-primary mt-n4 mx-5 shadow-primary border-radius-lg pt-2 pb-1">
                                <h6 class="text-white text-capitalize ps-3">Keluhan</h6>
                            </div>
                            <div class="card card-body">
                                <div class="row">                                    
                                    <div class="col-12">
                                        <div class="row">                                            
                                            <div class="col-6 align-items-center">
                                                <h4><a >{{ $keluhans->judul }}</a></h4>
                                            </div>
                                            <div class="col-6 text-end align-items-center">
                                                <a class="btn bg-gradient-warning mb-0" href="/user/keluhan/{{$keluhans->id}}/edit"><i class="material-icons text-sm">edit</i>&nbsp;&nbsp;Edit</a>
                                                <a class="btn bg-gradient-danger mb-0" href="/user/keluhan/{{$keluhans->id}}/delete"><i class="material-icons text-sm">delete</i>&nbsp;&nbsp;Delete</a>
                                            </div>
                                            <p class="mb-0">{{ $keluhans->updated_at }}</p>
                                        </div>                                
                                        <hr>
                                        <p>{{ $keluhans->keluhan }}</p>
                                    </div>                                    
                                </div>
                            </div> 
                        </div>  
                        <div class="card my-5">
                            <div class="bg-gradient-primary mt-n4 mx-5 shadow-primary border-radius-lg pt-2 pb-1">
                                <h6 class="text-white text-capitalize ps-3">Respon</h6>
                            </div>
                            <div class="card card-body">
                                <div class="row">                                    
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 align-items-center">
                                                <h4><a>
                                                    @foreach($respons as $respon)
                                                        @if($keluhans->id == $respon->keluhan_id)
                                                            {{ $respon->respon }}
                                                        @endif
                                                    @endforeach
                                                </a></h4>
                                                <p class="mb-0">
                                                    @foreach($respons as $respon)
                                                        @if($keluhans->id == $respon->keluhan_id)
                                                            {{ $respon->updated_at }}
                                                        @endif
                                                    @endforeach
                                                </p>
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


