<table class="table">
    <thead>
      <tr class="table-info">
        <th scope="col">#</th>
        <th scope="col">City</th>
        <th scope="col">Adress</th>
        <th scope="col">Phone</th>
        <th scope="col">Open/Close Time</th>
        <th scope="col">Email</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($contactInfos as $info)
        <tr valign="middle" class="">
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$info->city}}</td>
          <td>{{$info->adress}}</td>
          <td>{{$info->phone}}</td>
          <td>{{$info->open_closeTime}}</td>
          <td>{{$info->email}}</td>
          <td>@include("backend.partials.modalEditContactInfos")</td>
        </tr>      
        @endforeach
    </tbody>
  </table>