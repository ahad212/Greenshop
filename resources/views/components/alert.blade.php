<div>
hello {!!$shit!!}  

<select name="" id="">
    <option {{ $isSelected('hello') ? 'selected="selected"' : '' }} value="hello">
        hello
    </option>
    <option {{ $isSelected('hello2') ? 'selected="selected"' : '' }} value="hello2">
        hello2
    </option>
    <option {{ $isSelected('hello3') ? 'selected="selected"' : '' }} value="hello3">
        hello3
    </option>
</select>

</div>