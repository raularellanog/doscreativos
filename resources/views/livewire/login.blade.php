<div class="md:w-1/2 sm:w-full">
    <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <form class="w-full" wire:submit.prevent="login_form">
            @error('noLogin')
                <div class="my-4">
                    <x-alert-error message="{{ $message }}" />
                </div>
            @enderror
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" id="email" wire:model.defer="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full 
                    p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="ejemplo@dominio.com">
                @error('email')
                    <x-alert-error message="{{ $message }}" />
                @enderror
            </div>
            <div class="mb-6">
                <div class="grid grid-cols-6 gap-4">
                    <div class="col-span-6">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña</label>
                        <input type="{{ $type }}" id="password" wire:model.defer="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full 
                    p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    </div>
                    {{-- <div class="col-span-1 h-full">
                        <div class="flex item-end">
                            <button type="button" wire:click="ver"
                                class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none 
                            focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white 
                            dark:hover:bg-gray-600 dark:focus:ring-gray-800">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div>
                    </div> --}}
                </div>
                @error('password')
                    <x-alert-error message="{{ $message }}" />
                @enderror
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full 
                sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Iniciar
                sesión</button>
        </form>

    </div>
</div>
