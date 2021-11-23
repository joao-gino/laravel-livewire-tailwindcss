<div class="p-4">
    <div class="grid gap-1 grid-cols-5">
        <div class="col-span-2">
            <form wire:submit.prevent="submit">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-12 sm:col-span-3">
                                <label class="block text-sm font-medium text-gray-700"
                                    for="name">
                                    Nome
                                </label>
                                <input autocomplete="given-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    wire:model.lazy="name"
                                    type="text"
                                    placeholder="Nome do Funcionário" />
                                @error('name') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label class="block text-sm font-medium text-gray-700"
                                    for="email">
                                    Email
                                </label>
                                <input autocomplete="email"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    wire:model="email"
                                    type="email"
                                    placeholder="Email do Funcionário" />
                                @error('email') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label class="block text-sm font-medium text-gray-700"
                                    for="phone">
                                    Telefone
                                </label>
                                <input autocomplete="phone"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    wire:model="phone"
                                    type="text"
                                    placeholder="Telefone do Funcionário" />
                                @error('phone') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label class="block text-sm font-medium text-gray-700"
                                    for="department">
                                    Departamento
                                </label>
                                <input autocomplete="department"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    wire:model="department"
                                    type="text"
                                    placeholder="Departamento do Funcionário" />
                                @error('department') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6">
                                <label class="block text-sm font-medium text-gray-700"
                                    for="company">
                                    Empresa
                                </label>
                                <select autocomplete="phone"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    wire:model="company_id"
                                    type="text"
                                    placeholder="Telefone do Funcionário">
                                    <option value="">Selecione</option>
                                    @foreach ($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                    @endforeach
                                </select>
                                @error('company_id') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" wire:loading.remove wire:target="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Cadastrar
                        </button>
                        <button wire:loading wire:target="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" readonly>
                            Enviando...
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-span-3">
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