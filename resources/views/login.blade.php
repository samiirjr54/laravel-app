<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>login</title>
</head>
<body>
    @if(Session::has('success'))
    <div class="w-full max-w-ful bg-sky-200">
        <h1 class="text-center txt-black-600 p-2"->{{Session::get('success')}}</h1>
    </div>
    @endif

    @include('topnav')
    <div class="w-full max-w-lg m-auto mt-10">
    
    <h1 class="text-FFA500 text-3xl w-full max-w-lg m-auto text-center mt-6">User login</h1>

     @if(Session::has('error'))
    <div class="w-full max-w-ful bg-red-300 mt-1">
        <h1 class="text-center txt-black-600 p-2"->{{Session::get('error')}}</h1>
    </div>
    @endif
    <form action="/login" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
            Username
            </label>
           <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="username" type="text" placeholder="Username">
           <span class="text-red-800">@error('username') {{$message}} @enderror</span>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
            password
            </label>
           <input type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password" type="text" placeholder="password">
           <span class="text-red-800">@error('password') {{$message}} @enderror</span>
        </div>

        <button type="submit" name="login" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            login
        </button>
      </form>

      <p class="text-bold">Dont have an account? <a class="text-sky-900 hover:text-orange-500 underline" href="/signup">signup</a></p>
      
    </div>
</body>
</html>