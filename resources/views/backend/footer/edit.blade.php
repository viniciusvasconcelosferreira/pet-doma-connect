<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Footer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="grid grid-cols-2 gap-4">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    @include('backend.footer.partials.update-social-media-info-form')
                </div>
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    09
                </div>
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    09
                </div>
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    @include('backend.footer.partials.update-contact-information-form')
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
