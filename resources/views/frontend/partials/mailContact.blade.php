<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail From page contact</title>
</head>
<body>
    <h1>Hello ! this is a Mail From page contact</h1>
    <h2>Subject : {{$mail->subject}}</h2>
    <h2>From : {{$mail->email}}</h2>
    <h2>Message : </h2>
    <h5>{{$mail->messageText}}</h5>
</body>
</html>