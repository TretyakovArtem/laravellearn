@extends('default.layouts.layout')



@section('content')
    <div class="col-xs-12 col-sm-9">
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        <div class="row">
            <div class="col-xs-8 col-lg-8">
                <h2>{{ $title }}</h2>
                <form class="form-horizontal" action="{{ route('contact') }}" method="post">
                    <div class="form-group">
                        <label for="name" class="col-xs-2 control-label">Имя</label>
                        <div class="col-xs-10">
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="Введите имя">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-xs-2 control-label">E-mail:</label>
                        <div class="col-xs-10">
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="inputPassword" placeholder="Введите E-mail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="site" class="col-xs-2 control-label">Сайт:</label>
                        <div class="col-xs-10">
                            <input type="text" name="site" value="{{ old('site') }}" class="form-control" id="site" placeholder="Сайт">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-xs-2 control-label">Текст:</label>
                        <div class="col-xs-10">
                            <textarea name="text" class="form-control" id="site" placeholder="Текст">{{ old('text') }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-offset-2 col-xs-10">
                            <button type="submit" class="btn btn-default">Войти</button>
                        </div>
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