@extends('home')

@section('content')
    <livewire:employee />

    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    scope="col">
                                    Nome
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    scope="col">
                                    Email
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    scope="col">
                                    Telefone
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    scope="col">
                                    Departamento
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    scope="col">
                                    Empresa
                                </th>
                                <th class="relative px-6 py-3" scope="col">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($employees as $employee)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        {{ $employee->name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        {{ $employee->email }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        {{ $employee->phone }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        {{ $employee->department }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        {{ $employee->company->name }}
                                    </td>
                                </tr>
                            @endforeach
                            <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection