{{-- color it to green if the modal has been opened  => to work on it later--}}
<table class="table">
    <thead>
      <tr class="table-info">
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Show</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($mailBox as $mail)
        <tr valign="middle" class="">
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$mail->name}}</td>
          <td>{{$mail->email}}</td>
          <td>@include("backend.partials.modalEmailShow")</td>
        </tr>      
        @endforeach
    </tbody>
  </table>