    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                    <h1>
                            Administrar
                            <small>Ordenes</small>
                    </h1>
                    <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li class="active">Ordenes</li>
                    </ol>
            </section>
            <script>
                   
            </script>
            <!-- Main content -->
            <section class="content">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                            <div class="col-md-12 col-xs-12">

                                    <div id="messages"></div>

                                    <?php if ($this->session->flashdata('success')) : ?>
                                            <div class="alert alert-success alert-dismissible" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <?php echo $this->session->flashdata('success'); ?>
                                            </div>
                                    <?php elseif ($this->session->flashdata('error')) : ?>
                                            <div class="alert alert-error alert-dismissible" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <?php echo $this->session->flashdata('error'); ?>
                                            </div>
                                    <?php endif; ?>


                                    <div class="box">
                                            <div class="box-header">
                                                    <h3 class="box-title">Agregar</h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <form role="form" action="<?php base_url('orders/create') ?>" method="post" class="form-horizontal">
                                                    <div class="box-body">

                                                            <?php echo validation_errors(); ?>

                                                            <div class="form-group">
                                                                    <label for="gross_amount" class="col-sm-12 control-label">Fecha: <?php echo date('Y-m-d') ?></label>
                                                            </div>
                                                            <div class="form-group">
                                                                    <label for="gross_amount" class="col-sm-12 control-label">Hora: <?php echo date('h:i a') ?></label>
                                                            </div>


                                                            <div class="col-md-4 col-xs-12 pull pull-left">
                                                                    <div class="form-group">

                                                                            <select name="tipo_de_documento" class="col-sm-5 control-label" id="tipo_documento" required onchange="showInp()">
                                                                                    <option value="">Tipo de documento</option>
                                                                                    <option value="Venta">Venta</option>
                                                                                    <option value="Reposición">Reposición</option>
                                                                                    <option value="Préstamo">Préstamo</option>
                                                                            </select>

                                                                            <div class="col-sm-7">
                                                                                    <input class="form-control" id="vacio" type="text" disabled />
                                                                                    <input class="form-control" id="factura" type="text" style="display: none" required name="bill_no" placeholder="No Factura" />
                                                                                    <input class="form-control" id="remision" type="text" style="display: none" required name="bill_no" placeholder="No Remisión" />
                                                                                    <input class="form-control" id="valedesalida" type="text" style="display: none" required name="bill_no" placeholder="No Vale de Salida" />
                                                                            </div>
                                                                    </div>



                                                                    Clave del Cliente:
                                                                    <select required id='clave' name="customer_address" class="form-control select_group input-sm">
                                                                            <?php
                                                                                echo '<option>Selecciona</option>';
                                                                                foreach ($users as $user) {

                                                                                        echo "<option value='" . $user['clave'] . "' >" . $user['clave'] . "</option>";
                                                                                }
                                                                                ?>
                                                                    </select>
                                                                    <br> <br>
                                                                    <input type="text" name="customer_name" class="form-control" id="snombre" readonly>
                                                                    <br> <br>
                                                                    <!--<tr> <td>campo 1</td><td><span id='sprecio'></span><br/></td></tr>
                           <tr> <td>campo 2 </td> <td><span id='sstock' ></span></td><br/></tr>
                                -->

                                                                    <!--
                                                               <div class="form-group">
                                                                   <label for="gross_amount" class="col-sm-5 control-label" style="text-align:left;">Nombre del Cliente</label>
                                                                   <div class="col-sm-7">
                                                                  <select  required id="cliente" class="form-control input-sm select_group"  name="customer_name" <?php echo form_dropdown('clienteCombo', $clienteCombo, '#', 'id="clienteCombo"'); ?> </select>
                               
                               
                                                                   </div>-->




                                                            </div>

                                                            <script type="text/javascript">
                                                                    function ShowSelecdted() {
                                                                            /* Para obtener el valor */
                                                                            var cod = document.getElementById("product_1").value;
                                                                            alert(cod);
                                                                            /* Para obtener el texto */
                                                                            var combo = document.getElementById("product_1");
                                                                            var selected = combo.options[combo.selectedIndex].text;
                                                                            alert(selected);
                                                                    }

                                                                    function myFunction() {

                                                                            if (document.getElementById("product_1").text === " ") {
                                                                                    alert("Debe de ingresar un sku");
                                                                            } else {

                                                                            }
                                                                    }
                                                            </script>



                                                            <!--<div class="form-group">
                              <label for="gross_amount" class="col-sm-5 control-label" style="text-align:left;">Dirección del Cliente</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="customer_address" name="customer_address" placeholder="Escribe la dirección del cliente" autocomplete="off">
                              </div>
                            </div>-->

                                                            <!--<div class="form-group">
                              <label for="gross_amount" class="col-sm-5 control-label" style="text-align:left;">Teléfono del Cliente</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="customer_phone" name="customer_phone" placeholder="Escribe el teléfono" autocomplete="off">
                              </div>
                            </div>-->
                                                    </div>
                                                  <!--  <input type="hidden" class="form-control input-sm" id="customer_address" name="customer_address">
