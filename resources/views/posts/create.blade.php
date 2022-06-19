<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form class="container" action="{{route('posts.store')}} " method="POST" enctype="multipart/form-data">
      @csrf
      @method('post')
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" name="title" id="title" aria-describedby="title">
        </div>
        <div class="mb-3">
          <label for="short" class="form-label">Deskripcija</label>
          <textarea  class="form-control" name="short_description" id="short"></textarea>
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Content</label>
          <textarea class="form-control" name="content" id="content"></textarea>
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Picture</label>
          <input class="form-control" type="file" name="picture" id="formFile">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>