<main class="container mt-4 bg-light border border-dark rounded">
    <h1>Editar categoria</h1>
    <hr>
    <?php
    $category = $data->FETCH(\PDO::FETCH_ASSOC);
    extract($category);
    ?>
    <div class="row align-items-center">
        <div class="col-6 p-3 border-end border-dark">
            <form action="" method="post">
                <p class=mb-5>Não se esqueça de preencher todas as informações sobre o produto.</p>
                <div class="form-floating mb-3">
                    <div class="form-floating mb-3">
                        <input value="<?php echo $name ?>" id="name" name="name" type="text" class="form-control" placeholder="50" required>
                        <label class="form-label" for="name">Nome da nova categoria</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea name="description" id="description" cols="30" rows="2" class="form-control" placeholder="50"required><?php echo $description ?></textarea>
                        <label class="form-label" for="description">Descrição</label>
                    </div>
                </div>
                <button class="btn btn-lg btn-primary" type="submit">Adicionar</button>
            </form>
        </div>
        <div class="col-6">
            <img src="https://cdn.pixabay.com/photo/2019/08/18/09/26/flatlay-4413792_1280.jpg" class="img-fluid my-3" alt="...">
        </div>
    </div>
</main>
