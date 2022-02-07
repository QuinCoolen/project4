<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Stonks Pizza</title>
</head>
<body class="">
     <div class="flex flex-col h-screen">
        <div class="absolute w-full font-sans font-bold tracking-widest bg-gray-800 flex md:flex-row flex-col items-center justify-around transition-all ease-in-out h-16 text-transparent transform hover:h-40 hover:text-white duration-500">
            <a href="overons">OVER ONS</a>
            <a href="login">LOGIN</a>
            <img src="{{asset('images/stonks.png')}}" alt="stonks pizza logo" class="h-full">
            <a href="bestellen">BESTELLEN</a>
            <a href="winkelmandje/1">WINKELMANDJE</a>
        </div>
        <div class="flex-auto bg-[url('images/background.jpg')] bg-cover">
            <div class="mt-52 mb-20 mx-20 gap-4">
                <div class="h-full border-2 border-white rounded-md bg-gray-800 text-white gap-2 p-4 flex flex-col items-center">
                    <h1 class="text-xl">Stonks Pizza</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus minima quas nemo consectetur officiis. Impedit ab, exercitationem architecto, repudiandae perferendis facere accusamus voluptatem vero mollitia eligendi provident placeat, quibusdam fuga. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus reiciendis ex dolorem animi. Aliquam vero doloribus in officiis, autem, neque ducimus dolore dolorum odio similique eum expedita culpa totam possimus.</p>
                    <div class="w-full flex justify-around">
                        <button class="w-24 hover:bg-white hover:text-black border-2 border-white py-2 leading-5 rounded-full font-semibold text-white" onclick="window.location.href = '/overons';">Over Ons</button>
                        <button class="w-24 hover:bg-white hover:text-black border-2 border-white py-2 leading-5 rounded-full font-semibold text-white" onclick="window.location.href = '/bestellen';">Bestellen</button>
                        <button class="w-24 hover:bg-white hover:text-black border-2 border-white py-2 leading-5 rounded-full font-semibold text-white" onclick="window.location.href = '/login';">Login</button>
                    </div>
                </div>
            </div>
        </div>
        <footer class="md:h-16 h-32 text-white bg-gray-800 flex md:flex-row items-center justify-around flex-col">
            <p>Algemene Voorwaarden</p>
            <p>KVK: 3904121</p>
            <p>Telefoon: 06432190</p>
            <p>Email: info@stonkspizza.nl</p>
            <p>Tjalkstraat 518152 CN Lemelerveld</p>
        </footer>
    </div>
</body>
</html>