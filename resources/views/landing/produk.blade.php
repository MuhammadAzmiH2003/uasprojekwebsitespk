@extends('landing.layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MILKOW - Home</title>

    <!-- cdn taildwin -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- fontaweesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- cdn flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</head>
<body>

    <!-- produk -->
    <section class="text-gray-600 body-font">
        <div class="container px-24 pt-10 pb-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-5xl font-semibold title-font mb-4 text-gray-900">Pilih Susu Formula Terbaik</h1>
                <p class="lg:w-2/3 text-gray-400 mx-auto leading-relaxed text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo assumenda odit pariatur numquam iure molestiae optio modi, officiis ea voluptates!</p>
            </div>
            <div class="flex flex-wrap pb-20  sm:-m-4 -mx-4 -mb-10 -mt-4">
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-auto overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="images/home/lactogen.jpg">
                    </div>
                    <h2 class="text-lg font-medium title-font text-gray-400 mt-5 italic">24-07-2023</h2>
                    <h2 class="text-xl font-semibold title-font text-gray-900 mt-3 ">LACTOGEN</h2>
                    <p class="text-base leading-relaxed mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque cum, asperiores tenetur adipisci fugit quasi..</p>
                    <a class="text-indigo-500 inline-flex items-center mt-3" href="{{ route('detail-produk.index') }}">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                    </a>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-auto overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="images/home/sgm.jpg">
                    </div>
                    <h2 class="text-lg font-medium title-font text-gray-400 mt-5 italic">24-07-2023</h2>
                    <h2 class="text-xl font-semibold title-font text-gray-900 mt-3 ">SGM AMANDA 1</h2>
                    <p class="text-base leading-relaxed mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic dolor incidunt impedit cumque odio fuga!.</p>
                    <a class="text-indigo-500 inline-flex items-center mt-3" href="{{ route('detail-produk.index') }}">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                    </a>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-auto overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="images/home/enfamil.jpeg">
                    </div>
                    <h2 class="text-lg font-medium title-font text-gray-400 mt-5 italic">24-07-2023</h2>
                    <h2 class="text-xl font-semibold title-font text-gray-900 mt-3 ">ENFAMIL A+</h2>
                    <p class="text-base leading-relaxed mt-2" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, impedit autem aperiam molestiae suscipit eos!
                    <a class="text-indigo-500 inline-flex items-center mt-3" href="{{ route('detail-produk.index') }}">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                    </a>
                </div>
            </div>
            <div class="flex flex-wrap pb-20  sm:-m-4 -mx-4 -mb-10 -mt-4">
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-auto overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="images/home/promilk.jpeg">
                    </div>
                    <h2 class="text-lg font-medium title-font text-gray-400 mt-5 italic">24-07-2023</h2>
                    <h2 class="text-xl font-semibold title-font text-gray-900 mt-3 ">S-26 PROMIL</h2>
                    <p class="text-base leading-relaxed mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque cum, asperiores tenetur adipisci fugit quasi..</p>
                    <a class="text-indigo-500 inline-flex items-center mt-3" href="{{ route('detail-produk.index') }}">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                    </a>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-auto overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="images/home/bebelove.jpg">
                    </div>
                    <h2 class="text-lg font-medium title-font text-gray-400 mt-5 italic">24-07-2023</h2>
                    <h2 class="text-xl font-semibold title-font text-gray-900 mt-3 ">Energen Coklat</h2>
                    <p class="text-base leading-relaxed mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic dolor incidunt impedit cumque odio fuga!.</p>
                    <a class="text-indigo-500 inline-flex items-center mt-3" href="{{ route('detail-produk.index') }}">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                    </a>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-auto overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="images/home/nutribaby.jpg">
                    </div>
                    <h2 class="text-lg font-medium title-font text-gray-400 mt-5 italic">24-07-2023</h2>
                    <h2 class="text-xl font-semibold title-font text-gray-900 mt-3 ">NUTRIBABY ROYAL</h2>
                    <p class="text-base leading-relaxed mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, impedit autem aperiam molestiae suscipit eos!
                    <a class="text-indigo-500 inline-flex items-center mt-3" href="{{ route('detail-produk.index') }}">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                    </a>
                </div>
            </div>
            <div class="flex flex-wrap pb-20 sm:-m-4 -mx-4 -mb-10 -mt-4">
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-auto overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="images/home/bendera.png">
                    </div>
                    <h2 class="text-lg font-medium title-font text-gray-400 mt-5 italic">24-07-2023</h2>
                    <h2 class="text-xl font-semibold title-font text-gray-900 mt-3 ">Frisian Flag</h2>
                    <p class="text-base leading-relaxed mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque cum, asperiores tenetur adipisci fugit quasi..</p>
                    <a class="text-indigo-500 inline-flex items-center mt-3" href="{{ route('detail-produk.index') }}">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                    </a>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-auto overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="images/home/energen.png">
                    </div>
                    <h2 class="text-lg font-medium title-font text-gray-400 mt-5 italic">24-07-2023</h2>
                    <h2 class="text-xl font-semibold title-font text-gray-900 mt-3 ">Energen Coklat</h2>
                    <p class="text-base leading-relaxed mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic dolor incidunt impedit cumque odio fuga!.</p>
                    <a class="text-indigo-500 inline-flex items-center mt-3" href="{{ route('detail-produk.index') }}">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                    </a>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-auto overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="images/home/milo.jpg">
                    </div>
                    <h2 class="text-lg font-medium title-font text-gray-400 mt-5 italic">24-07-2023</h2>
                    <h2 class="text-xl font-semibold title-font text-gray-900 mt-3 ">Milo</h2>
                    <p class="text-base leading-relaxed mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, impedit autem aperiam molestiae suscipit eos!
                    <a class="text-indigo-500 inline-flex items-center mt-3" href="{{ route('detail-produk.index') }}">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end product -->

</body>
</html>
@endsection