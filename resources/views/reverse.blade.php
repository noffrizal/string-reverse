<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  </head>
  <body>
        <nav class="navbar-dark bg-dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <lord-icon
                    src="https://cdn.lordicon.com/hgbzryoa.json"
                    trigger="loop"
                    style="width:50px;height:50px">
                </lord-icon>
                String Reverse
            </a>
            </div>
        </nav>

        <form class="mt-3 ms-4" method="POST" action="{{ route('reverse') }}">
            @csrf
            <div class="mb-3 col-sm-4">
              <label for="exampleInputEmail1" class="form-label">Input String Here :</label>
              <input type="text" class="form-control" id="string" name="string">
              <div id="emailHelp" class="form-text">Input your Text to Reverse</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

        <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        @include('sweetalert::alert')

  </body>
</html>
