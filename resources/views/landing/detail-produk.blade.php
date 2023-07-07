@extends('landing.layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS - Home</title>

    <!-- cdn taildwin -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- fontaweesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- cdn flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</head>
<body>

    <!-- image -->
    <section class="font-inter">
        <div class="container mx-auto flex px-24 pb-10 items-center justify-center flex-col">
            <img src="images/home/promik.jpg" alt="hero" class="lg:2/9 md:w-3/6 w-5/6  object-cover object-center">
        </div>
    </section>
    <!-- end image -->

    <!-- desc -->
    <section class="text-gray-600 body-font">
        <div class="container px-24 pb-24 mx-auto">
            <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                <p class="leading-relaxed text-lg pb-20">Laktosa, susu bubuk tanpa lemak, minyak nabati (kedelai, kelapa, oleat bunga matahari) mengandung antioksidan (tokoferol), konsetrat whey protein, oligofruktosa,pengemulsi (lesitin kedelai, monogliserida), 11 mineral, vitamin (kolin klorida, asam askorbat, inositol, premiks vitamin), asam lemak ta jenuh ganda rantai panjang berasal dari sel tunggal AA, asam dokosaheksaenoat (DHA), taurin, pengatur keasaman (asam sitrat), perisa artifisial , 5 nukleotida, antioksidan konsetrat campuran tokoferol.</p>
                <p class="text-gray-500">Link Pembelian</p>
                <span class="inline-flex pt-2 p-4">
                    <a class="text-gray-500  hover:text-indigo-500" target="_blank" href="https://shp.ee/a6yex46">
                        <img src="images/shopee.png" class="w-5 h-7" alt="">
                    </a>
                    <a class="ml-4 text-gray-500" target="_blank" href="https://www.tokopedia.com/?gclid=Cj0KCQjwocShBhCOARIsAFVYq0gvpPOkMVhGU6HoXLdUZUYEIwp_dITc3lHcT3SFxre7gU9dP88nIAoaAhzcEALw_wcB">
                        <img src="images/tokopedia.png" class="w-5 h-7" alt="">
                    </a>
                    <a class="ml-4 text-gray-500" target="_blank" href="https://www.lazada.co.id/?exlaz=d_1:mm_150050845_51350203_2010350203::11:12493663656!118894776677!lazada!e!kwd-19342147066!c!!!!503957112711!&gclid=Cj0KCQjwocShBhCOARIsAFVYq0hJ5tiedQXoKrVIgqHwIey3kdnAEO-86V_I14I9WdiyQvT-6iRPAKYaAvHJEALw_wcB">
                        <img src="images/Lazada.png" class="w-auto h-7" alt="">
                    </a>
                </span>
            </div>
        </div>
    </section>
    <!-- end desc -->

</body>
</html>
@endsection