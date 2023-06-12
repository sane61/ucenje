<x-guest-layout>
<h1 class="text-center">{{ $ticket->title}}</h1>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <div class="flex justify-between py-3">
        <p> {{ $ticket->description}}</p>
        <p> {{ $ticket->created_at}}</p>
        @if($ticket->attachment)
            <a href="{{ "/storage/".$ticket->attachment }}" target="_blanc">Attachment</a>
        @endif
    </div>
    <div class="flex">
        <a href="{{ route('ticket.edit', $ticket->id) }}">
            <x-primary-button>Edit</x-primary-button>
        </a>
        <form class="ml-3"action="{{ route('ticket.destroy', $ticket->id)}}" method="POST">
            @method('delete')
            @csrf
            <x-primary-button>Delete</x-primary-button>
        </form>
</div>

</x-guest-layout>
