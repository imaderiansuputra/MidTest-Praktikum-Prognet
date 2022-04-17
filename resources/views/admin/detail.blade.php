@extends('layouts.admin-user.app')

@section('title', 'Detail Respon - Admin')

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
                        <div class="card card-body">
                            <div class="card-header">
                                <div class="table">
                                    <div class="row">                                                                            
                                        <div class="col-6 align-items-center">
                                            <h2 class="mb-0">Detail Keluhan</h2><br>
                                        </div>
                                        <div class="col-6 text-end align-items-center">                                 
                                            <a class="btn bg-gradient-success mb-0" href="/admin/respon/{{$keluhans->id}}/create"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah Respon</a>
                                            <a class="btn bg-gradient-warning mb-0" href="/admin/respon/{{$keluhans->id}}/edit"><i class="material-icons text-sm">edit</i>&nbsp;&nbsp;Edit Respon</a>                                            
                                            <a class="btn bg-gradient-danger mb-0" href="/admin/respon/{{$keluhans->id}}/delete"><i class="material-icons text-sm">delete</i>&nbsp;&nbsp;Delete Respon</a>
                                        </div>                                    
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table align-items-center mb-0">                                
                                            <tbody> 
                                            <tr>
                                                    <th class="col-1">Id</th>
                                                    <td class="table-active col-9">{{ $keluhans->id }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="table-active col-1">Nama</th>
                                                    <td class="col-9">
                                                        @foreach($users as $user)
                                                            @if($user->id == $keluhans->user_id)
                                                                {{ $user->name }}
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                </tr>                                                                                                          
                                                <tr>
                                                    <th class="col-1">Judul</th>
                                                    <td class="table-active col-9">{{ $keluhans->judul }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="table-active col-1">Keluhan</th>
                                                    <td class="col-9">{{ $keluhans->keluhan }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">Tanggal Keluhan</th>
                                                    <td class="table-active col-9">{{ $keluhans->updated_at }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="col-1 table-active">Respon</th>
                                                    <td class="col-9">
                                                        @foreach($respons as $respon)
                                                            @if($keluhans->id == $respon->keluhan_id)
                                                                {{ $respon->respon }}
                                                            @endif
                                                        @endforeach                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">Tanggal Respon</th>
                                                    <td class="col-9 table-active">
                                                        @foreach($respons as $respon)
                                                            @if($keluhans->id == $respon->keluhan_id)
                                                                {{ $respon->updated_at }}
                                                            @endif
                                                        @endforeach  
                                                    </td>
                                                </tr>                                                   
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
@endsection


