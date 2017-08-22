@extends('default.layouts.layout')

@section('content')
    <div class="col-xs-12 col-sm-9">
        <div class="">
            <h2>Добавление нового материала</h2>
        </div>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div class="row">
            <div class="col-xs-8 col-lg-8">
                <form class="form-horizontal" action="{{ route('admin_add_post_p') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="name">Заголовок</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="img">Изображение:</label>
                            <input type="text" name="img" value="{{ old('img') }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="text">Текст</label>
                            <textarea name="text" value="{{ old('text') }}" class="form-control" id="text"></textarea>
                    </div>
                    <div class="form-group">
                            <button type="submit" class="btn btn-default">Сохранить</button>
                    </div>
                </form>
        </div>
        </div>
    </div>
@endsection


<style type="text/css">
    /* контейнер демо */
    body{
        font-family: helvetica, arial;
    }
    .wrap {
        max-width: 860px;
        padding: 10px;
        margin: 0 auto;
    }
    /* скрытый блок */
    .terms {
        display:none;
        margin:5px 0px;
        padding:10px;
        width:98%;
        border:1px solid #ffbc80;
        background:#ffffdf;

    }
    /* кликабельный текст */
    .tt {
        color:#f70;
        cursor: help
    }
    .tt:hover{
        border-bottom:1px dashed green;
        color:green;
    }
</style>