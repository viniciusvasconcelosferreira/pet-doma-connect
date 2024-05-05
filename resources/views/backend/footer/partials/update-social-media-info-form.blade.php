<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Social Media Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your social media information.") }}
        </p>
    </header>

    <form method="post" action="{{ route('footer.social-media.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div class="grid grid-cols-2 gap-4">
            <div>
                <x-input-label for="facebook" :value="__('Facebook')"/>
                <x-text-input id="facebook" name="facebook" type="text" class="mt-1 block w-full"
                              :value="old('facebook', optional($social_media)->facebook ?? '')" autofocus
                              autocomplete="facebook" placeholder="https://facebook.com/JohnDoe"/>
                <x-input-error class="mt-2" :messages="$errors->get('facebook')"/>
            </div>

            <div>
                <x-input-label for="twitter" :value="__('Twitter')"/>
                <x-text-input id="twitter" name="twitter" type="text" class="mt-1 block w-full"
                              :value="old('twitter', optional($social_media)->twitter ?? '')" autofocus
                              autocomplete="twitter" placeholder="https://twitter.com/JohnDoe"/>
                <x-input-error class="mt-2" :messages="$errors->get('twitter')"/>
            </div>

            <div>
                <x-input-label for="instagram" :value="__('Instagram')"/>
                <x-text-input id="instagram" name="instagram" type="text" class="mt-1 block w-full"
                              :value="old('instagram', optional($social_media)->instagram ?? '')" autofocus
                              autocomplete="instagram" placeholder="https://instagram.com/JohnDoe"/>
                <x-input-error class="mt-2" :messages="$errors->get('instagram')"/>
            </div>

            <div>
                <x-input-label for="linkedin" :value="__('LinkedIn')"/>
                <x-text-input id="linkedin" name="linkedin" type="text" class="mt-1 block w-full"
                              :value="old('linkedin', optional($social_media)->linkedin ?? '')" autofocus
                              autocomplete="linkedin" placeholder="https://linkedin.com/in/JohnDoe"/>
                <x-input-error class="mt-2" :messages="$errors->get('linkedin')"/>
            </div>

            <div>
                <x-input-label for="youtube" :value="__('Youtube')"/>
                <x-text-input id="youtube" name="youtube" type="text" class="mt-1 block w-full"
                              :value="old('youtube', optional($social_media)->youtube ?? '')" autofocus
                              autocomplete="youtube" placeholder="https://youtube.com/channel/JohnDoe"/>
                <x-input-error class="mt-2" :messages="$errors->get('youtube')"/>
            </div>

            <div>
                <x-input-label for="pinterest" :value="__('Pinterest')"/>
                <x-text-input id="pinterest" name="pinterest" type="text" class="mt-1 block w-full"
                              :value="old('pinterest', optional($social_media)->pinterest ?? '')" autofocus
                              autocomplete="pinterest" placeholder="https://br.pinterest.com/JohnDoe"/>
                <x-input-error class="mt-2" :messages="$errors->get('pinterest')"/>
            </div>
        </div>

        <div>
            <x-input-label for="other" :value="__('Other')"/>
            <x-text-input id="other" name="other" type="text" class="mt-1 block w-full"
                          :value="old('other', optional($social_media)->other ?? '')" autofocus
                          autocomplete="other" placeholder="https://tiktok.com/@JohnDoe"/>
            <x-input-error class="mt-2" :messages="$errors->get('other')"/>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'social_media-updated')
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
