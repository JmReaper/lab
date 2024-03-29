<?php
session_start();
if(isset($_SESSION['login'])){
    header("location:home.php");
	exit;
}
?>
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
            <a href href="#"><img class="h-8 w-auto" src="uc.png" alt="UC LOGO"> </a>
        </div>
        <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">HOME</a>
                <a href="about.php"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">ABOUT</a>
                <a href="Login.php"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">LOGIN</a>

            </div>
        </div>
    </div>
    <div class="flex justify-center items-center ">
        <div class="bg-white rounded-lg shadow-lg p-8 max-w-md w-full space-y-4">
            <h2 class="text-3xl font-semibold text-center dark:text-slate-400">Welcome to our Lab Campus Seat
                Reservation Portal!</h2>
            <p
                class="mt-4 text-sm leading-6 col-start-1 sm:col-span-2 lg:mt-6 lg:row-start-4 lg:col-span-1 dark:text-slate-400">
                Your reservation experience is our top priority. Here's how we're making it even better: To access the
                homepage,please log in with your credentials.
            </p>
            <div class="flex justify-center">
                <a href="Login.php"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-100">Login</a>
            </div>
        </div>
    </div>
</body>

</html>