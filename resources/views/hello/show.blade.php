@extends('layouts.helloapp')

@section('title', 'Show')

@section('menubar')
    @parent
    詳細ページ
@endsection

@section('content')
    <table>
        <tr>
            <th>id: </th>
            <th>{{$item->id}}</th>
        </tr>
        <tr>
            <th>name: </th>
            <th>{{$item->name}}</th>
        </tr>
        <tr>
            <th>mail: </th>
            <th>{{$item->mail}}</th>
        </tr>
        <tr>
                <th>age: </th>
            <th>{{$item->age}}</th>
        </tr>
    </table>
@endsection

@section('footer')
    copyright 2017 tuyono.
@endsection
