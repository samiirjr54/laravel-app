<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="https://cdn.tailwindcss.com"></script>
    <title>loan statement</title>

</head>
<body>
 @extends('dashboard')    
 @section('dashboard-content')
  @if(Session::has('loan'))
    <div class="w-full max-w-full m-auto bg-blue-200">
        <h1 class="text-center text-blue-900 p-2"->{{Session::get('loan')}}</h1>
    </div>
    @endif
 <div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-center text-sm font-light">
          <thead
            class="border-b bg-sky-200 font-medium text-dark dark:border-neutral-500 dark:bg-neutral-900">
            <tr>

              <th scope="col" class=" px-6 py-4">user_id</th>
              <th scope="col" class=" px-6 py-4">username</th>
              <th scope="col" class=" px-6 py-4">phone</th>
              <th scope="col" class=" px-6 py-4">amount</th>
              <th scope="col" class=" px-6 py-4">purpose</th>
              <th scope="col" class=" px-6 py-4">action</th>
           
            </tr>
          </thead>
          <tbody>

           @foreach ($loan as $loans)
              <tr>
                  <form method="GET" action="{{route('dashboard.loanStatement')}}">
                    @csrf
                  
                    <td scope="col" class=" text-lg px-6 py-4">{{$loans->user_id}}</td>
                    <td scope="col" class=" text-lg px-6 py-4">{{Auth::user()->username}}</td>
                    <td scope="col" class=" text-lg px-6 py-4">{{$loans->phone}}</td>
                    <td scope="col" class=" text-lg px-6 py-4">{{$loans->amount}}</td>
                    <td scope="col" class=" text-lg px-6 py-4">{{$loans->purpose}}</td>
                    <td scope="col" class=" text-lg px-6 py-4">
                     
                        <a href="/dashboard/loanStatementUpdate" type="button" class="bg-cyan-200 p-1 rounded-lg hover:bg-green-400"><span>update</span></a>
                     
                        <a href="" type="button" class="bg-red-300 p-1 rounded-lg hover:bg-red-800"><span>delete</span></a>
                    </td>
                  </form>

              </tr> 
           @endforeach
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
</body>
</html>