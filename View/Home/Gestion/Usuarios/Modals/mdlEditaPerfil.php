<div class="modal fade" id="modalEditPerfil" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Editar Perfil</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" id="formEditPerfil" method="post">
                    <div class="input-group input-group-sm mt-1">
                        <span class="input-group-text" id="inputGroup-sizing-sm">PASSWORD<span
                                class="badge text-danger p-0 m-0 fs-12">*</span></span>
                        <input id="usu_pass" type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div>
                        <button type="button" onclick="btnFormEditPerfil()"
                            class="mt-3 btn btn-success waves-effect waves-success btn-sm"
                            style="width: 100%;">Guardar</button>
                    </div>
                </form>
                <div id="modal_cont_mje_campos_obligatorios_vacios_update_cliente">
                </div>
            </div>
        </div>
    </div>
</div>