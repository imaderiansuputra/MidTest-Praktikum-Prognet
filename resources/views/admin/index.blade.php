@extends('layouts.admin-user.app')

@section('title', 'Data Respon - Admin')

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
                <div class="card">                 
                    <div class="card-body">
                        <div class="table">
                            <div class="row">
                                <div class="col-6 align-items-center">
                                    <h2 class="mb-0">Daftar Keluhan</h2>
                                </div>                                
                            </div>
                            <br>
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-lg font-weight-bolder ps-2">No.</th>
                                            <th class="text-uppercase text-secondary text-lg font-weight-bolder ps-2">Nama</th>
                                            <th class="text-uppercase text-secondary text-lg font-weight-bolder ps-2">Judul</th>
                                            <th class="text-uppercase text-secondary text-lg font-weight-bolder ps-2">Keluhan</th>
                                            <th class="text-uppercase text-secondary text-lg font-weight-bolder ps-2">Tanggal Keluhan</th>                                            
                                            <th colspan="1" class="text-uppercase text-secondary text-lg font-weight-bolder ps-2">Action</th>            
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        @foreach($keluhans as $keluhan)                                       
                                        <tr>
                                            <td><p class="text-md font-weight-normal mb-0">{{ $keluhans->firstItem()+$loop->index }}</p></th>                
                                            <td><p class="text-md font-weight-normal mb-0">{{ $keluhan->user->name }}</p></td>
                                            <td><p class="text-md font-weight-normal mb-0">{{ $keluhan->judul }}</p></td>
                                            <td><p class="text-md font-weight-normal mb-0">{{ $keluhan->keluhan }}</p></td>
                                            <td><p class="text-md font-weight-normal mb-0">{{ $keluhan->updated_at }}</p></td>                                            
                                            <td class="align-middle text-center">
                                                <div class="d-flex align-items-center">
                                                    <a href="/admin/respon/show/{{$keluhan->id}}" class="m-1 btn bg-gradient-info"><i class="material-icons text-sm me-2">visibility</i>Detail</a>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $keluhans->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection