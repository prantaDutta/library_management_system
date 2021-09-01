<div class="form-control my-1">
    <label class="label">
        <span class="label-text">{{ $label }}</span>
    </label>
    <input class="input" type="{{ $type }}" placeholder="{{ $placeholder }}" wire:model="{{ $fieldName }}">
    @error($fieldName)
        <p class="text-red-600">{{ $message }}</p>
    @enderror
</div>
