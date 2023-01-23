<table class="table">
    <tr>
        <th>No.</th>
        <th>書名</th>
        <th>価格</th>
        <th>出版社</th>
        <th>刊行日</th>
    </tr>    
@forelse($records as $record)
    <tr>
        <td>{{$record->id}}</td>
        <td>{{$record->title}}</td>
        <td>{{$record->price}}</td>
        <td>{{$record->publisher}}</td>
        <td>{{$record->published}}</td>
    </tr>
@empty
    <p>データは存在しません。</p>
@endforelse
