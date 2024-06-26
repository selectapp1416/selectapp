<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/createCharge.css')}}">
    <title>Crear Cargo</title>
</head>

<body>
    @extends('layout.header')
    @section('content')
    <form method="post" action="{{route('charges.store')}}" class="form">
        @csrf
        <label for="charge">Denominacion Del Cargo <span class="ast">*</span></label>
        <input type="text" name="charge" id="occupation_code" value="{{old('charge')}}">
        @error('charge')
        <span style="color: red;">{{$message}}</span>
        @enderror
        <label for="">Ocupacion <span class="ast">*</span></label><br>
        <select name="occupation_id" id="">
            @forelse($occupations as $occupation)
            <option value="{{$occupation->id}}">{{$occupation->occupation_code}}-{{$occupation->occupation_name}}</option>
            @empty
            <option value="">No hay ocupaciones en la empresa</option>
            @endforelse
        </select><br>
        @error('occupation_id')
        <span style="color: red;">{{$message}}</span>
        @enderror
        <input type="submit" value="Crear Ocupacion">
    </form>
    @endsection
</body>

</html>