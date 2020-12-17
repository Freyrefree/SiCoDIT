<div id="ModalDetalle" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detalle Activo Fijo: <span class="badge badge-info"><strong id="activoFijoTitle"> </strong></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>       
        
      <div class="modal-body">

        <div class="col-12">
          <div class="card">
            <div class="card-body">

              <div class="row">
                  <div class="col-3 font-weight-bold" >Activo Fijo</div>
                  <div class="col-3" id="activoFijo"></div>
                  <div class="col-3 font-weight-bold">Sub Activo Fijo</div>
                  <div class="col-3" id="subActivoFijo"></div>
              </div>
              <hr>
              <div class="row">
                  <div class="col-3 font-weight-bold">Clase</div>
                  <div class="col-3" id="clase"></div>
                  <div class="col-3 font-weight-bold">Sociedad</div>
                  <div class="col-3" id="sociedad"></div>
              </div>

            </div>
          </div>
        </div>
<hr>
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">General</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Información Detallada</a>
              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Asignaciones</a>
              <a class="nav-item nav-link" id="nav-origen-tab" data-toggle="tab" href="#nav-origen" role="tab" aria-controls="nav-origen" aria-selected="false">Origen</a>
              <a class="nav-item nav-link" id="nav-patrimonio-tab" data-toggle="tab" href="#nav-patrimonio" role="tab" aria-controls="nav-patrimonio" aria-selected="false">Impto Sobre Patrimonio</a>
              <a class="nav-item nav-link" id="nav-valoracion-tab" data-toggle="tab" href="#nav-valoracion" role="tab" aria-controls="nav-valoracion" aria-selected="false">Valoración</a>


          </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">

          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

              <div class="card-body">
                  <h3 class="card-title text-center">Datos Generales</h3>
                  <hr>
                  <div class="row">
                      <div class="col-3 font-weight-bold">Denominación</div>
                      <div class="col-9" id="denominacion"></div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-3 font-weight-bold">Determinación de <br> Cuentas</div>
                      <div class="col-3" id="determinacionCuentas"></div>
                      <div class="col-3 font-weight-bold">Número de Serie</div>
                      <div class="col-3" id="numeroSerie"></div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-3 font-weight-bold">Número de Inventario</div>
                      <div class="col-3" id="numeroInventario"></div>
                      <div class="col-3 font-weight-bold">Cantidad</div>
                      <div class="col-3" id="cantidad"></div>
                  </div>

              </div> 
              
              <hr>

              <div class="card-body">
                  <h3 class="card-title text-center">Inventario</h3>
                  <hr>
                  <div class="row">
                      <div class="col-3 font-weight-bold">Último Iventario <small>AAAA/MM/DD</small></div>
                      
                      <div class="col-3" id="ultimoInventario"></div>
                      <div class="col-3 font-weight-bold">Nota de Inventario</div>
                      <div class="col-3" id="notaInventario"></div>
                  </div>
              </div> 

              <hr>
              
              <div class="card-body">
                  <h3 class="card-title text-center">Información Contabilización</h3>
                  <hr>
                  <div class="row">
                    <div class="col-3 font-weight-bold">Capitalizado el</div>
                    <div class="col-3" id="fechaCapitalizacion"></div>
                    <div class="col-3 font-weight-bold">Alta Original el</div>
                    <div class="col-3" id="fechaContabilizacion"></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-3 font-weight-bold">Año de Alta</div>
                    <div class="col-3" id="primeraContabilizacion"></div>
                    <div class="col-3 font-weight-bold">Descapitalización el</div>
                    <div class="col-3" id="fechaDescapitalizacion"></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-3 font-weight-bold">Baja Planificada el</div>
                    <div class="col-3" id="fechaBajaPlanificada"></div>
                    <div class="col-3 font-weight-bold">Pedido el</div>
                    <div class="col-3" id="fechaPedido"></div>
                  </div>
                  <hr>              
              </div>


            
          </div>

          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

            <div class="card-body">
                    <h3 class="card-title text-center">Dependiente Tiempo</h3>
                    <hr>
                    <div class="row">
                        <div class="col-3 font-weight-bold">Centro de coste</div>
                        <div class="col-3" id="centroCoste"></div>
                        <div class="col-3 font-weight-bold">Ord Costes</div>
                        <div class="col-3" id="ordCostes"></div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3 font-weight-bold">Centro</div>
                        <div class="col-3" id="centro"></div>
                        <div class="col-3 font-weight-bold">Emplazamiento</div>
                        <div class="col-3" id="emplazamiento"></div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3 font-weight-bold">Local</div>
                        <div class="col-3" id="local"></div>
                        <div class="col-3 font-weight-bold">Área Funcional</div>
                        <div class="col-3" id="areaFuncional"></div>
                    </div>

            </div>         



          </div>

          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

            <div class="card-body">
                    <h3 class="card-title text-center">Asignaciones</h3>
                    <hr>
                    <div class="row">
                        <div class="col-3 font-weight-bold">Concepto 1</div>
                        <div class="col-3" id="concepto1"></div>
                        <div class="col-3 font-weight-bold">Concepto 2</div>
                        <div class="col-3" id="concepto2"></div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3 font-weight-bold">Concepto 3</div>
                        <div class="col-3" id="concepto3"></div>
                        <div class="col-3 font-weight-bold">Concepto 4</div>
                        <div class="col-3" id="concepto4"></div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3 font-weight-bold">Concepto 5</div>
                        <div class="col-3" id="concepto5"></div>
                        <div class="col-3 font-weight-bold">Inversion Proteccion <br> Medio Ambiente</div>
                        <div class="col-3" id=""></div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3 font-weight-bold">Supranúmero de <br> Activo Fijo</div>
                        <div class="col-3" id=""></div>
                    </div>


            </div> 

          </div>
          <div class="tab-pane fade" id="nav-origen" role="tabpanel" aria-labelledby="nav-origen-tab">

            <div class="card-body">

                    <h3 class="card-title text-center">Origen</h3>
                    <hr>
                    <div class="row">
                        <div class="col-3 font-weight-bold">Acreedor</div>
                        <div class="col-3" id="acreedor"></div>
                        <div class="col-3 font-weight-bold">Nombre Acreedor</div>
                        <div class="col-3" id="nombreAcreedor"></div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3 font-weight-bold">Fabricante</div>
                        <div class="col-3" id="fabricante"></div>
                        <div class="col-3 font-weight-bold">Sociedad GL <br> Asociada</div>
                        <div class="col-3" id="sociedadGL"></div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3 font-weight-bold">País Origen</div>
                        <div class="col-3" id="paisOrigen"></div>
                        <div class="col-3 font-weight-bold">Denominacion de <br> Tipo</div>
                        <div class="col-3" id="denominacionDeTipo"></div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3 font-weight-bold">Año Adqusición</div>
                        <div class="col-3" id="anioAdquisicion"></div>
                        <div class="col-3 font-weight-bold">Valor Original</div>
                        <div class="col-3" id="valorAdquisicion"></div>
                    </div>


            </div> 

          </div>
          <div class="tab-pane fade" id="nav-patrimonio" role="tabpanel" aria-labelledby="nav-patrimonio-tab">

            <div class="card-body">

                    <h3 class="card-title text-center">Valoración del Patrimonio</h3>
                    <hr>
                    <div class="row">
                        <div class="col-3 font-weight-bold">Clave Agrupamiento</div>
                        <div class="col-3" id="clavepatrimonio"></div>
                        <div class="col-3 font-weight-bold">Indicador Propiedad</div>
                        <div class="col-3" id="indicadorPropiedad"></div>
                    </div>                 
            </div> 

          </div>
          <div class="tab-pane fade" id="nav-valoracion" role="tabpanel" aria-labelledby="nav-valoracion-tab">

            <div class="card-body">

                    <h3 class="card-title text-center">Valoración</h3>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                          <div class="table-responsive" id="divTablaValoracion">
                          </div>
                        </div>                        
                    </div>                 
            </div> 

          </div>

        </div>

      </div>       

      <div class="modal-footer">
          <i id="loadingIconModalUpdate" class="fa fa-circle-o-notch fa-spin fa-fw" style="display:none;"></i>
          <!-- <button type="submit" class="btn btn-primary">Actualizar</button> -->
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>

        
    </div>
  </div>
</div>

