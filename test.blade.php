@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="mb-3">
    <label for="" class="form-label"></label>
    <input type="text" class="form-control" id="" name=""
           value="{{ old('', $MODEL_VARIABLE$-> ?? '') }}">
</div>
<div class="mb-3">
    <label for="" class="form-label"></label>
    <textarea class="form-control" id=""
              name="">{{ old('', $MODEL_VARIABLE$-> ?? '') }}</textarea>
</div>

