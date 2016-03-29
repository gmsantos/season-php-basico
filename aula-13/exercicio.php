<?php

$mysqli = new mysqli("localhost", "php", "senha", "teste");

$campos = [
    'nome' => ['tipo' => 'text'],
    'sobrenome' => ['tipo' => 'text'],
    'cpf' => ['tipo' => 'text'],
    'rg' => ['tipo' => 'text'],
    'nascimento' => ['tipo' => 'date']
];

if (isset($_POST['nome'])) {
    
    $usuario = false;
   
    $data = DateTime::createFromFormat('Y-m-d', $_POST['nascimento']) ?: die('Data Invalida!');
    $insertStmt = $mysqli->prepare('INSERT INTO cadastro (nome, sobrenome, cpf, rg, nascimento) VALUES (?, ?, ?, ?, ?)');
    
    $insertStmt->bind_param('sssss', 
        $_POST['nome'],
        $_POST['sobrenome'],
        $_POST['cpf'],
        $_POST['rg'],
        $_POST['nascimento'] 
    );
    
    $insertStmt->execute();
    $insertStmt->close();
    
    echo 'Adicionado com sucesso'; exit;
    
}

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">

        <title>Exercício</title>
    </head>

    <body>
        <form method="post" action="">
            <fieldset>
                <legend>Faça seu cadastro</legend>
               
                <?php
                foreach ($campos as $label => $dados) {
                    echo '<label for="' . $label . '">' . ucfirst($label) . '</label><br />';
                    echo '<input type="' . $dados['tipo'] . '" name="' . $label . '" id="' . $label . '" /><br /><br />';
                }
                ?>
               
                <input type="submit" value="Enviar" />
            </fieldset>
        </form>
    </body>
    
    <!-- Listagem de todos os cadastros -->
    
</html>
<?php

    $mysqli->close();

?>
