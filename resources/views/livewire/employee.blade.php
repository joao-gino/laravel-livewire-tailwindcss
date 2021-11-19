<div class="mt-10 ml-10">
    <h2>Cadastrar Funcionário</h2>
    <div class="md:grid md:grid-cols-4 md:gap-6">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{ route('employee.create') }}" method="POST">
                @csrf
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
                                    id="name"
                                    name="name"
                                    type="text"
                                    placeholder="Nome do Funcionário" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label class="block text-sm font-medium text-gray-700"
                                    for="email">
                                    Email
                                </label>
                                <input autocomplete="email"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    id="email"
                                    name="email"
                                    type="email"
                                    placeholder="Email do Funcionário" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label class="block text-sm font-medium text-gray-700"
                                    for="phone">
                                    Telefone
                                </label>
                                <input autocomplete="phone"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    id="phone"
                                    name="phone"
                                    type="text"
                                    placeholder="Telefone do Funcionário" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label class="block text-sm font-medium text-gray-700"
                                    for="department">
                                    Departamento
                                </label>
                                <input autocomplete="department"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    id="department"
                                    name="department"
                                    type="text"
                                    placeholder="Departamento do Funcionário" />
                            </div>

                            <div class="col-span-6">
                                <label class="block text-sm font-medium text-gray-700"
                                    for="company">
                                    Empresa
                                </label>
                                <select autocomplete="phone"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    id="company"
                                    name="company"
                                    type="text"
                                    placeholder="Telefone do Funcionário">
                                    <option value="">Selecione</option>
                                    @foreach ($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                                type="submit">
                            Cadastrar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>