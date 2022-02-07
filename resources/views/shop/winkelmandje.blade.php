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
            <a href="/overons">OVER ONS</a>
            <a href="/login">LOGIN</a>
            <img src="{{asset('images/stonks.png')}}" alt="stonks pizza logo" class="h-full">
            <a href="/bestellen">BESTELLEN</a>
            <a href="/winkelmandje/{{$order->id}}">WINKELMANDJE</a>
        </div>
        <div class="flex-auto bg-[url('/images/background.jpg')] bg-cover">
            <div class="mt-52 mb-20 mx-20">
                <table class="text-center border-seperate border-spacing w-full border-2 border-white bg-gray-800 text-white">
                    <tr>
                        <th>Pizza</th>
                        <th>Formaat</th>
                        <th>Verwijderen</th>
                        <th>Prijs</th>
                    </tr>
                    @foreach ($order->pizzas as $pizza)
                    <tr>
                        <td class="py-5">{{$pizza->name}}</td>
                        <td class="capitalize">{{$pizza->pivot->size}}</td>
                        <td>
                            <form action="{{ route('pizzaorder.destroy', [$order_id = 1, $pizza_id = $pizza->id]) }}" method="POST">                    
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-28 bg-red-600 hover:bg-red-800 py-2 text-sm leading-5 rounded-full font-semibold text-white">Verwijderen</button>
                            </form>
                        </td>
                        <td>{{$pizza->priceForDisplay()}}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td class="capitalize">Status: {{$order->status}}</td>
                        <td>Totaal Prijs: {{$pizza->priceForDisplay()}}</td>
                        <td>
                            <form action="{{ route('order.update', ['id' => $order->id]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="bestelling geplaatst">
                                <button type="submit" class="w-28 bg-amber-600 hover:bg-amber-800 py-2 text-sm leading-5 rounded-full font-semibold text-white">Bestellen</button>
                            </form>
                        </td>
                    </tr>
                </table>
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