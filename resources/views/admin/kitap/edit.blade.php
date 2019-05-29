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
                            <h4 class="title">Kitap Düzenle</h4>
                            <p class="category">{{$data[0]['name']}}</p>
                        </div>
                        <div class="card-content">
                            <form action="{{route('admin.kitap.edit.post',['id'=>$data[0]['id']])}}" method="POST">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Kitap Adı</label>
                                            <input type="text" value="{{$data[0]['name']}}" name="name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            @if($data[0]['image']!="")
                                                <img src="{{asset($data[0]['image'])}}" style="width:120px;height:120px;" alt="">
                                            @endif
                                            <input style="opacity: 1;position:inherit" type="file" name="image">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Kitap Fiyatı</label>
                                            <input value="{{$data[0]['fiyat']}}" type="text" name="fiyat" class="form-control">
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
                                        <div class="form-group label-floating is-empty">
                                            <select name="yazarid" class="form-control" id="">
                                                @foreach($yazar as $key => $value)
                                                    <option @if($value['id'] == $data[0]['yazarid']) selected @endif value="{{$value['id']}}">{{$value['name']}}</option>
                                                @endforeach
                                            </select>
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Yayın Evi</label>
                                            <select name="yayineviid" class="form-control" id="">
                                                @foreach($yayinevi as $key => $value)
                                                    <option @if($value['id'] == $data[0]['yayineviid']) selected @endif value="{{$value['id']}}">
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
                                            {{$data[0]['aciklama']}}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Düzenle</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection('content')