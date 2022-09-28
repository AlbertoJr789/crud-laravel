
@props(['msg'])

<div class="modal fade" id="modalConfirmacao" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar Registro</h5>
          </button>
        </div>
        <div class="modal-body text-success align-center"> 
           {{ $msg }}
        </div>
        <div class="modal-footer">
          <button class="btn btn-outline-danger" data-toggle="modal" data-target="#modalConfirmacao">Sair</button>
        </div>
      </div>
    </div>
</div>

