<x-app title="Users">

  <x-slot name="heading">Users</x-slot>
  
  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
        </tr>
          
      @endforeach
    </tbody>
  </table>

</x-app>