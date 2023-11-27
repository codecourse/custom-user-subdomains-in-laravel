<x-guest-layout>
    <p>Welcome to the subdomain for {{ $user->name }} <a href="{{ route('subdomain.about', $user) }}" class="text-indigo-500">About</a></p>
</x-guest-layout>
