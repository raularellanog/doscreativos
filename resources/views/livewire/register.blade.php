<div class="md:w-1/2 sm:w-full">
    <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <form class="w-full" wire:submit.prevent="save">
            @error('noLogin')
                <div class="my-4">
                    <x-alert-error message="{{ $message }}" />
                </div>
            @enderror
            <div class="my-2 text-center">
                <h6 class="text-lg font-bold dark:text-white">Información de empresa</h6>
            </div>
            <div class="mb-4">
                <label for="company_name"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de la Empresa</label>
                <input type="text" id="company_name" wire:model="company_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                    focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                    dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('company_name')
                    <x-alert-error message="{{ $message }}" />
                @enderror
            </div>
            {{-- <div class="mb-4">
                <label for="company_slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Empresa
                    Slug</label>
                <input type="text" id="company_slug" wire:model="company_slug"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                    focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                    dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    disabled>
                @error('company_slug')
                    <x-alert-error message="{{ $message }}" />
                @enderror
            </div> --}}
            <div class="my-2 text-center">
                <h6 class="text-lg font-bold dark:text-white">Información de contacto</h6>
            </div>
            <div class="mb-4">
                <label for="user_name"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                <input type="text" id="user_name" wire:model="user_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                    focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                    dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('user_name')
                    <x-alert-error message="{{ $message }}" />
                @enderror
            </div>
            <div class="mb-4">
                <label for="email"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" id="email" wire:model="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                    focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                    dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('email')
                    <x-alert-error message="{{ $message }}" />
                @enderror
            </div>
            <div class="mb-4">
                <div class="grid grid-cols-10 gap-4">
                    <div class="col-span-9">
                        <label for="user_pass"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña</label>
                        <input type="{{ $type }}" id="user_pass" wire:model="user_pass"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                            focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                            dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="flex item-end">
                        <button type="button" wire:click="ver"
                            class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none 
                        focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 
                        dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">
                            <i class="fa-regular fa-eye"></i>
                        </button>
                    </div>
                </div>
                @error('user_pass')
                    <x-alert-error message="{{ $message }}" />
                @enderror
            </div>
            <div class="my-2 text-center">
                <h6 class="text-lg font-bold dark:text-white">Información de menú</h6>
            </div>
            <div class="mb-4">
                <label for="menu_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre
                    de
                    menú</label>
                <input type="text" id="menu_name" wire:model="menu_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                    focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                    dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('menu_name')
                    <x-alert-error message="{{ $message }}" />
                @enderror
            </div>
            {{-- <div class="mb-4">
                <label for="slug_menu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Menú
                    slug</label>
                <input type="text" id="slug_menu" wire:model="menu_slug"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                    focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                    dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    disabled>
                @error('menu_slug')
                    <x-alert-error message="{{ $message }}" />
                @enderror
            </div> --}}
            <div class="mb-4">
                <label for="type_menu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de
                    menú</label>
                <select id="type_menu" wire:model="typeMenu"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full 
                    p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>...</option>
                    <option value="pdf">PDF</option>
                    <option value="web">web</option>
                </select>
                @error('type_menu')
                    <x-alert-error message="{{ $message }}" />
                @enderror
            </div>
            @if ($typeMenu == 'pdf')
                <div class="mb-4">
                    <label for="file_menu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sube
                        archivo PDF</label>
                    <input type="file" id="file_menu" wire:model.defer="file"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                    focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                    dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        accept="application/pdf">
                </div>
            @endif
            <div class="mb-4 flex aling-center">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg 
                text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Guardar</button>
            </div>
        </form>
    </div>
</div>
