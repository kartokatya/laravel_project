@extends('test')

@section('content')
    <form method="post" action="/goods">
        <div class="form-group">
            <label for="name">Name item</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="short_description">Short Description</label>
            <input type="text" class="form-control" id="short_description" name="short_description">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="form-group">
            <label for="icon">Icon</label>
            <input type="text" class="form-control" id="icon" name="icon">
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
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