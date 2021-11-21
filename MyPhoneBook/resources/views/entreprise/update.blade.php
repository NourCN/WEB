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
        <form action="{{ route('entreprise.update', $data->id) }}" method="POST">
            @csrf
            @method("PATCH")

            <div>

                <input type="hidden" name="id" value="{{ $data['id'] }}">
            </div>
            <div class="input-container">
                <i class="fa fa-female icon"></i>
                <input type="text" name="nom" value="{{ $data['nom'] }}" class="input-field">
            </div>
            <div class="input-container">
                <i class="fa fa-home icon"></i>
                <input type="text" name="rue" value="{{ $data['rue'] }}" class="input-field">
            </div>
            <div class="input-container">
                <i class="fa fa-code icon"></i>
                <input type="nmber" name="code_postal" value="{{ $data['code_postal'] }}" class="input-field">
            </div>

            <div class="input-container">
                <i class="fa fa-landmark icon"></i>
                <input type="text" name="ville" value="{{ $data['ville'] }}" class="input-field">
            </div>
            <div class="input-container">
                <i class="fa fa-phone icon"></i>
                <input type="text" name="numero" value="{{ $data['numero'] }}" class="input-field">
            </div>
            <div class="input-container">
                <i class="fa fa-envelope icon"></i>
                <input type="email" name="email" value="{{ $data['email'] }}" class="input-field">
            </div>

            <div class="upBtn"><button class="btn" type="submit">Update</button></div>

        </form>

    </div>
</body>

</html>
