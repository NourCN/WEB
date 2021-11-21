<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Create</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        h1 {
            text-align: center;
        }

        body {
            margin: 0px 150px 0px 150px;

        }

        input {
            border-style: none none solid none;
            border-bottom-color: #000;
        }

        form {

            border-style: none none none none;
            list-style-type: none;
            display: flex;
            flex-direction: column;
        }

        .civilite {
            display: flex;
            flex-direction: row;
            margin-left: 20px
        }

        .civilite label {
            margin-left: 10px;
        }

        .civilite input {
            margin-left: 10px;
        }

    </style>


</head>

<body>
    <div style=" background-color: #154360;margin: 10px;padding: 20px;border: solid;border-radius: 20px;" class="rounded-pill">
        <h1 style="display: flex;justify-content: center;margin: 30px;">Myphonebook</h1>
    </div>
    <h1>CREATION ENTREPRISE</h1>
    <div>
        <form action="{{ route('entreprise.store') }}" method="POST">
            @csrf
            @method("POST")
            <label for="nom">Nom</label>
            <input type="text" name="nom">
            <br>
            <label for="rue">rue</label>
            <input type="adress" name="rue">
            <br>
            <label for="code_postal">Code postale</label>
            <input type="number" name="code_postal">
            <br>
            <label for="ville">Ville</label>
            <input type="text" name="ville">
            <br>
            <label for="numero">Telephone</label>
            <input type="tel" name="numero">
            <br>
            <label for="email">Email</label>
            <input type="email" name="email">
            <br>
            <br>
            <button type="submit" class="btn-danger">Create</button>
        </form>
        <br>
    </div>


</body>

</html>
