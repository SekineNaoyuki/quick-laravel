@extends('layouts.base')
@section('title','書籍情報フォーム（詳細）')
@section('main')
<form method="POST" action="/save/{{$b->id}}">
    @csrf
    @method('DELETE')
    <div class="pl-2">
        <label id="isbn">ISBNコード：</label><br/>
        <input id="isbn"name="isbn"type="text"size="15"value="{{old('isbn',$b->isbn)}}"/>
    </div>
    <div class="pl-2">
        <input type="submit"value="削除"/>
    </div>
</form>
@endsection
