<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>sign up page</title>
</head>

<body>
     @if(Session::has('email'))
    <div class="w-full max-w-ful bg-sky-200">
        <h1 class="text-center txt-black-600 p-2"->{{Session::get('email')}}</h1>
    </div>
    @endif
    @include('topnav')
    
    <h1 class="text-FFA500 text-3xl w-full max-w-lg m-auto text-center mt-6">User signup</h1>
    <div class="w-full max-w-lg m-auto mt-10">
         
    <form action="/process_signup" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
            Username
        </label>
           <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="username" type="text" placeholder="Username">
           <span class="text-red-800">@error('username') {{$message}} @enderror</span>
        </div>

         <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
            Email
            </label>
           <input type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" type="text" placeholder="email">
           <span class="text-red-800">@error('email') {{$message}} @enderror</span>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
            password
            </label>
           <input type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password" type="text" placeholder="password">
           <span class="text-red-800">@error('password') {{$message}} @enderror</span>
        </div>

        <button type="submit" name="signup" class="bg-orange-400 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" value="submit">
            Signup
        </button>
      </form>
      <p class="text-bold">Already have an account? <a class="text-sky-900 hover:text-orange-500 underline" href="/login">Login</a></p> 
    </div>
</body>
</html>