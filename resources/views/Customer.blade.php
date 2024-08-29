<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>File Upload</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb-2">File Upload</h2>
            </div>
            <form action="{{route('photo.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-12">
                        <input type="file" name="photo">
                        @error('photo')
                           <div class="alert alert-danger mb-1 mt-1">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <input type="submit" class="btn btn-sm btn-primary">

                    </div>
                </div>


            </form>
            <div class="row">
                <div class="col-6">
                    @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-2">

                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>