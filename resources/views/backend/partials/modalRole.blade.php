<!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
data-bs-target="#role{{$user->id}}">
Change Role
</button>
<!-- Modal -->
<div class="modal fade" id="role{{$user->id}}" tabindex="-1"
aria-labelledby="role{{$user->id}}Label" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="role{{$user->id}}Label">Change Role of the user "{{$user->name}}"</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
            <form action="{{route("backoffice.changeRole",$user->id)}}" method="POST">
                @csrf
                @method("PUT")
                <select name="role" class="form-control">
                    <option disabled selected>Pick Role</option>
                    @foreach ($roles as $role)
                        <option value="{{$role->name}}">{{$role->name}}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-success mt-4">Save changes</button>
            </form>
        </div>
    </div>
</div>
</div>
