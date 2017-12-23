<div class="content">
    <div class="container-fluid">
        <div class="row">
			<div class="col-xs-12">
                <div class="card">
					<div class="header">
                        <span class="title">Ofertas</span>
                        <button type="button" class="btn btn-info btn-fill pull-right" id="btnNueOfe">Agregar</button>
                    </div>
					<div class="content">
						<div id="panelOferta" class="table-responsive" style="margin-top: 20px;">
                            <table id='tbOfertas' border='0' cellspacing='0' cellpadding='0' class='table table-striped table-bordered table-hover'>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Oferta</th>
                                        <th>Categoria</th>
                                        <th>Dcto</th>
                                        <th>Tipo</th>
                                        <th>Oper.</th>  
                                    </tr>
                                </thead>
                                <tbody>
                                	<tr>
                                		<td align="center">1</td>
                                		<td align="center">
                                			<img src="../images/ofertas/oferta-barra-1.png" alt="Oferta" style="height: 50px; width: 50px;">
                                		</td>
                                        <td align="center">Ninguna</td>
                                        <td align="center">10%</td>
                                        <td align="center">Principal</td>
                                		<td align="center">
                                			<a href="#" onclick="showOferta(1);">
                                				<img src="../images/icons/edit.png" alt="Editar Oferta" title="Editar Oferta" style="height: 30px; width: 30px;">
                                			</a> &nbsp;
                                			<a href="#" onclick="delOferta(1);">
                                				<img src="../images/icons/del.png" alt="Eliminar Oferta" title="Eliminar Oferta" style="height: 30px; width: 30px;">
                                			</a>
                                		</td>
                                	</tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Oferta</th>
                                        <th>Categoria</th>
                                        <th>Dcto</th>
                                        <th>Tipo</th>
                                        <th>Oper.</th> 
                                    </tr>
                                </tfoot>
                            </table>
                        </div>				
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="divModOferta" tabindex="-1" data-backdrop="false" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-warning">Nueva oferta</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Descuento</label>
                            <input type="number" id="txtDesc" class="form-control" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tipo de oferta</label>
                            <select name="cboTipOfe" id="cboTipOfe" class="form-control">
                                <option value="0">Principal</option>
                                <option value="1">Productos</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Categorias</label>
                            <select name="cboCat" id="cboCat" class="form-control">
                                <option value="0">Ninguna</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Imagen</label>
                            <input type="file" id="fImgOfe">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img id="imgTempOfe" src="" alt="Imagen de la oferta" title="Imagen de la oferta" style="width: 100px; height: 120px; margin: 0 auto;">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-fill btn-warning btn-wd" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnGuaOfe" class="btn btn-fill btn-warning btn-wd" data-loading-text="Un momento..." autocomplete="off">Guardar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="divModConf" tabindex="-1" data-backdrop="false" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-warning">Un momento...</h4>
            </div>
            <div class="modal-body">
                ¿Esta seguro de realizar esta operación?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-fill btn-warning btn-wd" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnAcepCon" class="btn btn-fill btn-warning btn-wd" data-loading-text="Un momento..." autocomplete="off">Aceptar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="../jquery/jquery-3.1.1.min.js"></script>
<script src="../js/dataTables/js/jquery.dataTables.js"></script>
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/bootstrap-notify.js"></script> 
<script src="js/fOferta.js"></script>