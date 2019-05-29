@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('admin.kategori.create')}}" class="btn btn-success">Yeni Kategori Oluştur</a>
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Kategoriler</h4>
                            <p class="category">Burada Kategorileri Bulabilirsiniz...</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <th>İsim</th>
                                <th>Düzenle</th>
                                <th>Sil</th>
                                </thead>
                                <tbody>
                                @foreach($data as $key => $value)
                                <tr>
                                    <td>{{$value['name']}}</td>
                                    <td><a href="{{route('admin.kategori.edit',['id'=>$value['id']])}}">Düzenle</a></td>
                                    <td><a href="{{route('admin.kategori.delete',['id'=>$value['id']])}}">Sil</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$data->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('content')