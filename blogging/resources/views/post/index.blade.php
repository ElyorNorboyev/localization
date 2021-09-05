<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>All Posts</title>


</head>
<body>
<div class="container">
<div style="height: 30px;" class="mt-3">
        @if (session('status-delete'))
            <div id="status" class="position-absolute top-0 end-0 alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('status-delete') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('status-update'))
            <div id="status" class="alert alert-info alert-dismissible fade show" role="alert">
                {{ session('status-update') }}
            </div>
        @endif
</div>

    <a href="{{ route('posts.create') }}" class="btn btn-info my-5">Create Posts</a>

    <h1 class="text-center text-uppercase">All Posts</h1>
    @foreach($posts as $post)
<div class="accordion" id="accordionExample"> 
<div class="accordion-item">
    <h2 class="accordion-header" >
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        {{$post->title}}    <a href="{{route('posts.show', [$post])}}" class="btn btn-success ml-3">Show</a>
                            <a href="{{route('posts.edit', [$post])}}" class="btn btn-danger ml-3" >Edit</a>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        {{$post->content}}
      </div>

      <form action="{{ route('posts.destroy', [$post]) }}" method="POST" >
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-info">delete</button>
     </form>  

    </div>
  </div>
</div>
@endforeach

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
-->
<script>
    setTimeout(function () {
        var status = document.getElementById('status');
        var status_instance = new bootstrap.Alert(status)
        status_instance.close();
    }, 2000);
</script>
</body>
</html>
