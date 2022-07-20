<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">

        <title>Laravel</title>

    </head>
    <body class="antialiased">

        <div class="slider-wrap">
            <div class="slider">
                <div class="slider-inner">
                    <div class="item">
                    @foreach ($data['responses']['product_detail']['response']['recommendations'] as $item)
                        <h3>{{$item['attributes']['name']}}</h3>

                    @endforeach
                    </div>
                </div>
            </div>
        </div>

       @foreach ($data['responses']['product_detail']['response']['recommendations'] as $item)
           <h1>{{$item['itemId']}}</h1>
           <p>{{$item['score']}}</p>
           <p>{{$item['attributes']['name']}}</p>
           <p>{{$item['attributes']['image_link']}}</p>
           <p>{{$item['attributes']['link']}}</p>
           <p>{{$item['attributes']['name_additional']}}</p>
           <p>{{$item['attributes']['availability']}}</p>
           <p>{{$item['attributes']['brand']}}</p>
       @endforeach

       <script src="app.js"></script>
    </body>
</html>
