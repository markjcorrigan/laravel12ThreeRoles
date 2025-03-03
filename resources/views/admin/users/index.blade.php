<x-admin-layout>


    <!-- Page Content -->
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

        </table>
</x-admin-layout>







