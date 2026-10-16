<x-layout title="Home">
    <ul>
        @forelse($tasks as $task)
            <li>{{ $task }}</li>
        @empty
            <p>There are no active tasks.</p>
        @endforelse
    </ul>
</x-layout>
