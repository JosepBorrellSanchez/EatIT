<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- eCommerce Orders Header -->
    <?php include 'inc/ecommerce_head.php';?>
    <!-- END eCommerce Orders Header -->

    <!-- Quick Stats -->
    <div class="row text-center">
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background">
                    <h4 class="widget-content-light"><strong>Comandes </strong>pendents</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 animation-expandOpen">N/A</span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-dark">
                    <h4 class="widget-content-light"><strong>Comandes</strong> avui</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">N/A</span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-dark">
                    <h4 class="widget-content-light"><strong>Comandes</strong> aquest mes</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">N/A</span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-dark">
                    <h4 class="widget-content-light"><strong>Total</strong> mes anterior</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">N/A</span></div>
            </a>
        </div>
    </div>
    <!-- END Quick Stats -->

    <!-- All Orders Block -->
    <div class="block full">
        <!-- All Orders Title -->
        <div class="block-title">
            <div class="block-options pull-right">
                <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
            </div>
            <h2><strong>Totes</strong> les comandes</h2>
        </div>
        <!-- END All Orders Title -->

        <!-- All Orders Content -->
        <table id="ecom-orders" class="table table-bordered table-striped table-vcenter">
            <thead>
                <tr>
                    <th class="text-center" style="width: 100px;">ID</th>
                    <th class="text-center visible-lg">Nom</th>
                    <th class="text-center visible-lg">Cognoms</th>
                    <th class="text-center visible-lg">Email</th>
                    <th class="text-center visible-lg">Telèfon</th>
                    <th class="text-center visible-lg">Ciutat</th>
                    <th class="text-center visible-lg">CP</th>
                    <th class="text-center visible-lg">Import</th>
                    <th class="hidden-xs">Direcció enviament</th>
                    <th class="hidden-xs">Missatge</th>
                    <th>Estat</th>
                    <th class="hidden-xs text-center">Data</th>
                    <th class="text-center">Accions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $labels['Finalitzada']['class']   = "label-success";
                $labels['Enviada']['class']   = "label-info";
                $labels['Cancel·lada']['class']   = "label-danger";
                $labels['En tràmit']['class']   = "label-warning";
                $labels['Rebuda']['class']   = "label-default";
                ?>
                <?php foreach($comandes as $comanda){ ?>
                <tr>
                    <td class="text-center"><a href=<?php echo site_url('comanda/edit/'.$comanda['id']); ?>><strong><?php echo $comanda['id']; ?></strong></a></td>
                    <td class="text-center visible-lg"><?php echo $comanda['Nom']; ?></a></td>
                    <td class="text-center visible-lg"><?php echo $comanda['Cognoms']; ?></a></td>
                    <td class="text-center visible-lg"><?php echo $comanda['email']; ?></a></td>
                    <td class="text-center visible-lg"><?php echo $comanda['Telefon']; ?></a></td>
                    <td class="text-center visible-lg"><?php echo $comanda['Ciutat']; ?></a></td>
                    <td class="text-center visible-lg"><?php echo $comanda['cp']; ?></a></td>
                    <td class="text-center visible-lg"><?php echo $comanda['preuTotal']; ?></a></td>
                    <td class="hidden-xs"><?php echo $comanda['enviament']; ?></td>
                    <td class="hidden-xs"><?php echo $comanda['missatge']; ?></td>
                    <td><span class="label<?php $comanda['estat']; echo ($labels[$comanda['estat']]['class']) ? " " . $labels[$comanda['estat']]['class'] : ""; ?>"><?php echo $comanda['estat']; ?></span></td>
                    <td class="hidden-xs text-center"><?php echo $comanda['data']?></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                        <a href="<?php echo site_url('comanda/veure/'.$comanda['id']); ?>" data-toggle="tooltip" title="Veure" class="btn btn-default"><i class="fa fa-eye"></i></a>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <!-- END All Orders Content -->
    </div>
    <!-- END All Orders Block -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/ecomOrders.js"></script>
<script>$(function(){ EcomOrders.init(); });</script>

<?php include 'inc/template_end.php'; ?>