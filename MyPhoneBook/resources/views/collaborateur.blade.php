<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Collaborateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div class="header" class="rounded-pill">
        <h1 style="display: flex;justify-content: center;margin: 30px">Myphonebook</h1>
    </div>
    <h2>COLLABORATEURS</h2>
    <div >
        <form class="d-flex" action="{{ route('collaborateur.index') }}" method="GET">
            @csrf
            @method("GET")
            <input class="form-control me-2" type="search" name="search" placeholder="Chercher un collaborateur" aria-label="Search">
    <button class="btn btn-primary" type="submit">Search</button>
        </form>
    </div>
    <br>
    <div class="search">
        <div class="image">
            <div class="create">
                <img src="image/main.jpeg" class="rounded-pill" alt="">
                <br>
                <form action="{{ route('collaborateur.create') }}" method="GET">
                    @csrf
                    @method("GET")
                    <p style="text-align: center;">
                        <button type="submit" class="btn-success btn-lg ">Create</button>
                    </p>
                </form>
            </div>
        </div>
        <div class="list-group">   
            @if (!$MySearchs->isEmpty())
                @foreach ($MySearchs as $MySearch)
    
    
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        <p>{{ $MySearch->nom }} {{ $MySearch->prenom }}</p>
                    </a>
    
                    <a class="list-group-item list-group-item-action">ID_E :{{ $MySearch->entreprise_id }}</a>
                    <a class="list-group-item list-group-item-action">PHONE :{{ $MySearch->numero }}</a>
                    <a class="list-group-item list-group-item-action">EMAIL :{{ $MySearch->email }}</a>
                @endforeach 
                @endif
            </div> 
    </div>
    <br>


    <div class="container-fluid" style="width: 95%">

        {{-- tableau --}}
        <div class="table-responsive">

            <table class="table table-sm table-hover table-dark table-bordered">

                <thead>
                    <th>NOM</th>
                    <p>
                        <th>PRENOM</th>
                    <p>
                        <th>TELEPHONE</th>
                    <p>
                        <th>EMAIL</th>
                    <p>
                        <th>ENTREPRISE</th>
                    <p>
                        <th>ACTION</th>
                    <p>
                </thead>
                <tbody style="font-size: 13px">
                    @foreach ($collaborateurs as $item)

                        <tr>
                            <td>{{ $item['nom'] }}</td>
                            <p>
                                <td>{{ $item['prenom'] }}</td>
                            <p>
                                <td>{{ $item['numero'] }}</td>
                            <p>
                                <td>{{ $item['email'] }}</td>
                            <p>
                                
                                <td>{{ $item->entreprise->nom }}</td>
                            <p>
                                <td>
                                    <div
                                        style="flex-direction: row; display: flex; width: 100%; height:100%;justify-content: center;">
                                        <form action="{{ route('collaborateur.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn-danger">Delete</button>
                                        </form>
                                        <form action="{{ route('collaborateur.edit', $item->id) }}" method="GET">
                                            @csrf
                                            @method("GET")

                                            <button type="submit" class="btn-warning">update</button>
                                        </form>
                                    </div>
                                </td>

                        </tr>
                    @endforeach
                </tbody>
                <p>
            </table>
            <p>
        </div>
        <p>
    </div>
    <p>
        </div>
        </div>
</body>

</html>
