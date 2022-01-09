<div class="form-row">
    <div class="col-md-3 mb-3">
        <label for="name" class="col-form-label pt-0">{{ __('Name') }}</label>
        <input type="text" name="name" class="form-control"
               value="{{ old('name', isset($category) ? $category->name : '') }}"
               autocomplete="off" required>
    </div>
</div>

<div class="form-row">
    <div class="col-md-3 mb-3">
        <label for="icon" class="col-form-label pt-0">{{ __('Image') }}</label>
        <input type="file" name="image" class="form-control"
               value="{{ old('icon', isset($category) ? $category->image : '') }}"
               autocomplete="off" >
    </div>
</div>

