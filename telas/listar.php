
<h1>Listar Contatos</h1>

<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($contatos as $posicao => $cadaContato) {
                $partes = explode(";", $cadaContato);
                echo "<tr>";
                    foreach ($partes as $cadaParte) {
                        echo "<td>{$cadaParte}</td>";
                    }
                    echo "<td>
                            <a href='/editar?id={$posicao}' class='btn btn-warning btn-sm'>Editar</a>
                            <a href='/excluir?id={$posicao}' class='btn btn-danger btn-sm'>Excluir</a>
                          </td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>