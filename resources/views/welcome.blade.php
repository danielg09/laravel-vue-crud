<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel & Vue</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        
        <div id="main" class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h1>Lista Vuejs - AJAX Axios</h1>
                    <ul class="list-group">
                        <li class="list-group-item" v-for="item in list">@{{ item.name}}</li>
                    </ul>
                </div>
                <div class="col-sm-8">
                    <h1>JSON</h1>
                    <pre>
                        @{{ $data }}
                    </pre>
                </div>

            </div>
        </div>


        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
