<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>IFounds</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/styleLogin.css') }}"/>
</head>
<body>

<div class="wrapper">

  <x-loginLayout></x-loginLayout>
  <x-registerLayout></x-registerLayout>
  
</div>

<script src="{{asset('script/scripts.js')}}"></script>
</body>
</html>