<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ mix('js/scroll-header.js') }}" defer></script>
    <title>Document</title>
</head>
<body class="h-full">

<div class="min-h-full">  
    <x-header></x-header>

    <main>
      <div>
        <!-- Your content -->
        {{ $slot }}
      </div>
    </main>

    <footer class="bg-[#362c17] text-gray-300 py-8">
      <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
          <div>
              <h2 class="text-lg font-semibold mb-4">CONTACT US</h2>
              <p class="mt-2">E-mail: <a href="mailto:akunsosmed0709@gmail.com" class="text-yellow-500 hover:underline">akunsosmed0709@gmail.com</a></p>
              <p>Phone: <a href="tel:+62895351056930" class="text-yellow-500 hover:underline">+62 895351056930</a></p>
          </div>
          <div>
              <h2 class="text-lg font-semibold mb-4">OUR STORY</h2>
              <p>
                Website ini dibuat sebagai bagian dari proyek yang lebih mendalam untuk memenuhi tugas-tugas yang diberikan melalui program Dibimbing, serta berfungsi sebagai demonstrasi dari keterampilan dan konsep yang telah dipelajari selama kursus.
              </p>
          </div>
          <div class="grid grid-cols-3 gap-2">
            <a href="https://unsplash.com/photos/brown-wooden-lounge-chairs-near-pool-surrounded-by-palm-trees-vmIWr0NnpCQ">
              <img src="/img/image1.jpg" alt="Image 1" class="rounded-lg object-cover w-full aspect-square">
            </a>
            <a href="https://unsplash.com/photos/white-and-brown-concrete-building-CepDpEiALqM">
              <img src="/img/image2.jpg" alt="Image 2" class="rounded-lg object-cover w-full aspect-square">
            </a>
            <a href="https://unsplash.com/photos/swimming-pool-surrounded-by-trees--eLfQTmDfLk">
              <img src="/img/image3.jpg" alt="Image 3" class="rounded-lg object-cover w-full aspect-square">
            </a>
            <a href="https://unsplash.com/photos/palm-trees-near-pool-and-building-sTvu6hK3ul4">
              <img src="/img/image4.jpg" alt="Image 4" class="rounded-lg object-cover w-full aspect-square">
            </a>
            <a href="https://unsplash.com/photos/white-concrete-building-near-swimming-pool-during-daytime-pDmcAE0KX2g">
              <img src="/img/image5.jpg" alt="Image 5" class="rounded-lg object-cover w-full aspect-square">
            </a>
            <a href="https://unsplash.com/photos/ground-pool-near-wooden-lounges-H0eV-0CRpOE">
              <img src="/img/image6.jpg" alt="Image 6" class="rounded-lg object-cover w-full aspect-square">
            </a>
          </div>
          
      <div class="container mx-auto mt-8 flex justify-between items-center">
          <p class="text-sm text-gray-500">&copy; 2024 Village Bali</p>
          <div class="flex space-x-4">
              <a href="#" class="text-gray-500 hover:text-yellow-500"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="text-gray-500 hover:text-yellow-500"><i class="fab fa-instagram"></i></a>
          </div>
      </div>
  </footer>
  
  </div>
  
</body>
</html>