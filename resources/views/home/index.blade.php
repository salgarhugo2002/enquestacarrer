@extends('layouts.app-master')

@section('content')
    <h1>Home</h1>
    <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Encuestas App</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      text-align: center;
    }

    h1 {
      color: #333;
    }

    p {
      color: #666;
      margin-bottom: 20px;
    }

    .start-button {
      display: inline-block;
      background-color: #ff7f50;
      color: #fff;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      transition: background-color 0.3s;
    }

    .start-button:hover {
      background-color: #ff6347;
    }
  </style>
</head>
@guest
<body>
  <div class="container">
    <h1>Benvingut Enquestes App</h1>
    <p>Realitza enquestes i recopila opinions de manera fàcil y ràpida.</p>
    <a class="start-button" href="/login">Començar</a>
  </div>
</body>
@endguest
@auth
<body>
  <div class="container">
    <h1>Benvingut Enquestes App</h1>
    <p>Realitza enquestes ai recopila opinions de manera fàcil y ràpida.</p>
    <a class="start-button" href="/enquestas/create">Començar</a>
  </div>
</body>


@endauth







@endsection
