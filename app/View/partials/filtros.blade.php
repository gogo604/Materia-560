<form action="" method="get">
    select name="" id="">
        @foreach ('todas', 'tecnologia', 'ciencia', 'ingenieria', 'matematicas' as $categoria)
            <option value="{{ $categoria }}">{{ $categoria }}</option>
        @endforeach
    </select>

    <label for="">
        <input
            type="checkbox"
            name="gratis"
            id="gratis"
        >
        <label for="gratis">Gratis</label>
</form>
