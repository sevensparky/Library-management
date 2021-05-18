<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <select class="form-control" name="{{ $name }}" {{ $attributes }}>
        {{ $slot }}
    </select>
</div>
<x-validation-error item="{{ $name }}" />
