<main class="container mt-4 bg-light border border-dark rounded p-5">
    <h1>Adicionar categoria</h1>
    <hr>
    
    <div class="row align-items-center h-50">
        <div class="col-6">
            <img src="https://cdn.pixabay.com/photo/2016/03/23/19/38/shopping-cart-1275482_1280.jpg" class="img-fluid my-3" style="widht:400px;" alt="...">
        </div>
        <div class="col-6 p-3 border-end border-dark">
            <form action="" method="post">         
                <p>Cadastre uma nova categoria para seus produtos.</p>
                <div class="form-floating mb-3">
                    <input id="name" name="name" type="text" class="form-control" placeholder="50" required>
                    <label class="form-label" for="name">Nome da nova categoria</label>
                </div>

                <div class="form-floating mb-3">
                    <textarea name="description" id="description" style="height: 100px;" class="form-control" placeholder="50" required></textarea>
                    <label class="form-label" for="description">Descrição da categoria</label>
                </div>                
                <button class="btn btn-lg btn-primary" type="submit">Adicionar</button>
            </form>
        </div>
</main>

