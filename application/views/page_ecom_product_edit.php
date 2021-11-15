<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- eCommerce Product Edit Header -->
<?php include 'inc/ecommerce_head.php';?>
    <!-- END eCommerce Product Edit Header -->

    <!-- Product Edit Content -->
    <div class="row">
        <div class="col-lg-6">
            <!-- General Data Block -->
            <div class="block">
                <!-- General Data Title -->
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Dades</strong> Generals</h2>
                </div>
                <!-- END General Data Title -->

                <!-- General Data Content -->
                <!--<form action="page_ecom_product_edit.php" method="post" class="form-horizontal form-bordered" onsubmit="return false;">-->
                <?php $attributes = array('class' => 'form-horizontal form-bordered'); ?>
                <?php echo form_open('producte/edit/'.$producte['id'], $attributes); ?>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-name">Nom</label>
                        <div class="col-md-9">
                        <input type="text" name="nom" class="form-control" value="<?php echo ($this->input->post('nom') ? $this->input->post('nom') : $producte['nom']); ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-short-description">Descripció</label>
                        <div class="col-md-9">
                            <textarea id="descripcio" name="descripcio" class="form-control" rows="3"><?php echo ($this->input->post('descripcio') ? $this->input->post('descripcio') : $producte['descripcio']); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-category">Categoria</label>
                        <div class="col-md-8">
                            <!-- Chosen plugin (class is initialized in js/app.js -> uiInit()), for extra usage examples you can check out http://harvesthq.github.io/chosen/ -->
                                <select id="id_categoria" name="id_categoria" class="select-chosen" data-placeholder="Choose Category.." style="width: 250px;">
                                <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                
                                <?php foreach($categories as $categoria){ ?>
                                <?php if($categoria->id==$producte['id_categoria']) {?>
                                    <option value=<?php echo $categoria->id;?> selected><?php echo $categoria->nom?> </option>
                                <?php } else {?>
                                <option value=<?php echo $categoria->id?>><?php echo $categoria->nom?> </option>
                                <?php }?>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-price">Preu</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-eur"></i></div>
                                <input type="text" id="preu" name="preu" class="form-control" placeholder="0,00" value="<?php echo ($this->input->post('preu') ? $this->input->post('preu') : $producte['preu']); ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Sku</label>
                        <div class="col-md-9">
                            <input type="text" id="sku" name="sku" class="form-control" placeholder="SKU" value="<?php echo ($this->input->post('sku') ? $this->input->post('sku') : $producte['sku']); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Imatge</label>
                        <div class="col-md-9">
                            <input type="text" id="imatge" name="imatge" class="form-control" placeholder="Url de la imatge" value="<?php echo ($this->input->post('imatge') ? $this->input->post('imatge') : $producte['imatge']); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Miniatura</label>
                        <div class="col-md-9">
                            <input type="text" id="miniatura" name="miniatura" class="form-control" placeholder="URL de la miniatura" value="<?php echo ($this->input->post('miniatura') ? $this->input->post('miniatura') : $producte['miniatura']); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Actiu?</label>
                        <div class="col-md-9">
                            <label class="switch switch-primary">
                                <?php if($producte['actiu'] == 1) {?>
                                    <input type="checkbox" id="actiu" name="actiu" checked><span></span>
                                    <?php } else {?>
                                        <input type="checkbox" id="actiu" name="actiu"><span></span>
                                <?php }?>
                                
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button>
                            <button type="Esborrar" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Esborrar</button>
                        </div>
                    </div>
                </form>
                <!-- END General Data Content -->
            </div>
            <!-- END General Data Block -->
        </div>
        
    </div>
    <!-- END Product Edit Content -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- ckeditor.js, load it only in the page you would like to use CKEditor (it's a heavy plugin to include it with the others!) -->
<script src="js/helpers/ckeditor/ckeditor.js"></script>

<?php include 'inc/template_end.php'; ?>