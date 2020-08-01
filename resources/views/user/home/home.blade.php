@extends('layouts.admin')
@section('title', 'K-likey')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>K-Likey</h2>
                <form action="{{ action('User\HomeController@getHome') }}" method="get" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="10">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">タグ</label>
                        <div class="col-md-10">
　　                    　　@for ($i = 1; $i <= 10; $i++)
   　　                     　　<input type="text" name="tags[]" class="p-postEdit-form__input-tag @error('tags[]'.$i) is-error @enderror"　value="{{ old('tags[]'.$i) }}" placeholder="#タグ">
    　　                    　　@error('tags[]'.$i)
       　　                     　　<span class="p-postEdit-form__errorMsg" role="alert">
          　　                      　　<strong>{{ $message }}</strong>
                                　　</span>
    　　                    　　@enderror
 　　                   　　@endfor
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection