
@extends('test')

@section('content')
    <table style="width: 100%;border:1px;">
        <tr>
            <td colspan="3" style="background-color:#85C2FF;">
                <h1 style="color: black;">Photos</h1>
            </td>
        </tr>
        <tr style="vertical-align: top;">
            <td style="background-color:#C2EBFF;">
                Nаme
            </td>
            <td style="background-color:#fff;">
                Path
            </td>
            <td style="background-color:#fff;">
                Title
            </td>
        </tr>

        @foreach($photos->all() as $photo)
            <tr style="vertical-align: top;">
                <td style="background-color:#C2EBFF;">
                    {{$photo->name}}
                </td>
                <td style="background-color:#fff;">
                    {{$photo->path}}
                </td>
                <td style="background-color:#fff;">
                    {{$photo->title}}
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="3" style="background-color:#85C2FF;text-align:center;">
                Copyright © 2012 www.puzzleweb.ru</td>
        </tr>
    </table>
@endsection