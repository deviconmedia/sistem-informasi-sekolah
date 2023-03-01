@extends('layouts.backend.app')


@section('content')
<div class="page-heading">
    <h1 class="page-title">Staf Sekolah</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
    </ol>
</div>
<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-header">
            <a href="{{ route('backend-pengguna-staf.create') }}" class="btn btn-primary m-3">Tambah</a>
        </div>
        <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th></th>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead> 
                <tbody>
                    @foreach ($staf as $key => $stafs)
                        <tr>
                            <td></td>
                            <td> {{$key+1}} </td>
                            <td> {{$stafs->name}} </td>
                            <td> {{$stafs->userDetail->nip}} </td>
                            <td> {{$stafs->email}} </td>
                            <td> {{$stafs->status == 'Aktif' ? 'Aktif' : 'Tidak Aktif'}} </td>
                            <td><a href=" {{route('backend-pengguna-staf.edit', $stafs->id)}} " class="btn btn-success btn-sm">Edit</a></td>
                        </tr>
                    @endforeach
                 </tbody>     
            </table>
        </div>
    </div>
</div>
    
@endsection