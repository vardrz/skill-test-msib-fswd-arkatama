<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tes Skill | Farid Fatkhurrozak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="row d-flex justify-content-center">
        <div class="col-4 text-center mt-5">
            <h1>INPUT PENGGUNA : </h1>
            <form method="post">
                @csrf
                <input class="form-control form-control-lg" type="text" name="input" placeholder="NAMA[spasi]USIA[spasi]KOTA">
                <button type="submit" class="btn btn-md btn-success mt-2">Kirim</button>
            </form>

            @if (session()->has('success'))
            <div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong><br>
                {!! session()->get('success') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>