<h1>レースデータ登録</h1>

<form action="" method="POST">
    @csrf
    <label for="">レース日</label>
    <input type="text" id="datepicker" name="race_date">

    <label for="">レース番号</label>
    <select name="race_numbers" id="">
        @for ($i = 1; $i < 13; $i++)
        <option value="{{ $i }}">{{ $i }}R</option>
        @endfor
    </select>

    <label for="">レース場</label>
    <select name="race_locations" id="">
        @foreach ($race_locations as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>

    <label for="">2連単</label>
    <label for="">1着</label>
    <select name="exacta_first" id="">
        @for ($i = 1; $i < 7; $i++)
        <option value="{{ $i }}">{{ $i }}</option>
        @endfor
    </select>
    
    <label for="">2着</label>
    <select name="exacta_second" id="">
        @for ($i = 1; $i < 7; $i++)
        <option value="{{ $i }}">{{ $i }}</option>
        @endfor
    </select>

    <label for="">金額</label>
    <input type="text">

    <label for="">人気</label>
    <input type="text">

    <label for="">3連単</label>
    <label for="">1着</label>
    <select name="exacta_first" id="">
        @for ($i = 1; $i < 7; $i++)
        <option value="{{ $i }}">{{ $i }}</option>
        @endfor
    </select>

    <label for="">2着</label>
    <select name="exacta_second" id="">
        @for ($i = 1; $i < 7; $i++)
        <option value="{{ $i }}">{{ $i }}</option>
        @endfor
    </select>
    
    <label for="">金額</label>
    <input type="text">

    <label for="">人気</label>
    <input type="text">
    <button type="submit">登録</button>
</form>