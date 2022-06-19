<!DOCTYPE html>
<html lang="{{ str_replace('','-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <title>Emails</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}" rel="stylesheet">
    
</head>
<body>
  <h1>Contacto</h1>
  <p><strong>Nombre:</strong>{{$contacto['name']}}</p>
  <p><strong>Email:</strong>{{$contacto['email']}}</p>
  <p><strong>Mensaje:</strong>{{$contacto['mensaje']}}</p>
</body>
</html>