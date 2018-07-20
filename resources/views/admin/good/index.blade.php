
@extends('test')

@section('content')
    <table style="width: 100%;border:1px;">
        <tr>
            <td colspan="3" style="background-color:#85C2FF;">
                <h1 style="color: black;">Goods</h1>
            </td>
        </tr>
        <tr style="vertical-align: top;">
            <td style="background-color:#C2EBFF;">
                Nаme
            </td>
            <td style="background-color:#fff;">
                Short Description
            </td>
            <td style="background-color:#fff;">
                Description
            </td>
        </tr>

    @foreach($goods->all() as $good)
            <tr style="vertical-align: top;">
                <td style="background-color:#C2EBFF;">
                    {{$good->name}}
                </td>
                <td style="background-color:#fff;">
                    {{$good->short_description}}
                </td>
                <td style="background-color:#fff;">
                    {{$good->icon}}
                </td>
            </tr>
     @endforeach
        <tr>
            <td colspan="3" style="background-color:#85C2FF;text-align:center;">
                Copyright © 2012 www.puzzleweb.ru</td>
        </tr>
    </table>
@endsection