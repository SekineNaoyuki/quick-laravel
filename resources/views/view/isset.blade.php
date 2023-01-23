@isset($msg)
    <p>変数msgは「{{ $msg }}」です。</p>
@else
    <p>変数がありません。</p>
@endisset
