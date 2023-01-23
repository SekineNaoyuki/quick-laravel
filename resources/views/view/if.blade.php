@if($random < 50) 
    <p>{{ $random }}は50未満です。</p>
@elseif($random < 70)
    <p>{{ $random }}は70以上50未満です。</p>
@else
    <p>{{ $random }}は50以上です。</p>
@endif

@env('local')
    <p>local</p>
@endenv
