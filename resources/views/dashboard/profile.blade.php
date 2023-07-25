<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    @if(Session::has('update'))
    <div class="w-full max-w-ful bg-sky-200">
        <h1 class="text-center txt-black-600 p-2"->{{Session::get('update')}}</h1>
    </div>
    @endif
   
     @extends('dashboard')    
     @section('dashboard-content')
     <div class="w-full max-w-lg m-auto mt-10">
        <h1 class="text-2xl my-1">Basic Info.</h1> 
    
            <form action="{{route('profile.update')}}" method="POST" class="">
            @csrf
            @method('patch')
            <div>
                <input type="text" name="username" value="{{$user->username}}">
            </div>
            <div>
                <input type="text" name="email" value="{{$user->email}}">
            </div>
            <div>
                <input type="submit" name="update" value="Update">
            </div>
        </form>
     </div>
    @endsection
    </div>
</body>
</html>