<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <style>
        .image div {
            margin-left: 20px;
        }

        img {
            width: 300px;
            height: 300px;
            margin: 20px;
            border: solid;
        }

        .acceuil {
            background-image: url(/image/nature.jpeg)
        }


        button:active {
            font-size: 20px;
        }

        .acceuil {
            background-color: #1B4F72;
        }

        h1 {
            display: flex;
            justify-content: center;
            margin: 30px
        }

    </style>
    <h1>Myphonebook</h1>
    <div class="py-12" style="background-color: #1B4F72; width: 90%; margin-left:auto;margin-right:auto;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="acceuil">
                        <div class="image"
                            style="display: flex;flex-direction: row;justify-content: center; margin-left:10px;">
                            <div>

                                <img src="image/entreprise.jpeg" class="rounded-pill" alt="">
                                <form action="{{ route('entreprise.index') }}" method="GET">
                                    @csrf
                                    @method("GET")
                                    <p style="text-align: center; padding:10px;" class="btn-primary">
                                        <button>ENTREPRISE</button>
                                    </p>
                                </form>

                            </div>
                            <div>
                                <img src="image/main.jpeg" class="rounded-pill" alt="">

                                <form action="{{ route('collaborateur.index') }}" method="GET">
                                    @csrf
                                    @method("GET")
                                    <p style="text-align: center; padding:10px;" class="btn-success">
                                        <button>COLLABORATEUR</button>
                                    </p>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1>NOUR - ALI @ETNA</h1>
</x-app-layout>
