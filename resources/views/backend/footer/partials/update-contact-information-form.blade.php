<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Contact Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your contact information.") }}
        </p>
    </header>
    
    <form method="post" action="{{ route('footer.contact.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div class="grid grid-cols-2 gap-4" style="align-items: last baseline">
            <div>
                <x-input-label for="phone_number" :value="__('Phone Number')"/>
                <x-text-input id="phone_number" name="phone_number" type="text" class="mt-1 block w-full"
                              :value="old('phone_number', optional($contact)->phone_number ?? '')" autofocus
                              autocomplete="phone_number"/>
            </div>

            <x-toggle-input id="phone_is_whatsapp" name="phone_is_whatsapp"
                            :value="old('phone_is_whatsapp', optional($contact)->phone_is_whatsapp ?? false)"
                            autofocus>{{__('Phone Is Whatsapp?')}}</x-toggle-input>
            <x-input-error class="mt-2" :messages="$errors->get('phone_number')"/>

        </div>

        <div class="grid grid-cols-2 gap-4" style="align-items: last baseline">
            <div>
                <x-input-label for="cell_phone_number" :value="__('Cell Phone Number')"/>
                <x-text-input id="cell_phone_number" name="cell_phone_number" type="text" class="mt-1 block w-full"
                              :value="old('cell_phone_number', optional($contact)->cell_phone_number ?? '')" autofocus
                              autocomplete="cell_phone_number"/>
            </div>

            <x-toggle-input id="cell_phone_is_whatsapp" name="cell_phone_is_whatsapp"
                            :value="old('cell_phone_is_whatsapp', optional($contact)->cell_phone_is_whatsapp ?? false)"
                            autofocus>{{__('Cell Phone Is Whatsapp?')}}</x-toggle-input>
            <x-input-error class="mt-2" :messages="$errors->get('cell_phone_number')"/>

        </div>

        <div>
            <x-input-label for="email" :value="__('Email')"/>
            <x-text-input id="email" name="email" type="text" class="mt-1 block w-full"
                          :value="old('email', optional($contact)->email ?? '')" autofocus
                          autocomplete="email"/>
            <x-input-error class="mt-2" :messages="$errors->get('email')"/>
        </div>

        <div>
            <x-input-label for="address" :value="__('Address')"/>
            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full"
                          :value="old('address', optional($contact)->address ?? '')" autofocus
                          autocomplete="address"/>
            <x-input-error class="mt-2" :messages="$errors->get('address')"/>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'contact-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

<script type="module">
    $(document).ready(function () {
        $('#phone_number').mask('(00) 0000-0000');
        $('#cell_phone_number').mask('(00) 0 0000-0000');
    });
</script>
