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
                    <div class="pull-left">
                        <h2>Person's Data</h2>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('person.create') }}"> Create Person Details</a>
                    </div>
                </div>
            </div>
        
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
                <table class="table table-bordered">
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>DOB</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Phone No.</th>
                        <th>Email</th>
                        <th>Hobby</th>
                        <th>Description</th>
                        <th width="280px">Action</th>
                    </tr>
            
            @foreach ($person as $person)
                <tr>
                    <td>{{ $person->id }}</td>
                    <td>{{ $person->name }}</td>
                    <td>{{ $person->dob }}</td>
                    <td>{{ $person->age }}</td>
                    <td>{{ $person->gender }}</td>
                    <td>{{ $person->phoneNo }}</td>
                    <td>{{ $person->email }}</td>
                    <td>{{ $person->hobby }}</td>
                    <td>{{ $person->description }}</td>
                    <td>
                        <form action="{{ route('person.destroy',$person->id) }}" method="Post">
                            <a class="btn btn-primary" href="{{ route('person.show',$person->id) }}">Show</a>
                            <a class="btn btn-warning" href="{{ route('person.edit',$person->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </body>
</html>