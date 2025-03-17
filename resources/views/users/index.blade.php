<h1>Users List</h1>
<table border="1">
    <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($handymen as $handyman)
            <tr>
                <td>{{ $handyman->firstname }}</td>
                <td>{{ $handyman->lastname }}</td>
                <td>{{ $handyman->role }}</td>
            </tr>
        @endforeach
        @foreach ($providers as $provider)
            <tr>
                <td>{{ $provider->firstname }}</td>
                <td>{{ $provider->lastname }}</td>
                <td>{{ $provider->role }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
