@extends('test')

@section('content')
    <form method="post" action="/photos">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Name photo</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="title">Titile</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="alt">Alt</label>
            <input type="text" class="form-control" id="alt" name="alt">
        </div>
        <div class="form-group">
            <label for="path">Path</label>
            <input type="text" class="form-control" id="path" name="path">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>

    </form>

    @if(count($errors))
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection