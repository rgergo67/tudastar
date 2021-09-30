<label class="block">Title</label>
<input type="text" name="title" class="w-full" value="{{ old('title', $article->title ?? '') }}" />
<label class="block">Típus</label>
<input type="text" name="type" list="type-list" class="w-full" value="{{ old('title', $article->type ?? 'Cikk') }}" />
<datalist id="type-list">
    @foreach($types as $type)
        <option value="{{ $type }}"></option>
    @endforeach
</datalist>
<label class="block">Header image</label>
<input type="file" name="header_image" class="w-full" />
@if(!empty($article->header_image))
<img src="/storage/{{ $article->header_image }}" />
@endif
<label class="block">Slug</label>
<input type="text" name="slug" class="w-full" value="{{ old('slug', $article->slug ?? '') }}" />
<label class="block">Description</label>
<textarea name="description" class="w-full tinymce-textarea" rows="3">{{ old('description', $article->description ?? '') }}</textarea>
<label class="block">Body</label>
<textarea name="body" class="w-full tinymce-textarea" rows="3">{{ old('body', $article->body ?? '') }}</textarea>
<input class="block mt-2 p-2 rounded-md w-full" type="submit" value="Save" />
