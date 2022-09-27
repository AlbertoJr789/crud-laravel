<x-app-layout>
    <x-slot name="header">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

                        <section id="tabs" class="project-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <table class="table" cellspacing="0">
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
                                                    @foreach($registros as $registro)
                                                        <tr>
                                                            <td>{{ $registro->id}}</td>
                                                            <td>{{ $registro->chave }}</td>
                                                            <td>{{ $registro->valor }}</td>
                                                            <td>{{ $registro->valor2}}</td>
                                                            <td>{{ date('d/m/Y H:i:s',strtotime($registro->created_at)) }}</td>
                                                            <td>{{ $registro->user_editou_id ? date('d/m/Y H:i:s',strtotime($registro->updated_at)) : ''}}</td>
                                                            <td>
                                                                <div class="flex justify-between">
                                                                    <button type="button" class="fas fa-edit fa-lg text-info" data-toggle="modal" data-target="#modalEdicao">
                                                                    <button type="button" class="fas fa-trash-alt fa-lg text-danger" data-toggle="modal" data-target="#modalExclusao">
                                                                    {{-- <a href="/principal/editar/{{$registro->id}}" class="fas fa-edit fa-lg text-info"></a> --}}
                                                                    {{-- <a href="/principal/excluir/{{$registro->id}}" class="fas fa-trash-alt fa-lg text-danger"></a> --}}
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        {{-- <x-modal.edicao :registro="$registro"/> --}}
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                {{ $registros->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
