<x-layout>
    <!-- We define our slot or variable -->
    <x-slot:heading>
        Home Page
    </x-slot:heading>

    <h1> {{ $greeting }}, from the Home Page. My name is {{ $name }} </h1>   

    <!-- Loop directive -->
    @foreach ($jobs as $job)
        <li><strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per year.</li>
    @endforeach
</x-layout>