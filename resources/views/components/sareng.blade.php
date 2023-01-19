<label for="{{ $fild }}" class="flex w-full text-sm @error($name) text-rose-500 @enderror">
    {{ $label }}
    @error($name)
        <p class="text-rose-500 text-sm"> * {{ $message }}</p>
    @enderror
</label>
<input type="{{ $type }}" name="{{ $name }}" value="{{ old($name) }}" maxlength="{{ $maxlength }}"
    placeholder="{{ $placeholder }}" class="rounded-lg w-full text-sm">
