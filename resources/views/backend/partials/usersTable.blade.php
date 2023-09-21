<div>
    <table class="table">
        <thead class="table-info">
            <tr>
                <th scope="col">#</th>
                <th scope="col">User Name</th>
                <th scope="col">Role</th>
                <th scope="col">Management</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $user->name }}</td>
                    @foreach ($user->roles as $role)
                        <td>{{ $role->name }}</td>
                    @endforeach
                    <td>
                        <div class="d-flex gap-3">
                            <div>
                                @include("backend.partials.modalRole")
                            </div>
                            <div>
                                <form action="{{route("backoffice.destroyUser",$user->id)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>