<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação do formulário</title>
</head>
<body>
    <?php

    echo "<h1> Verificação do formulário <h1>";
        $nome = $_GET['nomeUsuario'];
        $sexo = $_GET['sexo'];
        $idade = $_GET['idade'];

    if($sexo == 'feminino' && $idade < 25){
        echo "$nome você foi aceito!";
    }else{
        echo "$nome você foi rejeitado!";
    };
    ?>
    
</body>
</html>