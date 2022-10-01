<x-app-layout>
    <x-slot name="main">
        
            @if(!empty($registroEdit))
                  <x-modal.edicao :registro="$registroEdit"/>
                  <script>
                    $('#modalEdicao').modal({ //impede que o usuário saia do modal clicando fora ou apertando Esc
                        backdrop: 'static',
                        keyboard: false
                    })
                    $('#modalEdicao').modal('show')
                  </script>
            @endif

            @if(session()->has('mensagem'))
                <x-modal.confirmacao :msg="session()->get('mensagem')"/>
                <script>
                $('#modalConfirmacao').modal('show')
                </script>
            @endif

            <script>
                $(document).ready( function () {
                    $('#tabDados').DataTable({
                        paging: false,
                        "info":false,
                        "oLanguage":{
                            "sSearch": "Pesquisar:"
                        }
                    });
                } );
            </script>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 border-b">
                            {{-- Tabela de Registros --}}
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <table id="tabDados" class="table mb-2" cellspacing="0">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Chave</th>
                                                        <th>Valor</th>
                                                        <th>Valor 2</th>
                                                        <th>Data de Criação</th>
                                                        <th>Data de Atualização</th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($registros as $reg)
                                                        <tr>
                                                            <td>{{ $reg->id}}</td>
                                                            <td>{{ $reg->chave }}</td>
                                                            <td>{{ $reg->valor }}</td>
                                                            <td>{{ $reg->valor2}}</td>
                                                            <td>{{ date('d/m/Y H:i:s',strtotime($reg->created_at)) }}</td>
                                                            <td>{{ $reg->user_editou_id ? date('d/m/Y H:i:s',strtotime($reg->updated_at)) : ''}}</td>
                                                            <td>
                                                                <a href="/principal/editar/{{$reg->id}}" class="fas fa-edit fa-lg text-info"></a>
                                                            </td>
                                                            <td>
                                                                <a href="/principal/excluir/{{$reg->id}}" class="fas fa-trash-alt fa-lg text-danger"></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                {{ $registros->links() }}
                                            </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Fim Tabela de Registros --}}
                    </div>
                </div>
            </div>
    </x-slot>
</x-app-layout>
