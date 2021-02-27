<!-- Modal -->
<div
    class="modal fade"
    id="modal_buscar_tutores"
    tabindex="-1"
    aria-labelledby="modal_buscar_tutores_label"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_buscar_tutores_label">
                    Buscar Tutores
                </h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-8">
                        <input
                            type="search"
                            id="buscar"
                            class="form-control"
                            placeholder="D.N.I. Tutor"
                        >
                    </div>
                    <div class="col-4">
                        <button
                            type="button"
                            class="btn btn-primary form-control"
                            id="btn_buscar"
                        >
                            Buscar
                        </button>
                    </div>
                </div>
                <div id="datos_tutor"></div>
            </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                >
                    Cerrar
                </button>
                <button
                    id="btn_agregar"
                    type="button"
                    class="btn btn-primary"
                    disabled
                >
                    Agregar
                </button>
            </div>
        </div>
    </div>
</div>