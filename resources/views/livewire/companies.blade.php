<div class="max-w-8xl mx-auto p-4">
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
                                    placeholder="Nome da Empresa" />
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
                                    placeholder="Email da Empresa" />
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
                                    placeholder="Telefone da Empresa" />
                                @error('phone') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" wire:loading.remove wire:target="submit" class="transform motion-safe:hover:scale-110 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-cesari">
                            Cadastrar
                        </button>
                        <button wire:loading wire:target="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-cesari" readonly>
                            <i class="fa-1x fas fa-circle-notch fa-spin"></i>
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
                        <th class="relative px-6 py-3" scope="col">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($companies as $company)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap">
                                {{ $company->name }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap">
                                {{ $company->email }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap">
                                {{ $company->phone }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>