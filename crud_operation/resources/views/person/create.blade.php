<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>CRUD Operation Using Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left mb-2">
                        <h2>Add Person Details</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('person.index') }}"> Back</a>
                    </div>
                </div>
            </div>
        
            @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('person.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('person.form')
            </form>
    </body>
</html>