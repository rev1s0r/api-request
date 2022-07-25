<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <title>DATABREAKERS</title>
    </head>
    <body>

    <body>
        <main>
            <div class="heading">
                <h1>Mohlo by vás zajímat</h1>
            </div>
            <div class="slide-container">
                <div id="slide-left">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 64" height="32px" width="32px" color="#000000"><polygon fill="currentColor" points="26.87 10.74 24.04 7.92 0 31.96 24.04 56 26.87 53.17 5.66 31.96 26.87 10.74"></polygon>
                        <polygon fill="currentColor" points="26.87 10.74 24.04 7.92 0 31.96 24.04 56 26.87 53.17 5.66 31.96 26.87 10.74"></polygon>
                    </svg>
                </div>
                <!-- <section class="container" id="slider">
                    @foreach ($data['responses']['product_detail']['response']['recommendations'] as $item)
                        <div class="thumbnail">
                            <a href="{{$item['attributes']['link']}}">
                                <div class="image">
                                    <img src="{{$item['attributes']['image_link']}}" alt="">
                                </div>
                                <div class="product-details">
                                    <h2>{{$item['attributes']['brand']}}</h2>
                                    <h3>{{$item['attributes']['name']}}</h3>
                                    <p>{{$item['attributes']['name_additional']}}</p>
                                    <h4>1 145 Kč</h4>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </section> -->

                <section class="container" id="slider">
                    
                        
                    
                </section> 

                <div id="slide-right">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 64" height="32px" width="32px" color="#000000"><polygon fill="currentColor" points="2.96 7.96 0.13 10.79 21.34 32 0.13 53.21 2.96 56.04 27 32 2.96 7.96"></polygon>
                        <polygon fill="currentColor" points="2.96 7.96 0.13 10.79 21.34 32 0.13 53.21 2.96 56.04 27 32 2.96 7.96"></polygon>
                    </svg>
                </div>
            </div>
        </main>

        <script src="app.js"></script>
        <script>

        let body = {
            "accountId": "notino_cz",
            "recommendation_request": {
                "requests": [{
                    "requestId": "product_detail",
                    "request": {
                        "template": {
                            "templateId": "test"
                        },
                        "returnedAttributes": ["name", "price", "image_link", "link", "name_additional", "availability", "brand", "rating", "rating_votes"],
                        "itemId": "HUGNO6M_AEDT10",
                        "userId": "899dc774-b87c-ac50-6736-80ea84e2bc4e"
                    }
                }]
            }
        };

        fetch("https://individualizer.databreakers.com/v1/individualizer", {
            method: "post",
            headers: {
                "Content-Type": "text/plain;charset=UTF-8"
            },
            body: JSON.stringify(body)
        })
        .then(function(response) {

            return response.json();

        }).then((response)=> {
            let apidata="";
            response.responses.product_detail.response.recommendations.map((values)=>{
                apidata += 
                `
                    <div class="thumbnail">
                        <a href="${values.attributes.link}">
                            <div class="image">
                                <img src="${values.attributes.image_link}" alt="${values.attributes.name}">
                            </div>
                            <div class="product-details">
                                <h2>${values.attributes.brand}</h2>
                                <h3>${values.attributes.name}</h3>
                                <p>${values.attributes.name_additional}</p>
                                <h4>${values.attributes.price} Kč</h4>
                            </div>
                        </a>
                    </div>
                `;
                document.getElementById("slider").innerHTML = apidata;
            })
        });

    </script>

    </body>
</html>


