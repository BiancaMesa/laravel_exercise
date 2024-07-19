<x-layout>
    <x-slot:heading>    
        Job Listings
    </x-slot:heading>

    <ul>
        <!-- Loop directive -->
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/"></a>
                <strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per year.
            </li>
        @endforeach
    </ul>
</x-layout>