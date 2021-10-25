<label for="">Titulo del Proyecto</label><br><input name="title" value="{{ old('title' , $project->title) }}" type="text"><br>
<label for="">description</label><br><input name="description" value="{{ old('description', $project->description )}}" type="text"><br>
<label for="">url</label><br><input name="url"  value="{{ old('url' , $project->url )}}" type="text"><br>