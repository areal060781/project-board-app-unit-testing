<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    <title>Document</title>
</head>
<body>

<form method="post" action="/projects" class="container" style="padding-top: 40px"></form>
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
    </div>
</div>
</body>
</html>
