@props(['registro'])

<div class="modal fade" id="modalEdicao" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar Registro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
            <form method="POST" action="">
                @csrf
                <div>
                    <x-input-label for="chave" :value="__('Chave')" />

                    <x-text-input id="chave" class="block mt-1 w-full" type="text" name="chave" :value="{{ $registro->chave }}" required autofocus />
                </div>

                <div class="mt-4">
                    <x-input-label for="valor" :value="__('Valor')" />

                    <x-text-input id="valor" class="block mt-1 w-full" type="text" name="valor" :value="old('valor')" required />
                </div>

                <div class="mt-4">
                    <x-input-label for="valor2" :value="__('Valor 2')" />

                    <x-text-input id="valor2" class="block mt-1 w-full"
                                  type="text"
                                  name="valor2"
                                  required :value="old('valor2')"/>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <a href="/principal/editar/{{$registro->id}}" data-toggle="modal" class="btn btn-info"data-target="#modalEdicao">Editar</a>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
        </div>
      </div>
    </div>
</div>