-->
                                                    <input type="hidden" class="form-control input-sm" id="customer_phone" name="customer_phone">


                                                    <br /> <br />
                                                    <table class="table table-bordered" id="product_info_table">
                                                            <thead>
                                                                    <tr>
                                                                            <th style="width:20%">Código</th>
                                                                            <th style="width:20%">Pedimento</th>
                                                                            <th style="width:15%">Descripción</th>
                                                                            <th style="width:15%">Cantidad</th>
                                                                            <th style="width:15%">Stock</th>
                                                                            <!-- <th style="width:20%">Importe</th>-->
                                                                            <th><button type="button" id="add_row" class="btn btn-default" ><i class="fa fa-plus"></i></button></th>
                                                                    </tr>
                                                            </thead>

                                                            <tbody>


                                                                    <tr id="row_1">
                                                                            <td>
                                                                                   


                                                                                    <select class="form-control" name="product[]" id="category" data-url="hola" required >
                                                                                            <option value="">No Seleccionado</option>
                                                                                            <?php foreach ($category as $row) : ?>
                                                                                                    <option value="<?php echo $row->id; ?>"><?php echo $row->sku; ?></option>
                                                                                            <?php endforeach; ?>
                                                                                    </select>
                                                                                    




                                                                            </td>
                                                                            <td>
                                                                                    <div class="form-group">

                                                                                            <select class="form-control" id="sub_category-1" name="sub_category" required>

                                                                                                    <option value=''>Selecciona una opción</option>
                                                                                                    <?php foreach ($category as $row) : ?>
                                                                                                            <option value="<?php echo $row->id; ?>"><?php echo $row->sku; ?></option>
                                                                                                    <?php endforeach; ?>
                                                                                        </select>
                                                                                                    Cantidad X Pedimento <input type="text" name="customer_name" class="form-control" id="suname-1" readonly>
                                                                                                    <br />
                                                                                                    <!--numero : <span id='sname'></span><br />
                                                                                                    id producto : <span id='semail'></span><br />
