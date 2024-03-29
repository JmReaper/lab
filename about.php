<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f1f5f9]">
    <div class="flex justify-center m-10 bg-white rounded-xl shadow-lg h-18 p-5">
        <div class="flex flex-shrink-0 items-center">
          <a href="index1.php"><img class="h-8 w-auto" src="uc.png" alt="UC LOGO"> </a>
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <a href="home.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">HOME</a>
            <a href="#" class="bg-gray-500 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium " aria-current="page">ABOUT</a>
            <?php session_start();
             if(isset($_SESSION['login'])){
              echo '<a href="logout.php"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">LOGOUT</a>';
             }
             else{
               echo '<a href="login.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"  >LOGIN</a>';}
            ?>
        </div>
      </div>
 </div>
 <div class="flex justify-center items-center ">
    <div class="bg-white rounded-lg shadow-lg p-8 max-w-md w-full space-y-4">
        <h2 class="text-3xl font-semibold text-center dark:text-slate-400">ABOUT</h2>
            <p class="mt-4 text-sm leading-6 col-start-1 sm:col-span-2 lg:mt-6 lg:row-start-4 lg:col-span-1 dark:text-slate-400 text-center">
                The campus lab implements a seat reservation system to ensure equitable access and efficient utilization of resources, allowing students to secure designated seats for their academic pursuits.
              </p>
    </div>
 </div>
</body>
</html>