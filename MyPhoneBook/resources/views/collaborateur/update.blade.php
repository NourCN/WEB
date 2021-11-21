<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <style>
        .input-container {
            display: flex;
            margin-bottom: 15px;
        }

        .icon {
            padding: 10px;
            background: dodgerblue;
            color: white;
            min-width: 50px;
            text-align: center;
            margin-left: 20px
        }

        .input-field {
            width: 100%;
            padding: 10px;
            outline: none;
           
        }

        .input-field:focus {
            border: 2px solid dodgerblue;
        }

        .upBtn {
            display: flex;
            justify-content: center
        }

        .btn {
            background-color: dodgerblue;
            color: white;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            width: 30%;
            opacity: 0.9;
            margin-left: 20px;
        }

        .main {
            display: flex;
            justify-content: center;
            margin-top: 20px;

        }

        .btn:hover {
            opacity: 1;
        }

        .radio {
            display: flex;
            flex-direction: center;
        }

        .header {
            background-color: #154360;
            margin: 10px;
            padding: 20px;
            border: solid;
            border-radius: 20px;
        }

    </style>
</head>

<body>
    <div class="header" class="rounded-pill">
        <h1 style="display: flex;justify-content: center;margin: 30px;">Myphonebook</h1>
    </div>

    <div class="main">
        <form action="{{ route('collaborateur.update', $data->id) }}" method="POST">
            @csrf
            @method("PATCH")

            <input type="hidden" name="id" value="{{ $data['id'] }}" class="input-field">
            <div class="radio">

                <div>
                    <i class="fa fa-male icon "></i>
                    <input type="radio" name="newcivilite" value="Homme" class="rad" checked>
                    <label for="homme" class="rad">Homme</label>
                </div>

                <div>
                    <i class="fa fa-female icon"></i>
                    <input type="radio" name="newcivilite" value="Femme" class="rad">
                    <label for="femme" class="rad">Femme</label>
                </div>

                <div>
                    <i class="fa fa-genderless icon"></i>
                    <input type="radio" name="newcivilite" value="Non-binaire" class="rad">
                    <label for="non-binaire" class="rad">Non-binaire</label>
                </div>
            </div>

            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input type="text" name="nom" value="{{ $data['nom'] }}" class="input-field">
            </div>
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input type="text" name="prenom" value="{{ $data['prenom'] }}" class="input-field">
            </div>
           
            <div class="input-container">
                <i class="fa fa-phone icon"></i>
                <input type="text" name="numero" value="{{ $data['numero'] }}" class="input-field">
            </div>
            <div class="input-container">
                <i class="fa fa-envelope icon"></i>
                <input type="email" name="email" value="{{ $data['email'] }}" class="input-field">
            </div>
            
            <div class="input-container">
                <i class="fa fa-users icon"></i>
                <input type="text" name="nom_ent" value="{{ $data->entreprise->nom }}" class="input-field">
            </div>
            <div class="input-container">
                <i class="fa fa-phone icon"></i>
                <input type="text" name="numero" value="{{ $data->entreprise->numero}}" class="input-field">
            </div>
            
            <div class="upBtn">
                <button type="submit" class="btn">Update</button>
            </div>
            <div class="input-container">
                
                <input type="hidden" name="entreprise_id" value="{{ $data['entreprise_id'] }}" class="input-field">
            </div>
            <div class="input-container">
         
                <input type="hidden" name="rue" value="{{ $data['rue'] }}" class="input-field">
            </div>
            <div class="input-container">
              
                <input type="hidden" name="code_postal" value="{{ $data['code_postal'] }}" class="input-field">
            </div>
            <div class="input-container">

            </div>
            <div class="input-container">
                
                <input type="hidden" name="ville" value="{{ $data['ville'] }}" class="input-field">
            </div>
        </form>

    </div>
</body>

</html>
