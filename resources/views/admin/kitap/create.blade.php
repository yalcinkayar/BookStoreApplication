@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    @if(session("status"))
                        <div class="alert alert-primary" role="alert">
                            {{session("status")}}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Kitap Ekle</h4>
                            <p class="category">Kitap Oluşturunuz</p>
                        </div>
                        <div class="card-content">
                            <form action="{{route('admin.kitap.create.post')}}" method="POST">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Kitap Adı</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Kitap Resmi</label>
                                            <input style="opacity:1;position:inherit;" type="file" name="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Kitap Fiyatı</label>
                                            <input type="text" name="fiyat" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Kitap Kategorisi</label>
                                            <select name="kategoriid" class="form-control" id="">
                                                @foreach($kategori as $key => $value)
                                                    <option value="{{$value['id']}}">
                                                        {{$value['name']}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Kitap Yazarı</label>
                                            <select name="yazarid" class="form-control" id="">
                                                @foreach($yazar as $key => $value)
                                                    <option value="{{$value['id']}}">
                                                        {{$value['name']}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Yayın Evi</label>
                                            <select name="yayineviid" class="form-control" id="">
                                                @foreach($yayinevi as $key => $value)
                                                    <option value="{{$value['id']}}">
                                                       {{$value['name']}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Kitap Açıklama</label>
                                            <textarea style="min-height:120px;" type="text" name="aciklama" class="form-control">
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Oluştur</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection('content')