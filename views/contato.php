<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Página CONTATO</h1>
    <hr>
    <form action="<?php echo base_url('contato/enviar');?>" method="POST">
        <p>
            <label>Nome:</label>
            <input type="text" name="nome">
        </p>
        <p>
            <label>Email:</label>
            <input type="email" name="email">
        </p>
        <p>
           <button type="submit">Enviar</button>
        </p>
    </form>
</body>
</html>