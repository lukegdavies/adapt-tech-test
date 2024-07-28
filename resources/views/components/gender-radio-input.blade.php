<div class="pb-6">
    <span class="block text-sm font-medium text-gray-700">Gender</span>
    <div class="mt-2">
        <label class="inline-flex items-center">
            <input type="radio" class="form-radio text-indigo-600" name="{{ $name }}" value="M" {{ (old('sex', $selected ?? '') == 'M') ? 'checked' : ''}} >
            <span class="ml-2">Male</span>
        </label>
        <label class="inline-flex items-center ml-6">
            <input type="radio" class="form-radio text-pink-700" name="{{ $name }}" value="F" {{ (old('sex', $selected ?? '') == 'F') ? 'checked' : ''}}>
            <span class="ml-2">Female</span>
        </label>
        <label class="inline-flex items-center ml-6">
            <input type="radio" class="form-radio text-green-500" name="{{ $name }}" value="O" {{ (old('sex', $selected ?? '') == 'O') ? 'checked' : ''}}>
            <span class="ml-2">Other</span>
        </label>
        <label class="inline-flex items-center ml-6">
            <input type="radio" class="form-radio" name="{{ $name }}" value="P" {{ (old('sex', $selected ?? 'P') == '3') ? 'checked' : ''}}>
            <span class="ml-2">Prefer not to say</span>
        </label>
    </div>
    @error($name)
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
