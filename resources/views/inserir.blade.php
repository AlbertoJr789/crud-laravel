<x-app-layout>
    <x-slot name="header">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form method="POST" action="{{ route('inserir') }}">
                            @csrf

                            <!-- Name -->
                            <div>
                                <x-input-label for="chave" :value="__('Chave')" />

                                <x-text-input id="chave" class="block mt-1 w-full" type="text" name="chave" :value="old('chave')" required autofocus />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-input-label for="valor" :value="__('Valor')" />

                                <x-text-input id="valor" class="block mt-1 w-full" type="text" name="valor" :value="old('valor')" required />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="valor2" :value="__('Valor 2')" />

                                <x-text-input id="valor2" class="block mt-1 w-full"
                                              type="text"
                                              name="valor2"
                                              required :value="old('valor2')"/>
                            </div>

                            <div class="flex justify-between mt-4">
                                <input type="submit" class="btn btn-outline-info" value="INSERIR">

                                @if (session()->has('sucesso'))
                                    <div x-data="{ show: true }"
                                         x-init="setTimeout(() => show = false, 4000)"
                                         x-show="show"
                                         class="flex bg-success text-white rounded"
                                    >
                                        <p class="p-2">Inserido com sucesso !</p>
                                    </div>
                                @endif

                            </div>

                        </form>
                    </div>
                </div>
            </div>
    </x-slot>

</x-app-layout>
