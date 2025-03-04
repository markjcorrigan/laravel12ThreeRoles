<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                      <main>
        <table class="table table-hover">

            <thead>

            <th>ID</th>
            <th>Username</th>

            <th>Email</th>



            </thead>

            <tbody>
            @foreach($users as $user)

                <tr>

                    <td>{{$user->id}} </td>

                    <td>{{$user->name}} </td>

                    <td>{{$user->email}} </td>


                </tr>
            @endforeach

            </tbody>
</main>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
