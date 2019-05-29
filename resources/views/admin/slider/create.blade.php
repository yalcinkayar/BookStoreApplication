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
                            <h4 class="title">Slider Ekle</h4>
                            <p class="category">Slider Oluşturunuz</p>
                        </div>
                        <div class="card-content">
                            <form enctype="multipart/form-data" action="{{route('admin.slider.create.post')}}" method="POST">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Slide Resmi</label>
                                            <input style="opacity:1;position:inherit;" type="file" name="image">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                <button type="submit" class="btn btn-primary pull-right">Oluştur</button>
                                <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection('content')