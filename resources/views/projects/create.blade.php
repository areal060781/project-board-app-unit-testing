@extends('layouts.app')

@section('content')

<form method="post" action="/projects">
@csrf
<h1 class="heading is-1">Create a Project</h1>
<div class="field">
    <label for="title" class="label">Title</label>
    <div class="control">
        <input type="text" name="title" id="title" class="input">
    </div>
</div>

<div class="field">
    <label for="description" class="label">Title</label>
    <div class="control">
        <textarea name="description" id="description" cols="30" rows="10" class="textarea"></textarea>
    </div>
</div>

<div class="field">
    <div class="control">
        <button type="submit" class="button is-link">Create Project</button>
        <a href="/projects">Cancel</a>
    </div>
</div>
</form>
@endsection
