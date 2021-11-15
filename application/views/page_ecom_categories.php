<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
<?php include 'inc/ecommerce_head.php';?>

    <!-- Quick Stats -->
    <div class="row text-center">
        <div class="col-sm-6 col-lg-3">
            <a href="<?=base_url();?>index.php/categoria/add" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-success">
                    <h4 class="widget-content-light"><strong>Afegir</strong> una categoria</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 text-success animation-expandOpen"><i class="fa fa-plus"></i></span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-danger">
                    <h4 class="widget-content-light"><strong>Més </strong> visitada</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 text-danger animation-expandOpen">N/A</span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-dark">
                    <h4 class="widget-content-light"><strong>Més </strong> venudes</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">N/A</span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-dark">
                    <h4 class="widget-content-light"><strong>Total</strong> categories</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">N/A</span></div>
            </a>
        </div>
    </div>
    <!-- END Quick Stats -->

    <!-- All Products Block -->
    <div class="block full">
        <!-- All Products Title -->
        <div class="block-title">
            <div class="block-options pull-right">
                <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
            </div>
            <h2><strong>Taula</strong> categories</h2>
        </div>
        <!-- END All Products Title -->

        <!-- All Products Content -->
        <table id="ecom-products" class="table table-bordered table-striped table-vcenter">
            <thead>
                <tr>
                    <th class="text-center" style="width: 70px;">ID</th>
                    <th>Nom de la categoria</th>
                    <th class="hidden-xs">Descripció</th>
                    <th class="hidden-xs text-center">Miniatura</th>
                    <th class="text-center">Acció</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($categories as $categoria){ ?>
                <tr>
                    <td class="text-center"><strong><?php echo $categoria->id; ?></strong></a></td>
                    <td><?php echo $categoria->nom; ?></a></td>
                    <td class="hidden-xs"><?php echo $categoria->descripcio; ?></td>
                    <td class="text-center hidden-xs"><img src=<?php echo $categoria->miniatura; ?> alt="HTML tutorial" style="width:90px;height:90px;"></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a href="<?php echo site_url('categoria/edit/'.$categoria->id); ?>" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                            <a href="<?php echo site_url('categoria/remove/'.$categoria->id); ?>" onclick="return confirm('Estas segur que vols eliminar aquesta categoria?');" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <!-- END All Products Content -->
    </div>
    <!-- END All Products Block -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/ecomProducts.js"></script>
<script>$(function(){ EcomProducts.init(); });</script>

<?php include 'inc/template_end.php'; ?>