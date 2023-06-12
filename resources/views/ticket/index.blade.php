<x-guest-layout>
<h1 class="text-center">Tiketi podrške</h1>
<a href={{route('ticket.create')}} class="ml-3">Tiketi za podršku</a>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

 @foreach ($tickets as $ticket )
    <div class="flex justify-between py-3">
        <a href="{{ route('ticket.show', $ticket->id) }}"> {{ $ticket->title}}</a>
        <p> {{ $ticket->created_at}}</p>
    </div>

 @endforeach
</x-guest-layout>