-->
                                                                                            
                                                                                    </div>
                                                                            </td>
                                                                            <td> <input type="text" name="rate_value[]" id="rate_value_1" class="form-control" disabled autocomplete="off"></td>
                                                                            <td><input type="number" min="1" required  name="qty[]" id="qty_1" class="form-control" required onkeyup="getTotal(1); compararSiHayStock();" onchange="getTotal(1); compararSiHayStock();"></td>
                                                                            <td>
                                                                                    <input type="text" name="rate[]" id="rate_1" class="form-control" disabled autocomplete="off">

                                                                                    <input type="hidden" name="rate_value[]" id="rate_value_1" class="form-control" autocomplete="off">
                                                                            </td>

                                                                            <input type="hidden" name="amount[]" id="amount_1" class="form-control" disabled autocomplete="off">
                                                                            <input type="hidden" name="amount_value[]" id="amount_value_1" class="form-control" autocomplete="off">

                                                                            <td><button type="button" class="btn btn-default" onclick="removeRow('1')"><i class="fa fa-close"></i></button></td>
                                                                    </tr>
                                                            </tbody>
                                                    </table>

                                                    <br /> <br />

                                                    <div class="col-md-6 col-xs-12 pull pull-right">

                                                            <div class="form-group">
                                                                    <label for="gross_amount" class="col-sm-5 control-label"></label>
                                                                    <div class="col-sm-7">
                                                                            <input type="hidden" class="form-control" id="gross_amount" name="gross_amount" disabled autocomplete="off">
                                                                            <input type="hidden" class="form-control" id="gross_amount_value" name="gross_amount_value" autocomplete="off">
                                                                    </div>
                                                            </div>
                                                            <?php if ($is_service_enabled == true) : ?>
                                                                    <div class="form-group">
                                                                            <label for="service_charge" class="col-sm-5 control-label">S-Charge <?php echo $company_data['service_charge_value'] ?> %</label>
                                                                            <div class="col-sm-7">
                                                                                    <input type="text" class="form-control" id="service_charge" name="service_charge" disabled autocomplete="off">
                                                                                    <input type="hidden" class="form-control" id="service_charge_value" name="service_charge_value" autocomplete="off">
                                                                            </div>
                                                                    </div>
                                                            <?php endif; ?>
                                                            <?php if ($is_vat_enabled == true) : ?>
                                                                    <div class="form-group">
                                                                            <label for="vat_charge" class="col-sm-5 control-label">IVA <?php echo $company_data['vat_charge_value'] ?> %</label>
                                                                            <div class="col-sm-7">
                                                                                    <input type="text" class="form-control" id="vat_charge" name="vat_charge" disabled autocomplete="off">
                                                                                    <input type="hidden" class="form-control" id="vat_charge_value" name="vat_charge_value" autocomplete="off">
                                                                            </div>
                                                                    </div>
                                                            <?php endif; ?>
                                                            <!--<div class="form-group">
                              <label for="discount" class="col-sm-5 control-label">DESCUENTO</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="discount" name="discount" placeholder="Discount" onkeyup="subAmount()" autocomplete="off">
                              </div>
                            </div>-->
                                                            <input type="hidden" class="form-control" id="discount" name="discount" value="0">

                                                            <!--<div class="form-group">
                              <label for="net_amount" class="col-sm-5 control-label">Net Amount</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="net_amount" name="net_amount" disabled autocomplete="off">
                                <input type="hidden" class="form-control" id="net_amount_value" name="net_amount_value" autocomplete="off">
                              </div>
                            </div>-->
                                                            <input type="hidden" class="form-control" id="net_amount_value" name="net_amount_value" autocomplete="off" value="0">
                                                    </div>
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                            <input type="hidden" name="service_charge_rate" value="<?php echo $company_data['service_charge_value'] ?>" autocomplete="off">
                                            <input type="hidden" name="vat_charge_rate" value="<?php echo $company_data['vat_charge_value'] ?>" autocomplete="off">
                                            <button type="submit" id="boton" class="btn btn-primary" onclick="compararSiHayStock();">Crear Orden</button>
                                            <a href="<?php echo base_url('orders/') ?>" class="btn btn-warning">Regresar</a>
                                    </div>
                                    </form>
                                    <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                    </div>
                    <!-- col-md-12 -->
    </div>
    <!-- /.row -->


    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
















    <!-- Script
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    
    





    <!--	<div class="form-group">
                                    <label>Pedimento</label>
                                    <select class="form-control" id="sub_category" name="sub_category" required>
                                        <option value="">No Seleccionado</option>
                                        <option value=''>Selecciona una opción</option>
<?php foreach ($category as $row) : ?>
                                            <option value="<?php echo $row->id; ?>"><?php echo $row->sku; ?></option>
<?php endforeach; ?>
                                        
                                        
                                    
                                    </select>
                                </div>-->

    <div>

    </div>



    <!--

<!doctype html>
<html>
<head>
  <title>How to send AJAX request in Codeigniter</title>
</head>
<body>

 Select numero de pedimento : <select id='sub_category'>
 <?php
foreach ($users as $user) {
        echo "<option value='" . $user['numero'] . "' >" . $user['numero'] . "</option>";
}
?>
 </select>
-->
    <!-- User details
<div >
 cantidad : <span id='suname'></span><br/>
 numero : <span id='sname'></span><br/>
 id producto : <span id='semail'></span><br/>
</div>

<!-- Script 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </script>
    </body>

    </html>-->


    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.2.1.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/order_create.js' ?>"></script>
   
    