<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>loan table</title>
</head>
<body>
 
    @extends('dashboard')
    @section('dashboard-content')
        <h1 class="text-FFA500 text-3xl w-full max-w-lg m-auto text-center mt-6 mb-3" >Loan application</h1>
        <div class="w-full max-w-lg m-auto ">
        <form class="" action="{{route('apply.loan')}}" method="POST" class=" w-full max-w-full bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div>
                <input type="hidden" name="id" value="{{Auth::user()->id}}">
            </div>
            <div>
                <input  type="text" name="username" value="{{Auth::user()->username}}" readonly class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 text-2xl leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div>
                <input type="email" name="email" value="{{Auth::user()->email}}" readonly class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 text-2xl leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div>
                <input type="phone" name="phone" placeholder="Enter phone no." required  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 text-2xl leading-tight focus:outline-none focus:shadow-outline"> 
            </div>
            <div>
                <input type="number" name="amount" placeholder="Enter amount of loan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 text-2xl leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div>
                <textarea name="purpose" id="" cols="30" rows="10" placeholder="Explain the purpose of the loan." class=" h-48 shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 text-2xl leading-tight focus:outline-none focus:shadow-outline"></textarea >
            </div>
            <div>
                <input type="submit" name="apply-loan" value="Apply Loan" class="bg-sky-400 hover:bg-sky-300 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
            </div>
        </div>
     @endsection

</body>
</html>