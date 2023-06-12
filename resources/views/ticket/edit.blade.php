<x-guest-layout>
<h1 class="text-center">Izmeni tiket</h1>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('ticket.update', $ticket->id) }}" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <!-- title -->
        <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{$ticket->title}}" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <!-- Description -->
        <div class="mt-4">
            <x-input-label for="description" :value="__('Description')" />

            <x-textarea  name="description" id="dexcription" value="{{$ticket->description}}"/>

            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <!-- Attachment -->
        <div class="mt-4">
            @if($ticket->attachment)
                <a href="{{ "/storage/".$ticket->attachment }}" target="_blanc">Prikaži attachment</a>
            @endif
            <x-input-label for="attachment" :value="__('Attachment (if any)')" />
            <x-input-file   name="attachment" id="attachment" />
            <x-input-error :messages="$errors->get('attachment')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-primary-button class="ml-3">
               Update
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
