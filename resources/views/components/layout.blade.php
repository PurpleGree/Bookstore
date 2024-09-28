<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BookStore</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,400,0,0" />
    @Vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="min-w-96 ">
    <div class="lg:w-[80%] md:w-[80%] sm:w-[95%] mx-auto h-screen space-y-5 flex-col ">

       <x-header></x-header>

        <main class="flex gap-4">
           <x-menubar/>
           {{$slot}}
        </main>


        <footer>
            <hr>
            <div> This is footer</div>
        </footer>
    </div>

</body>

</html>


<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->




</div>
