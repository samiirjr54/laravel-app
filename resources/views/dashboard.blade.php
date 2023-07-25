<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>
    
</head>

<body>
    <div class="w-full max-w-full ">
      <nav class="p-5 bg-white shadow md:flex md:items-center md:justify-between">
      <div class="flex justify-between items-center ">
      <span class="text-2xl font-[Poppins] cursor-pointer">
        <a href="/dashboard" class="text-xl hover:text-cyan-500 duration-500">Dashboard</a>
      </span>

      <span class="text-3xl cursor-pointer mx-2 md:hidden block">
        <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
      </span>
    </div>

    <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
      <li class="mx-4 my-6 md:my-0">
        <a href="/dashboard" class="text-xl hover:text-cyan-500 duration-500">Home</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="{{route('dashboard.profile')}}" class="text-xl hover:text-cyan-500 duration-500">Profile</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="{{route('dashboard.loan')}}" class="text-xl hover:text-cyan-500 duration-500">Apply Loan</a>
      </li>
       <li class="mx-4 my-6 md:my-0">
        <a href="{{route('dashboard.loanStatement')}}" class="text-xl hover:text-cyan-500 duration-500">Loan statement</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-cyan-500 duration-500">Reports</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-cyan-500 duration-500">Settings</a>
      </li>

      <button class="bg-cyan-400 text-white font-[Poppins] duration-500 px-6 py-2 mx-4 hover:bg-cyan-500 rounded ">
        <li><a href="/logout">Logout</a></li>
      </button>
<h2 class=""></h2>
    </ul>
  </nav>


  <script>
    function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }
  </script>

  <div>
    @yield('message')
    @yield('dashboard-content')

  </div>
  


     
</body>
</html>