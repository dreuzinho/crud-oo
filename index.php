<?php
include 'contatoClass.php';

$contato = new Contato();

?>

<h1>Contatos</h1>
<a href="adicionar.php">[Adicionar]</a><br /><br />
<table border="1" width="500">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>ACOES</th>
    </tr>
    <?php
    $lista = $contato->getAll();
    foreach ($lista as $item) :
    ?>
        <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['nome']; ?></td>
            <td><?php echo $item['email']; ?></td>
            <td>
                <a href="excluir.php?id=<?php echo $item['id']; ?>">[Excluir]</a>
                -
                <a href="editar.php?id=<?php echo $item['id']; ?>">[Editar]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>