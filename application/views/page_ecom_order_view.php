<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- eCommerce Order View Header -->
    <?php include 'inc/ecommerce_head.php';?>
    <!-- END eCommerce Order View Header -->

    <!-- Order Status -->
    <div class="row text-center">
        <div class="col-sm-6 col-lg-3">
            <div class="widget">
                <div class="widget-extra themed-background-success">
                    <h4 class="widget-content-light"><strong>Comanda</strong></h4>
                </div>
                <div class="widget-extra-full"><span class="h2 text-success animation-expandOpen"><?php echo $comanda['id']?></span></div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="widget">
                <div class="widget-extra themed-background-success">
                    <h4 class="widget-content-light"><i class="fa fa-paypal"></i> <strong>Pagament</strong></h4>
                </div>
                <div class="widget-extra-full"><span class="h2 text-success animation-expandOpen"><i class="fa fa-check"></i></span></div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="widget">
                <div class="widget-extra themed-background-warning">
                    <h4 class="widget-content-light"><i class="fa fa-archive"></i> <strong>Packaging</strong></h4>
                </div>
                <div class="widget-extra-full"><span class="h2 text-warning"><i class="fa fa-refresh fa-spin"></i></span></div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="widget">
                <div class="widget-extra themed-background-muted">
                    <h4 class="widget-content-light"><i class="fa fa-truck"></i> <strong>Enviament</strong></h4>
                </div>
                <div class="widget-extra-full"><span class="h2 text-muted animation-pulse"><i class="fa fa-ellipsis-h"></i></span></div>
            </div>
        </div>
    </div>
    <!-- END Order Status -->

    <!-- Products Block -->
    <div class="block">
        <!-- Products Title -->
        <div class="block-title">
            <h2><i class="fa fa-shopping-cart"></i> <strong>Productes</strong></h2>
        </div>
        <!-- END Products Title -->

        <!-- Products Content -->
        <div class="table-responsive">
            <table class="table table-bordered table-vcenter">
                <thead>
                    <tr>
                        <th>Nom del producte</th>
                        <th class="text-center">Quantitat</th>
                        <th class="text-center">Descompte</th>
                        <th class="text-right" style="width: 10%;">Preu unitat</th>
                        <th class="text-right" style="width: 10%;">Preu total</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($detallscomanda as $detalls){ ?>
                    <tr>
                        <td><a href=<?php echo site_url('producte/edit/'.$detalls->id)?>><?php echo $detalls->nom?></a></td>
                        <td class="text-center"><strong><?php echo $detalls->quantitat?></strong></td>
                        <td class="text-center"><strong><?php echo $detalls->descompte?></strong></td>
                        <td class="text-right"><strong><?php echo $detalls->preu?></strong></td>
                        <td class="text-right"><strong><?php echo $detalls->preu*$detalls->quantitat?> ???</strong></td>
                    </tr>
                <?php }?>
                <tr class="active">
                        <td colspan="4" class="text-right text-uppercase"><strong>Total:</strong></td>
                        <td class="text-right"><strong><?php echo $comanda['preuTotal']?> ???</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END Products Content -->
    </div>
    <!-- END Products Block -->

    <!-- Addresses -->
    <div class="row">
        <div class="col-sm-6">
            <!-- Billing Address Block -->
            <div class="block">
                <!-- Billing Address Title -->
                <div class="block-title">
                    <h2><i class="fa fa-building-o"></i> <strong>Missatge</strong></h2>
                </div>
                <!-- END Billing Address Title -->

                <!-- Billing Address Content -->
                <address>
                    <?php echo $comanda['missatge'];?>
                </address>
                <!-- END Billing Address Content -->
            </div>
            <!-- END Billing Address Block -->
        </div>
        <div class="col-sm-6">
            <!-- Shipping Address Block -->
            <div class="block">
                <!-- Shipping Address Title -->
                <div class="block-title">
                    <h2><i class="fa fa-building-o"></i> <strong>Adre??a </strong>d'enviament</h2>
                </div>
                <!-- END Shipping Address Title -->

                <!-- Shipping Address Content -->
                <address>
                <?php echo $comanda['enviament'];?>
                </address>
                <!-- END Shipping Address Content -->
            </div>
            <!-- END Shipping Address Block -->
        </div>
    </div>
    <!-- END Addresses -->

    <!-- Log Block -->
    <div class="block">
        <!-- Log Title -->
        <div class="block-title">
            <h2><i class="fa fa-file-text-o"></i> <strong>Log</strong> de la comanda (en construcci??)</h2>
        </div>
        <!-- END Log Title -->

        <!-- Log Content -->
        <div class="table-responsive">
            <table class="table table-bordered table-vcenter">
                <tbody>
                    <tr>
                        <td>
                            <span class="label label-primary">Order</span>
                        </td>
                        <td class="text-center">October 17, 2014 - 12:00</td>
                        <td><a href="javascript:void(0)">Support</a></td>
                        <td class="text-success"><i class="fa fa-fw fa-check"></i> <strong>Order Completed</strong></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="label label-primary">Order</span>
                        </td>
                        <td class="text-center">October 17, 2014 - 10:15</td>
                        <td><a href="javascript:void(0)">Support</a></td>
                        <td class="text-info"><i class="fa fa-fw fa-info-circle"></i> <strong>Preparing Order</strong></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="label label-success">Payment</span>
                        </td>
                        <td class="text-center">October 16, 2014 - 17:15</td>
                        <td><a href="javascript:void(0)">Harry Burke</a></td>
                        <td class="text-success"><i class="fa fa-fw fa-check"></i> <strong>Payment Completed</strong></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="label label-danger">Email</span>
                        </td>
                        <td class="text-center">October 16, 2014 - 09:10</td>
                        <td><a href="javascript:void(0)">Support</a></td>
                        <td class="text-danger"><i class="fa fa-fw fa-exclamation-triangle"></i> <strong>Missing payment details. Email was sent and awaiting for payment before processing</strong></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="label label-primary">Order</span>
                        </td>
                        <td class="text-center">October 15, 2014 - 12:26</td>
                        <td><a href="javascript:void(0)">Support</a></td>
                        <td><strong>All products are available</strong></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="label label-primary">Order</span>
                        </td>
                        <td class="text-center">October 15, 2014 - 12:15</td>
                        <td><a href="javascript:void(0)">Harry Burke</a></td>
                        <td><strong>Order Submitted</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END Log Content -->
    </div>
    <!-- END Log Block -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>