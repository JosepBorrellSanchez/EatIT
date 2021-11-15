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
                <?php $attributes = array('class' => 'form-horizontal form-bordered'); ?>
                <?php echo form_open('categoria/add', $attributes); ?>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-name">Nom</label>
                        <div class="col-md-9">
                        <input type="text" name="nom" class="form-control" placeholder="Nom de la categoria" value="<?php echo $this->input->post('nom'); ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-short-description">Descripció</label>
                        <div class="col-md-9">
                            <textarea id="descripcio" name="descripcio" class="form-control" rows="3"><<?php echo $this->input->post('descripcio'); ?>/textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Imatge</label>
                        <div class="col-md-9">
                            <input type="text" id="imatge" name="imatge" class="form-control" placeholder="Url de la imatge">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Miniatura</label>
                        <div class="col-md-9">
                            <input type="text" id="miniatura" name="miniatura" class="form-control" placeholder="URL de la miniatura">
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Afegir</button>
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