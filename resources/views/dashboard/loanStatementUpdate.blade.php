<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="https://cdn.tailwindcss.com"></script>
    <title>loan statement update</title>

</head>
<body>
 @extends('dashboard')    
 @section('dashboard-content')
  
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

          
              <tr>
                 <form method="POST" action="">
                    @csrf
                    @method('PATCH')
                    <td><input type="text" name="username" value="{{$loan->user_id}}" readonly></td>
                    <td><input type="text" name="username" value="{{Auth::user()->username}}" readonly></td>
                    <td><input type="text" name="phone" value="{{$loan->phone}}"></td>
                    <td><input type="number" name="amount" value="{{$loan->amount}}"></td>
                    <td><input type="text" name="purpose" value="{{$loan->purpose}}"></td>
                    <td><input type="submit" name="edit" value="Edit"></td>

                 </form>
              </tr> 
          
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
</body>
</html>