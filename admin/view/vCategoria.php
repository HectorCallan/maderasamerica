<div class="content">
    <div class="container-fluid">
        <div class="row">
			<div class="col-xs-12">
                <div class="card">
					<div class="header">
                        <span class="title">Nueva Categoria</span>
                    </div>
                    <div id="divCat" class="content">
                    	<div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" id="txtNomCat" class="form-control" placeholder="Nombre" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Imagen</label>
                                    <input type="file" id="imgCat" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img id="imgTempCat" src="" alt="Imagen de categoria" style="width: 200px; height: 120px; margin: 0 auto;">
                            </div>
                        </div>
		            	<div class="row">
		            		<div class="col-md-12">
		            			<button type="button" class="btn btn-info btn-fill pull-right" id="btnGuaCat">Guardar</button>
		            		</div>
		            	</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="card">
                    <div class="header">
                        <span class="title">Categorias</span>
                    </div>
                    <div class="content">
                        <div id="panelCategoria" class="table-responsive">
                            <table id='tbCats' border='0' cellspacing='0' cellpadding='0' class='table table-striped table-bordered table-hover'>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Imagen</th>
                                        <th>Oper.</th>  
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Imagen</th>
                                        <th>Oper.</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                </tbody>
                            </table>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/bootstrap-notify.js"></script> 
<script src="js/fCategoria.js"></script> 