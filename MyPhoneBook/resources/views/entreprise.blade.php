<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>entreprise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div class="header" class="rounded-pill">
        <h1 style="display: flex;justify-content: center;margin: 30px">Myphonebook</h1>
    </div>

    <h2>ENTREPRISES</h2>
    <div class="image" >
        
        <div class="create" style="background-image: url(../image/entreprise.jpg);margin-right:20px;">
            <div class="ic">
                <img src="image/entreprise.jpeg" class="rounded-pill" style="positiob:fixed;" alt="">
            </div>
            <br>
            <div class="ci">
                <form action="{{ route('entreprise.create') }}" method="GET">
                    @csrf
                    @method("GET")
                    <p style="margin-left:5%;">
                        <button type="submit" class="btn-success btn-lg ">Create</button>
                    </p>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="width: 95%">


        {{-- tableau --}}
        <div class="table-responsive">
            <table class="table table-sm table-hover table-dark table-bordered">
                <thead>
                    <th>NOM</th>
                    <p>
                        <th>TELEPHONE</th>
                    <p>
                        <th>EMAIL</th>
                    <p>
                        <th>CODE POSTALE</th>
                    <p>
                        <th>ACTION</th>
                    <p>

                </thead>
                <p>
                    <tbody style="font-size: 13px">
                        @foreach ($entreprises as $item)

                            <tr>
                                <td>{{ $item['nom'] }}</td>
                                <p>
                                    <td>{{ $item['numero'] }}</td>
                                <p>
                                    <td>{{ $item['email'] }}</td>
                                <p>
                                    <td>{{ $item['code_postal'] }}</td>
                                <p>
                                    <td>
                                        <div
                                            style="flex-direction: row; display: flex; width: 100%; height:100%; justify-content: center;">
                                            <form action="{{ route('entreprise.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="btn-danger">Delete</button>
                                            </form>
                                            <form action="{{ route('entreprise.edit', $item->id) }}" method="GET">
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
    <p>
</body>

</html>
