<?php
    include_once("PessoaController.php");
    include_once("Pessoa.php");
?>
<table id="lista_usuarios">
    <thead>
        <tr>

            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Editar</th>
            <th>Excluir</th>

        </tr>
    </thread>
    <tbody>
        <?php
            $controllerPessoa = new PessoaController();
            $listaPessoas = $controllerPessoa->listarPessoas();
            foreach ($variable as $key => $value) {
                # code...
            }

            var_dump($listaPessoas);
        ?>
    </tbody>
</table>
