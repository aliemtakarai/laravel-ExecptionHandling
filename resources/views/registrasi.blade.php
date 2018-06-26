<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{ Form::open(['url'=>'registrasi', 'method'=>'post']) }}
    {{ Form::label('Nama') }}
    {{ Form::input('nama','') }}<br>
    {{ Form::label('email') }}
    {{ Form::email('email','example@example.com') }}<br>
    {{ Form::label('password') }}
    {{ Form::password('password') }}<br>
    {{ Form::label('phone') }}
    {{ Form::number('phone','') }}<br>
    {{ Form::label('gender') }}
    {{ Form::select('gender', ['laki'=>'laki', 'perempuan'=>'perempuan']) }}<br>
    {{ Form::label('birthdate') }}
    {{ Form::date('birthdate','') }}<br>
    {{ Form::label('nationality') }}
    {{ Form::input('Nationality','') }}<br>
    {{ Form::input('submit','registrasi') }}
    {{ Form::close() }}
</body>
</html>