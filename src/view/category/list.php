<main class="container mt-4 bg-light border border-dark rounded p-5">
    <a href="/categorias/adicionar" class="btn btn-sm m-4 p-3 border border-dark border-sm shadow float-end" style="background: linear-gradient(180deg, rgba(255,252,31,1) 0%, rgba(255,200,0,1) 100%);" type="button">Adicionar categoria</a>
    <h1>Listar Category</h1>
    <hr>

    <table class="table table-striped table-bordered table-responsive caption-top my-5 shadow">
        <thead>
            <caption>Lista de categorias</caption>
            <tr class="table-warning">
                <th>#ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>opções</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
                while ($category = $data->FETCH(\PDO::FETCH_ASSOC)) {
                    extract($category);
                    echo '<tr>';
                        echo "<th>{$id}</th>";
                        echo "<td>{$name}</td>";
                        echo "<td>{$description}</td>";
                        echo "<td class='d-flex justify-content-evenly'>
                                <a class='btn btn-warning btn-sm' href='/categorias/editar?id={$id}'>editar
                                <a class='btn btn-danger btn-sm' href='/categorias/excluir?id={$id}'>excluir
                            </td>";
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>

</main>
