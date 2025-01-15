<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sure Job</title>
    @Vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body class="bg-black text-white pb-10">
    <div class="px-10">
        <nav class="flex justify-between items-center py-6 border-b border-white/10 ">
            <div>
                <a>
                    <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="">
                </a>
            </div>
            <div class="space-x-5 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Career</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
            @auth
            <div class="flex space-x-3">
                <a href="/jobs/create">Create Job</a>
                <form action="/logout" method="POST">
                    @csrf
                    @method("DELETE")
                    <button>Log Out</button>

                </form>
            </div>
            @endauth
            @guest
            <div class="space-x-5 font-bold">

                <a href="/register">Register</a>
                <a href="/login">Login</a>

            </div>
            @endguest
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
