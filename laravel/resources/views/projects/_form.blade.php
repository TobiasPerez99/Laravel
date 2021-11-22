
@csrf
    <div class="form-group">
        <label for="title">Titulo del Proyecto</label>
            <br>
            <input class="form-control border-0 bg-light shadow-sm" id="title" name="title" value="{{ old('title' , $project->title) }}" type="text">
            <br>
    </div>
    <div class="form-group">
        <label for="description">Descripcion</label>
            <br>
            <input class="form-control border-0 bg-light shadow-sm" id="description" name="description" value="{{ old('description', $project->description )}}" type="text">
            <br>
    </div>
    <div class="form-gropu">
    <label for="url">URL</label>
        <br>
            <input class="form-control border-0 bg-light shadow-sm" id="url" name="url"  value="{{ old('url' , $project->url )}}" type="text">
        <br>
    </div>

<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>