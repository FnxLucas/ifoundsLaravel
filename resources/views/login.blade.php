<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>IFounds</title>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/styleLogin.css') }}"/>
</head>
<body>

<div class="wrapper">

  <!-- ═══════════ LOGIN ═══════════ -->
  <x-loginLayout>></x-loginLayout>

  <!-- ═══════════ REGISTRO ═══════════ -->
  <x-registerLayout>></x-registerLayout>
  
</div><!-- /wrapper -->

<script src="{{asset('script/scripts.js')}}"></script>
</body>
</html>