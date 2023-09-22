<!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editinfocontact">
    Edit Contact Infos
</button>

<!-- Modal -->
<div class="modal fade" id="editinfocontact" tabindex="-1" aria-labelledby="editinfocontactLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editinfocontactLabel">Edit Contact Infos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach ($contactInfos as $info)
                    <form action={{route("backoffice.updateContactInfos",$info->id)}} method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="city" class="label-form fw-bold my-2">City:</label>
                            <input type="text" class="form-control" name="city"
                                value="{{ old('city', $info->city) }}">
                        </div>
                        <div>
                            <label for="adress" class="label-form fw-bold my-2">Adress:</label>
                            <input type="text" class="form-control" name="adress"
                                value="{{ old('adress', $info->adress) }}">
                        </div>
                        <div>
                            <label for="phone" class="label-form fw-bold my-2">Phone:</label>
                            <input type="text" class="form-control" name="phone"
                                value="{{ old('phone', $info->phone) }}">
                        </div>
                        <div>
                            <label for="open_closeTime" class="label-form fw-bold my-2">open/close Time:</label>
                            <input type="text" class="form-control" name="open_closeTime"
                                value="{{ old('open_closeTime', $info->open_closeTime) }}">
                        </div>
                        <div>
                            <label for="email" class="label-form fw-bold my-2">Email:</label>
                            <input type="email" class="form-control" name="email"
                                value="{{ old('email', $info->email) }}">
                        </div>
                        <div class="d-flex justify-content-end my-3">
                            <button type="submit" class="btn btn-warning">Save Changes</button>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
