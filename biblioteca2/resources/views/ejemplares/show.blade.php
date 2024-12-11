<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ver ejemplar
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Título
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $ejemplar->libro->titulo }}
                            </dd>
                        </div>
                        <div class="flex flex-col py-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Autor
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $ejemplar->libro->autor}}
                            </dd>
                        </div>
                        <div class="flex flex-col py-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Préstamo vencido
                            </dt>
                            <dd class="text-lg font-semibold">
                                @php
                                    $vencido;
                                    if((isset($ejemplar->prestamos->last()->created_at) && (!isset($ejemplar->prestamos->last()->fecha_hora)))){
                                        if($ejemplar->prestamos->last()->created_at->diffInDays(now()) > 30){
                                            $vencido = 'Está vencido';
                                        }else{
                                            $vencido = 'No está vencido aún';
                                        }

                                    } else{
                                        $vencido = 'No está prestado';
                                    }
                                @endphp
                                {{ $vencido }}
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
