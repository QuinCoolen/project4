<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Stonks Pizza</title>
</head>
<body>
     <div class="flex flex-col h-screen">
        <div class="absolute w-full font-sans font-bold tracking-widest bg-gray-800 flex flex-row items-center justify-around transition-all ease-in-out h-16  text-transparent transform hover:h-40 hover:text-white duration-500">
            <a href="overons">OVER ONS</a>
            <a href="menu">MENU</a>
            <img src="{{asset('images/stonks.png')}}" alt="stonks pizza logo" class="h-full">
            <a href="bestellen">BESTELLEN</a>
            <a href="">WINKELMANDJE</a>
        </div>
        <div class="flex-auto bg-[url('images/background.jpg')] bg-cover">
            <div class="mt-52 mb-20 mx-20 grid grid-cols-3 gap-4 content-center">
                @foreach ($pizzas as $pizza)
                <div class="h-fit flex flex-col text-center items-center border-2 border-white rounded-md bg-gray-800 text-white gap-2 py-4">
                    <img src="{{asset($pizza->image)}}" alt="{{$pizza->name}}" class="h-44" >
                    <p class="text-sm font-semibold">{{$pizza->name}}</p>
                    <p class="text-sm font-semibold">{{$pizza->priceForDisplay()}}</p>
                </div>
                @endforeach
            </div>
        </div>
        <footer class="py-8 h-16 text-white bg-gray-800 flex flex-row items-center justify-around">
            <p>Algemene Voorwaarden</p>
            <p>KVK: 3904121</p>
            <p>Telefoon: 06432190</p>
            <p>Email: info@stonkspizza.nl</p>
            <p>Tjalkstraat 518152 CN Lemelerveld</p>
        </footer>
    </div>
</body>
</html>