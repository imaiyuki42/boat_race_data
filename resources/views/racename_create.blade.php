<h1>レース名登録</h1>

<form action="{{ route('racename_create.store') }}" method="POST">
    @csrf
    <label for="">レース名</label>
    <input type="text" name="race_name">

    <label for="">レース場</label>
    <select name="race_location" id="">
        @foreach ($race_locations as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
    <button type="submit">登録</button>
</form>

<a href="{{ route('home.index') }}">戻る</a>