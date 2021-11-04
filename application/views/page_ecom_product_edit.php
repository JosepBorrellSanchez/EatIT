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
                <form action="page_ecom_product_edit.php" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-name">Nom</label>
                        <div class="col-md-9">
                        <input type="text" name="nom" class="form-control" value="<?php echo ($this->input->post('nom') ? $this->input->post('nom') : $producte['nom']); ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-short-description">Descripció</label>
                        <div class="col-md-9">
                            <textarea id="product-short-description" name="product-short-description" class="form-control" rows="3"><?php echo ($this->input->post('descripcio') ? $this->input->post('descripcio') : $producte['descripcio']); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-category">Categoria</label>
                        <div class="col-md-8">
                            <!-- Chosen plugin (class is initialized in js/app.js -> uiInit()), for extra usage examples you can check out http://harvesthq.github.io/chosen/ -->
                            <select id="product-category" name="product-category" class="select-chosen" data-placeholder="Choose Category.." style="width: 250px;">
                                <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                <option value="1" selected>Tablets</option>
                                <option value="2">Laptops</option>
                                <option value="3">PCs</option>
                                <option value="4">Consoles</option>
                                <option value="5">Movies</option>
                                <option value="6">Books</option>
                                <option value="7">Cables</option>
                                <option value="8">Adapters</option>
                                <option value="9">Office</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-price">Preu</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-eur"></i></div>
                                <input type="text" id="product-price" name="product-price" class="form-control" placeholder="0,00" value="<?php echo ($this->input->post('preu') ? $this->input->post('preu') : $producte['preu']); ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Sku</label>
                        <div class="col-md-9">
                            <input type="text" id="product-name" name="product-name" class="form-control" placeholder="SKU" value="<?php echo ($this->input->post('sku') ? $this->input->post('sku') : $producte['sku']); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Actiu?</label>
                        <div class="col-md-9">
                            <label class="switch switch-primary">
                                <?if($producte['sku'] == "on"){?>
                                    <input type="checkbox" id="product-status" name="product-status" checked><span></span>
                                <?}?>
                                
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Save</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
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