@extends('layouts.admin-user.app')

@section('title', 'Tambah Respon - Admin')

@section('content')
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
                    <div class="card my-3">
                        <div class="card card-body">
                            <form class="form-signin" action="/admin/respon/{{$keluhans->id}}/save" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-header">
                                    <h2>Tambah Respon</h2>
                                    <br>                                                                                                                                      
                                    <div class="col-mb-4">
                                        <div class="input-group input-group-static @error('respon') is-invalid @enderror mb-4">
                                            <label>Respon :</label>                                        
                                            <textarea class="form-control" rows="3" name="respon">{{ old('respon') }}</textarea>
                                        </div>                                                      
                                    </div>
                                    @if (count($errors) > 0)                                    
                                        @foreach ($errors->all() as $error)     
                                            <p class="text-danger">{{$error}}</p>
                                        @endforeach                                   
                                    @endif                                                      
                                    <div>
                                        <button class="btn btn-primary" type="submit">
                                            Tambahkan
                                        </button>                                                         
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
@endsection


