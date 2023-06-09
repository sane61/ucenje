<x-guest-layout>
<h1 class="text-center">Kreiraj novi tiket</h1>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('ticket.store') }}" enctype="multipart/form-data">
        @csrf

        <!-- title -->
        <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <!-- Description -->
        <div class="mt-4">
            <x-input-label for="description" :value="__('Description')" />

            <x-textarea  name="description" id="dexcription" value=""/>

            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <!-- Attachment -->
        <div class="mt-4">
            <x-input-label for="attachment" :value="__('Attachment (if any)')" />
            <x-input-file   name="attachment" id="attachment" />
            <x-input-error :messages="$errors->get('attachment')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-primary-button class="ml-3">
               Create
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
