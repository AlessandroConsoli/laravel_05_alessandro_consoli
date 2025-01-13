<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail Template</title>
</head>
<body>
    <h1>Grazie per averci contattati! Di seguito i tuoi dati:</h1>
    <h3>Nome: {{$contactMail['name']}}</h3>
    <h4>Email: {{$contactMail['email']}}</h4>
    <h4>Messaggio: {{$contactMail['description']}}</h4>
</body>
</html>