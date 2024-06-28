<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        <span class="text-lg font-bold">{{ __('No packages') }}</span>
                        <form action="{{ route('import.array') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="file" name="file" required>

                            <x-secondary-button>{{ __('Import') }}</x-secondary-button>
                        </form>
                    </div>

                    <div class="mt-8">
                        <span class="text-lg font-bold">{{ __('Laravel Excel') }}</span>
                        <form action="{{ route('import.excel') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="file" name="file" required>

                            <x-secondary-button>{{ __('Import') }}</x-secondary-button>
                        </form>
                    </div>

                    <div class="mt-8">
                        <span class="text-lg font-bold">{{ __('Spatie Simple Excel') }}</span>
                        <form action="{{ route('import.spatie') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="file" name="file" required>

                            <x-secondary-button>{{ __('Import') }}</x-secondary-button>
                        </form>
                    </div>

                    <div class="mt-8">
                        <span class="text-lg font-bold">{{ __('Fast Excel') }}</span>
                        <form action="{{ route('import.fast-excel') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="file" name="file" required>

                            <x-secondary-button>{{ __('Import') }}</x-secondary-button>
                        </form>
                    </div>

                    <hr class="my-8">

                    <div>
                        <a href="{{ route('export.array') }}"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                            {{ __('Export using array') }}
                        </a>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('export.excel') }}"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                            {{ __('Export using Laravel Excel') }}
                        </a>
                    </div>

                    <div class="mt-4">
                        <a
                            href="{{ route('export.spatie') }}"class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                            {{ __('Export using Spatie Simple Excel') }}
                        </a>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('export.fast-excel') }}"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                            {{ __('Export using Fast Excel') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
