<div class="form-row">

    <div class="col-md-8 mb-3">
        <label for="module_id" class="col-form-label pt-0">{{ __('Category') }}</label>
        <select class="form-control" name="category_id" id="category_id" required>

            <option value="{{ isset($product) ? $product->category_id : '' }}">
                {{ isset($product) ? $product->category->name : '- - Select - -' }}</option>
            @forelse(_getAllCategories() as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @empty
            @endforelse
        </select>
    </div>
</div>

<div class="form-row">
    <div class="col-md-8 mb-3">
        <label for="name" class="col-form-label pt-0">{{ __('Name') }}</label>
        <input type="text" name="name" class="form-control"
               value="{{ old('name', isset($product) ? $product->name : '') }}"
               autocomplete="off" required>
    </div>
</div>

<div class="form-row">
    <div class="col-md-8 mb-3">
        <label for="icon" class="col-form-label pt-0">{{ __('Image') }}</label>
        <input type="file" name="image" class="form-control"
               value="{{ old('icon', isset($product) ? $product->image : '') }}"
               autocomplete="off" >
    </div>
</div>

