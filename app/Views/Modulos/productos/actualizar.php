<?= $header ?>
<div class="row">
    <div class="col-md-12">
        <h5>Actualizando datos de los productos</h5>


        <form action="<?= base_url('productos/actualizar') ?>" method="post" id="form-productos" autocomplete="off">

        <input type="hidden" id="idproducto" name="idproducto" value="<?= $registro['id'] ?>">
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <input type="text" value="<?= $registro['tipo']?>" class="form-control" id="tipo" name="tipo" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text"value="<?= $registro['descripcion']?>" class="form-control" id="descripcion" name="descripcion" required>
            </div>

            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" value="<?= $registro['precio']?>" class="form-control" id="precio" name="precio" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" value="<?= $registro['stock']?>" class="form-control" id="stock" name="stock" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="<?= base_url('productos') ?>" class="btn btn-secondary">Cancelar</a>

        </form>
    </div>
</div>

<?= $footer ?>