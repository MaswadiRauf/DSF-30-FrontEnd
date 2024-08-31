<x-layout>
  {{-- Home --}}
  <section id="home" class="bg-cover bg-center relative text-white" 
  style="background-image: url('{{ asset('img/village-drone.jpeg') }}'); background-size: 150%; min-height: 100vh; background-position: center; display: flex; align-items: center; position: relative;">
    <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 relative z-10">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Welcome to Village Bali</h1>
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Your Travel Haven</h1>
            <p class="max-w-2xl mb-6 font-light text-white-500 lg:mb-8 md:text-lg lg:text-xl dark:text-white-400">From serene villas to personalized services, Village Bali offers your perfect tropical getaway.</p>
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-yellow-900 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 dark:focus:ring-yellow-900">
                Top Destination
            </a>
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-yellow-900 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 dark:focus:ring-yellow-900">
                Discover More
            </a> 
        </div>         
    </div>
    </section>


    {{-- about --}}
    <section id="about" class="bg-white dark:bg-gray-900">
      <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
          <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
              <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Bali Is Wonderland</h2>
              <p class="mb-4">Bali adalah destinasi yang memukau dengan pantai yang indah, tempat-tempat bersejarah, dan pemandangan alam yang hijau. Sebagai surga bagi para wisatawan, Bali cocok untuk relaksasi maupun petualangan. Pulau ini memadukan tradisi yang kaya dengan atraksi modern, memenuhi keinginan setiap pengunjung dengan mudah dan elegan.</p>
              <div class="text-center mt-6 flex flex-col items-center">
                  <img fetchpriority="high" decoding="async" width="360" height="227" 
                       src="https://www.village-bali.com/wp-content/uploads/2022/09/Village-Full-Lockup-Gold-transparent.png" 
                       alt="Village Bali Logo"
                       sizes="(max-width: 1920px) 100vw, 1920px" 
                       srcset="https://www.village-bali.com/wp-content/uploads/2022/09/Village-Full-Lockup-Gold-transparent.png 1920w, 
                               https://www.village-bali.com/wp-content/uploads/2022/09/Village-Full-Lockup-Gold-transparent-300x102.png 300w, 
                               https://www.village-bali.com/wp-content/uploads/2022/09/Village-Full-Lockup-Gold-transparent-1024x349.png 1024w, 
                               https://www.village-bali.com/wp-content/uploads/2022/09/Village-Full-Lockup-Gold-transparent-768x262.png 768w, 
                               https://www.village-bali.com/wp-content/uploads/2022/09/Village-Full-Lockup-Gold-transparent-1536x523.png 1536w, 
                               https://www.village-bali.com/wp-content/uploads/2022/09/Village-Full-Lockup-Gold-transparent-500x170.png 500w, 
                               https://www.village-bali.com/wp-content/uploads/2022/09/Village-Full-Lockup-Gold-transparent-800x273.png 800w, 
                               https://www.village-bali.com/wp-content/uploads/2022/09/Village-Full-Lockup-Gold-transparent-1280x436.png 1280w">
              </div>
          </div>
          <div class="grid grid-cols-2 gap-4 mt-8">
              <a href="https://unsplash.com/photos/temple-beside-body-of-water-and-trees-1kdIG_258bU">
                  <img class="w-full rounded-lg" src="/img/indonesia2.jpg" alt="office content 1">
              </a>
              <a href="https://unsplash.com/photos/woman-in-between-on-concrete-landmarks-near-white-clouds-lh6cxuDOS8s">
                  <img class="mt-4 w-full lg:mt-10 rounded-lg" src="/img/indonesia1.jpg" alt="office content 2">
              </a>
          </div>
      </div>
      <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">    

          <div class="grid grid-cols-2 gap-4 mt-8 lg:col-start-1">
              <a href="https://unsplash.com/photos/round-white-ceramic-table-ZAVHbpOn4Jk">
                  <img class="w-full rounded-lg" src="/img/room2.jpg" alt="office content 1">
              </a>
              <a href="https://unsplash.com/photos/planters-with-plant-near-area-rug-inside-room-b37mDyPzdJM">
                  <img class="mt-4 w-full lg:mt-10 rounded-lg" src="/img/room1.jpg" alt="office content 2">
              </a>
          </div>
          <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400 lg:col-start-2">
              <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Village Bali</h2>
              <p class="mb-4">Villa Bali adalah tempat sempurna untuk menikmati kemewahan dan ketenangan pulau tropis. Dengan kolam renang pribadi dan kamar tidur elegan, villa ini menawarkan kenyamanan maksimal dan pemandangan menakjubkan. </p>
              <p>Nikmati kemewahan dan ketenangan di Villa Bali dengan kolam renang pribadi dan layanan spa eksklusif. Dengan layanan concierge 24 jam dan akses mudah ke pantai, villa ini adalah pilihan sempurna untuk liburan tak terlupakan. Pesan sekarang dan rasakan sendiri keindahan dan kenyamanan Villa Bali!</p>
              <div class="text-center mt-6 flex flex-col items-center">
                <img fetchpriority="high" decoding="async" width="360" height="227" 
                     src="https://www.village-bali.com/wp-content/uploads/2022/09/Village-Full-Lockup-Gold-transparent.png" 
                     alt="Village Bali Logo"
                     sizes="(max-width: 1920px) 100vw, 1920px" 
                     srcset="https://www.village-bali.com/wp-content/uploads/2022/09/Village-Full-Lockup-Gold-transparent.png 1920w, 
                             https://www.village-bali.com/wp-content/uploads/2022/09/Village-Full-Lockup-Gold-transparent-300x102.png 300w, 
                             https://www.village-bali.com/wp-content/uploads/2022/09/Village-Full-Lockup-Gold-transparent-1024x349.png 1024w, 
                             https://www.village-bali.com/wp-content/uploads/2022/09/Village-Full-Lockup-Gold-transparent-768x262.png 768w, 
                             https://www.village-bali.com/wp-content/uploads/2022/09/Village-Full-Lockup-Gold-transparent-1536x523.png 1536w, 
                             https://www.village-bali.com/wp-content/uploads/2022/09/Village-Full-Lockup-Gold-transparent-500x170.png 500w, 
                             https://www.village-bali.com/wp-content/uploads/2022/09/Village-Full-Lockup-Gold-transparent-800x273.png 800w, 
                             https://www.village-bali.com/wp-content/uploads/2022/09/Village-Full-Lockup-Gold-transparent-1280x436.png 1280w">
            </div>
          </div>
      </div>
  </section>
  
    {{-- rooms --}}
    <section id="rooms" >
    <div class=" text-center py-16">
      <h2 class="text-2xl font-bold mb-8">OUR ROOMS</h2>
      <div class="flex justify-between space-x-6">
          <div class="room group flex-1 mx-2">
              <div class="overflow-hidden rounded-lg">
                  <img src="/img/kamar1.jpg" alt="Deluxe Queen room" class="w-full h-auto transition-transform duration-300 group-hover:scale-105">
              </div>
              <h3 class="text-lg mt-4 text-gray-600">Deluxe Queen room</h3>
              <p class="text-sm text-gray-500 mt-2">This double room has a minibar, lounge chair, private garden and air conditioning.</p>
          </div>
  
          <div class="room group flex-1 mx-2">
              <div class="overflow-hidden rounded-lg">
                  <img src="/img/kamar2.jpg" alt="Superior King private" class="w-full h-auto transition-transform duration-300 group-hover:scale-105">
              </div>
              <h3 class="text-lg mt-4 text-gray-600">Superior King private</h3>
              <p class="text-sm text-gray-500 mt-2">This double room has a minibar, private entrance and air conditioning.</p>
          </div>
  
          <div class="room group flex-1 mx-2">
              <div class="overflow-hidden rounded-lg">
                  <img src="/img/kamar3.jpg" alt="King Deluxe or Twin Room with bathtub" class="w-full h-auto transition-transform duration-300 group-hover:scale-105">
              </div>
              <h3 class="text-lg mt-4 text-gray-600">King Deluxe or Twin Room with bathtub</h3>
              <p class="text-sm text-gray-500 mt-2">This twin/double room features air conditioning, private entrance and minibar.</p>
          </div>
      </div>
      <div class="flex justify-center py-8">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-4xl">
            <form class="grid grid-cols-4 gap-4">
                <div>
                    <label for="checkin" class="block text-gray-700">Check in:</label>
                    <input type="date" id="checkin" name="checkin" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="hh/bb/tttt">
                </div>
                <div>
                    <label for="checkout" class="block text-gray-700">Check out:</label>
                    <input type="date" id="checkout" name="checkout" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="hh/bb/tttt">
                </div>
                <div>
                    <label for="promo" class="block text-gray-700">Promo code:</label>
                    <input type="text" id="promo" name="promo" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Promo code">
                </div>
                <div class="flex items-end">
                    <button type="submit" class="w-full bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        BOOK NOW
                    </button>
                </div>
            </form>
        </div>
    </div>
  </div>
</section>

    {{-- services --}}
    <section id="services" class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="max-w-screen-md mb-8 lg:mb-16 text-center mx-auto">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our Services</h2>
            </div>            
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 py-8">
              <div class="group flex flex-col items-center justify-center w-60 h-60 p-6 bg-white rounded-lg shadow-md hover:bg-gray-100 transition duration-300">
                <svg width="34" height="23" viewBox="0 0 34 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M22.6487 0.155273C22.3994 0.155273 21.6807 0.454046 21.6807 0.454046L14.2885 3.86859C13.3027 4.22427 12.9133 5.65919 13.5052 6.37665L15.6636 9.23837L6.82946 13.3622L11.2755 16.4109L16.843 13.3622L22.4061 16.4109L24.6358 14.3744L17.9601 6.24454L23.65 3.13487C24.825 2.59423 24.6358 1.70401 24.6358 1.16338C24.6269 0.736559 23.8347 0.155273 22.6487 0.155273ZM27.4129 6.25267C26.9014 6.25227 26.3948 6.3439 25.922 6.52233C25.4492 6.70076 25.0196 6.96249 24.6575 7.29258C24.2955 7.62268 24.0082 8.01466 23.8121 8.44617C23.6159 8.87767 23.5147 9.34024 23.5143 9.80746C23.5138 10.2747 23.6142 10.7374 23.8095 11.1692C24.0049 11.601 24.2914 11.9935 24.6528 12.3241C25.0142 12.6548 25.4434 12.9172 25.9158 13.0963C26.3883 13.2755 26.8947 13.3679 27.4062 13.3683C28.4393 13.3691 29.4304 12.9951 30.1616 12.3284C30.8927 11.6618 31.304 10.7572 31.3048 9.81355C31.3057 8.86996 30.8962 7.96469 30.1663 7.29689C29.4364 6.6291 28.446 6.25348 27.4129 6.25267ZM5.71239 16.415L0.149292 19.4637V22.5124L5.71239 19.4637L11.2755 22.5124L16.843 19.4637L22.4061 22.5124L26.8521 19.4637L33.5279 22.5124V19.4637L26.8521 16.415L22.4061 19.4637L16.843 16.415L11.2755 19.4637L5.71239 16.415Z" fill="#7C6A46"/>
                  </svg>                  
                  <p class="text-brown-600 group-hover:text-brown-800 text-center">Kolam renang</p>
              </div>
              <div class="group flex flex-col items-center justify-center w-60 h-60 p-6 bg-white rounded-lg shadow-md hover:bg-gray-100 transition duration-300">
                <svg width="35" height="23" viewBox="0 0 35 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.23271 15.0819L6.209 12.2544C7.62486 10.9612 9.28694 9.93674 11.1952 9.18098C13.1035 8.42522 15.1611 8.0469 17.3679 8.04603C19.5757 8.04603 21.6337 8.4296 23.542 9.19676C25.4503 9.96392 27.1119 11.0051 28.5268 12.3202L25.5031 15.0819C24.4472 14.1175 23.2233 13.3613 21.8315 12.8134C20.4396 12.2654 18.9518 11.9914 17.3679 11.9914C15.7841 11.9914 14.2962 12.2654 12.9043 12.8134C11.5125 13.3613 10.2886 14.1175 9.23271 15.0819ZM3.1133 9.49266L0.0895996 6.7309C2.29738 4.67054 4.87713 3.05951 7.82884 1.89781C10.7806 0.73612 13.9602 0.155273 17.3679 0.155273C20.7756 0.155273 23.9553 0.73612 26.907 1.89781C29.8587 3.05951 32.4384 4.67054 34.6462 6.7309L31.6225 9.49266C29.7747 7.80492 27.6327 6.4841 25.1964 5.53019C22.7602 4.57629 20.1507 4.09977 17.3679 4.10065C14.5842 4.10065 11.9742 4.5776 9.53796 5.53151C7.10172 6.48541 4.96016 7.8058 3.1133 9.49266ZM17.3679 22.5124L22.4434 17.8437C21.7955 17.2519 21.0396 16.7859 20.1756 16.4457C19.3117 16.1056 18.3758 15.9359 17.3679 15.9368C16.36 15.9368 15.4241 16.1069 14.5602 16.447C13.6963 16.7872 12.9403 17.2528 12.2924 17.8437L17.3679 22.5124Z" fill="#7C6A46"/>
                  </svg>                  
                  <p class="text-brown-600 group-hover:text-brown-800 text-center">Wifi</p>
              </div>
              <div class="group flex flex-col items-center justify-center w-60 h-60 p-6 bg-white rounded-lg shadow-md hover:bg-gray-100 transition duration-300">
                <svg width="26" height="23" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.96587 7.16835L5.63578 6.54471C6.38299 5.86223 7.61976 5.86223 8.39273 6.59177L8.4185 6.62708C9.04976 7.21542 9.88716 7.49783 10.8018 7.5802C12.0515 7.6861 13.2625 8.29798 14.0612 9.40407C14.9373 10.6749 14.9244 12.3693 14.0097 13.6284C13.6647 14.1267 13.2008 14.5473 12.6526 14.8586C12.1045 15.17 11.4863 15.364 10.8444 15.4263C10.2025 15.4885 9.55351 15.4174 8.946 15.2181C8.33849 15.0188 7.7882 14.6966 7.33633 14.2756C6.61489 13.6284 6.20263 12.7929 6.09957 11.9222C5.9965 11.0632 5.6229 10.2513 4.96587 9.65117C4.21866 8.98046 4.21866 7.85083 4.96587 7.16835ZM10.3767 16.629C8.8694 16.629 7.46516 16.0994 6.42164 15.1228C5.51984 14.2756 4.95299 13.2165 4.81127 12.0634C4.77262 11.7104 4.65668 11.2515 4.34749 10.8279C3.57451 11.8045 3.11072 12.9812 3.11072 14.2756C3.11072 16.2053 4.14136 17.9115 5.72596 18.9823H22.4352V17.8056C22.4352 13.5696 19.3561 9.98065 15.1434 8.80396C16.29 10.4513 16.2642 12.6517 15.0919 14.2756C14.0612 15.7464 12.2834 16.629 10.3767 16.629ZM16.9985 6.69768H18.6347C19.7555 6.69768 20.7346 7.41546 20.7346 8.69805V9.5688H22.345V8.39211C22.345 6.62708 20.6315 5.28565 18.6347 5.28565H16.9985C15.9293 5.28565 15.0146 4.32076 15.0146 3.33234C15.0146 2.34392 15.9293 1.61437 16.9985 1.61437V0.155273C15.0146 0.155273 13.4171 1.61437 13.4171 3.42648C13.4171 5.23858 15.0146 6.69768 16.9985 6.69768ZM3.75487 6.68591C3.83217 6.56824 3.93523 6.45057 4.05118 6.3329L4.72109 5.72102C4.83704 5.61512 4.96587 5.53275 5.0947 5.45038L3.2782 3.76772C3.45856 3.45001 3.39415 3.03817 3.11072 2.76753C2.92624 2.6035 2.67894 2.51172 2.42149 2.51172C2.16403 2.51172 1.91673 2.6035 1.73225 2.76753C1.55189 2.93226 1.46171 3.1323 1.44882 3.34411C1.21693 3.35587 0.997919 3.43824 0.817558 3.60298C0.443952 3.94422 0.443952 4.50903 0.817558 4.86204C1.11387 5.12091 1.55189 5.17975 1.91261 5.01501L3.75487 6.68591ZM21.6493 2.96757C22.3063 2.36745 22.7186 1.55554 22.7186 0.649484H21.1082C21.1082 1.62614 20.2064 2.44982 19.1371 2.44982V3.90892C21.5333 3.90892 23.4143 5.69749 23.4143 7.88614V10.7455H25.0117V7.88614C25.0182 6.85972 24.7056 5.8527 24.1104 4.98205C23.5153 4.1114 22.6618 3.41286 21.6493 2.96757ZM4.39902 22.5124H22.4352C23.8652 22.5124 25.0117 21.4652 25.0117 20.159H1.82243C1.82243 20.7832 2.09389 21.3818 2.57709 21.8231C3.0603 22.2645 3.71566 22.5124 4.39902 22.5124Z" fill="#7C6A46"/>
                  </svg>                  
                  <p class="text-brown-600 group-hover:text-brown-800 text-center">Makan pagi</p>
              </div>
              <div class="group flex flex-col items-center justify-center w-60 h-60 p-6 bg-white rounded-lg shadow-md hover:bg-gray-100 transition duration-300">
                <svg width="41" height="23" viewBox="0 0 41 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.2737 2.48993C7.2737 1.4594 8.18524 0.626831 9.3135 0.626831H10.3334C11.4617 0.626831 12.3732 1.4594 12.3732 2.48993V21.1209C12.3732 22.1514 11.4617 22.984 10.3334 22.984H9.3135C8.18524 22.984 7.2737 22.1514 7.2737 21.1209V19.2578H4.214C3.08574 19.2578 2.1742 18.4252 2.1742 17.3947V13.6685C1.04594 13.6685 0.134399 12.8359 0.134399 11.8054C0.134399 10.7749 1.04594 9.9423 2.1742 9.9423V6.21611C2.1742 5.18559 3.08574 4.35302 4.214 4.35302H7.2737V2.48993ZM33.7911 2.48993V4.35302H36.8508C37.9791 4.35302 38.8906 5.18559 38.8906 6.21611V9.9423C40.0189 9.9423 40.9304 10.7749 40.9304 11.8054C40.9304 12.8359 40.0189 13.6685 38.8906 13.6685V17.3947C38.8906 18.4252 37.9791 19.2578 36.8508 19.2578H33.7911V21.1209C33.7911 22.1514 32.8796 22.984 31.7513 22.984H30.7314C29.6031 22.984 28.6916 22.1514 28.6916 21.1209V2.48993C28.6916 1.4594 29.6031 0.626831 30.7314 0.626831H31.7513C32.8796 0.626831 33.7911 1.4594 33.7911 2.48993ZM26.6518 9.9423V13.6685H14.413V9.9423H26.6518Z" fill="#7C6A46"/>
                  </svg>                  
                  <p class="text-brown-600 group-hover:text-brown-800 text-center">Gym</p>
              </div>
              <div class="group flex flex-col items-center justify-center w-60 h-60 p-6 bg-white rounded-lg shadow-md hover:bg-gray-100 transition duration-300">
                <svg width="41" height="23" viewBox="0 0 41 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.2737 2.48993C7.2737 1.4594 8.18524 0.626831 9.3135 0.626831H10.3334C11.4617 0.626831 12.3732 1.4594 12.3732 2.48993V21.1209C12.3732 22.1514 11.4617 22.984 10.3334 22.984H9.3135C8.18524 22.984 7.2737 22.1514 7.2737 21.1209V19.2578H4.214C3.08574 19.2578 2.1742 18.4252 2.1742 17.3947V13.6685C1.04594 13.6685 0.134399 12.8359 0.134399 11.8054C0.134399 10.7749 1.04594 9.9423 2.1742 9.9423V6.21611C2.1742 5.18559 3.08574 4.35302 4.214 4.35302H7.2737V2.48993ZM33.7911 2.48993V4.35302H36.8508C37.9791 4.35302 38.8906 5.18559 38.8906 6.21611V9.9423C40.0189 9.9423 40.9304 10.7749 40.9304 11.8054C40.9304 12.8359 40.0189 13.6685 38.8906 13.6685V17.3947C38.8906 18.4252 37.9791 19.2578 36.8508 19.2578H33.7911V21.1209C33.7911 22.1514 32.8796 22.984 31.7513 22.984H30.7314C29.6031 22.984 28.6916 22.1514 28.6916 21.1209V2.48993C28.6916 1.4594 29.6031 0.626831 30.7314 0.626831H31.7513C32.8796 0.626831 33.7911 1.4594 33.7911 2.48993ZM26.6518 9.9423V13.6685H14.413V9.9423H26.6518Z" fill="#7C6A46"/>
                  </svg>                  
                  <p class="text-brown-600 group-hover:text-brown-800 text-center">Game center</p>
              </div>
              <div class="group flex flex-col items-center justify-center w-60 h-60 p-6 bg-white rounded-lg shadow-md hover:bg-gray-100 transition duration-300">
                <svg width="41" height="23" viewBox="0 0 41 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.2737 2.48993C7.2737 1.4594 8.18524 0.626831 9.3135 0.626831H10.3334C11.4617 0.626831 12.3732 1.4594 12.3732 2.48993V21.1209C12.3732 22.1514 11.4617 22.984 10.3334 22.984H9.3135C8.18524 22.984 7.2737 22.1514 7.2737 21.1209V19.2578H4.214C3.08574 19.2578 2.1742 18.4252 2.1742 17.3947V13.6685C1.04594 13.6685 0.134399 12.8359 0.134399 11.8054C0.134399 10.7749 1.04594 9.9423 2.1742 9.9423V6.21611C2.1742 5.18559 3.08574 4.35302 4.214 4.35302H7.2737V2.48993ZM33.7911 2.48993V4.35302H36.8508C37.9791 4.35302 38.8906 5.18559 38.8906 6.21611V9.9423C40.0189 9.9423 40.9304 10.7749 40.9304 11.8054C40.9304 12.8359 40.0189 13.6685 38.8906 13.6685V17.3947C38.8906 18.4252 37.9791 19.2578 36.8508 19.2578H33.7911V21.1209C33.7911 22.1514 32.8796 22.984 31.7513 22.984H30.7314C29.6031 22.984 28.6916 22.1514 28.6916 21.1209V2.48993C28.6916 1.4594 29.6031 0.626831 30.7314 0.626831H31.7513C32.8796 0.626831 33.7911 1.4594 33.7911 2.48993ZM26.6518 9.9423V13.6685H14.413V9.9423H26.6518Z" fill="#7C6A46"/>
                  </svg>                  
                  <p class="text-brown-600 group-hover:text-brown-800 text-center">24/7 Light</p>
              </div>
              <div class="group flex flex-col items-center justify-center w-60 h-60 p-6 bg-white rounded-lg shadow-md hover:bg-gray-100 transition duration-300">
                <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.88779 16.8293C9.47884 18.2825 12.0735 18.2825 13.6645 16.8293C15.2556 15.3761 15.2556 13.0062 13.6645 11.553L7.88779 16.8293ZM18.1194 0.788034L3.43287 0.776855C2.07436 0.776855 0.985107 1.77175 0.985107 3.01257V20.8983C0.985107 22.1391 2.07436 23.134 3.43287 23.134H18.1194C19.4779 23.134 20.5672 22.1391 20.5672 20.8983V3.01257C20.5672 1.77175 19.4779 0.788034 18.1194 0.788034ZM9.55227 4.13043C10.2254 4.13043 10.7762 4.63346 10.7762 5.24828C10.7762 5.8631 10.2254 6.36614 9.55227 6.36614C8.87914 6.36614 8.32839 5.8631 8.32839 5.24828C8.32839 4.63346 8.87914 4.13043 9.55227 4.13043ZM5.88063 4.13043C6.55376 4.13043 7.10451 4.63346 7.10451 5.24828C7.10451 5.8631 6.55376 6.36614 5.88063 6.36614C5.2075 6.36614 4.65675 5.8631 4.65675 5.24828C4.65675 4.63346 5.2075 4.13043 5.88063 4.13043ZM10.7762 19.7804C7.39824 19.7804 4.65675 17.2764 4.65675 14.1911C4.65675 11.1059 7.39824 8.60185 10.7762 8.60185C14.1541 8.60185 16.8956 11.1059 16.8956 14.1911C16.8956 17.2764 14.1541 19.7804 10.7762 19.7804Z" fill="#7C6A46"/>
                  </svg>                  
                  <p class="text-brown-600 group-hover:text-brown-800 text-center">Laundry</p>
              </div>
              <div class="group flex flex-col items-center justify-center w-60 h-60 p-6 bg-white rounded-lg shadow-md hover:bg-gray-100 transition duration-300">
                <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18.5442 16.7651C17.3452 17.5551 15.8829 17.9401 14.4074 17.8541H10.9751V23.134H7.54285V8.28423H14.6242C16.0334 8.21599 17.4212 8.62093 18.5262 9.42271C19.0417 9.87865 19.4403 10.4332 19.6933 11.0466C19.9463 11.6599 20.0474 12.3169 19.9894 12.9702C20.0823 13.6615 20.0004 14.3632 19.7498 15.0211C19.4993 15.679 19.0868 16.2756 18.5442 16.7651ZM15.8345 11.4192C15.3125 11.0696 14.6746 10.8948 14.0281 10.9242H10.9751V15.2966H14.0281C14.6806 15.3282 15.3233 15.1404 15.8345 14.7686C16.0631 14.5504 16.2391 14.2908 16.3511 14.0066C16.4631 13.7224 16.5087 13.4199 16.4849 13.1187C16.5269 12.8088 16.4901 12.4942 16.3773 12.1994C16.2645 11.9047 16.0788 11.6377 15.8345 11.4192ZM25.6075 6.98075C25.7064 6.78362 25.7164 6.55884 25.6353 6.35504C25.5541 6.15124 25.3884 5.98481 25.174 5.89177L13.1248 0.776855L1.00344 5.89177C0.895505 5.93727 0.798436 6.00175 0.717777 6.08152C0.637119 6.16128 0.574453 6.25478 0.533355 6.35667C0.492257 6.45855 0.473533 6.56684 0.478253 6.67533C0.482972 6.78383 0.511042 6.89042 0.56086 6.989C0.610678 7.08759 0.681268 7.17625 0.768601 7.24992C0.855933 7.32359 0.958297 7.38083 1.06985 7.41837C1.1814 7.45591 1.29995 7.47301 1.41874 7.4687C1.53753 7.46439 1.65422 7.43875 1.76216 7.39325L13.1248 2.59183L24.4875 7.37675C24.7033 7.46711 24.9494 7.47623 25.1726 7.40212C25.3957 7.32801 25.5779 7.17664 25.6798 6.98075H25.6075Z" fill="#7C6A46"/>
                  </svg>
                  <p class="text-brown-600 group-hover:text-brown-800 text-center">Parking space</p>
              </div>
          </div>
          
        </div>
    </section>

    {{-- Destination --}}
    <section id="destination" class="bg-white text-gray-800">
      <div class="text-center mb-8">
        <h2 class="text-sm uppercase tracking-widest text-gray-500">Destination</h2>
        <h1 class="text-4xl font-bold mt-2">Explore Uluwatu</h1>
      </div>
      <div class="container mx-auto py-16 px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
          <div class="text-left">
            <p class="mt-4 text-lg text-gray-600">
              Jelajahi keindahan Uluwatu, Bali, destinasi yang menawarkan kombinasi sempurna antara pesona alam, budaya, dan petualangan. Dari tebing-tebing dramatis yang menjulang di atas Samudra Hindia, pura suci Pura Luhur Uluwatu yang kaya akan sejarah, hingga pertunjukan tari Kecak yang ikonik diiringi matahari terbenam yang memukau, Uluwatu adalah tempat yang menawarkan pengalaman tak terlupakan. Nikmati juga pantai-pantai eksotis seperti Pantai Padang-Padang dan Pantai Suluban yang menjadi surga bagi para peselancar, menjadikannya destinasi wajib bagi pencinta alam, budaya, dan petualangan di Bali.
            </p>
          </div>

          <div class="grid grid-cols-2 gap-4">
            <div class="rounded-lg overflow-hidden">
              <img src="/img/uluwatu1.jpg" alt="Uluwatu 1" class="w-full h-auto object-cover transition-transform duration-300 ease-in-out hover:scale-105">
            </div>
            <div class="rounded-lg overflow-hidden">
              <img src="/img/uluwatu2.jpg" alt="Uluwatu 2" class="w-full h-auto object-cover transition-transform duration-300 ease-in-out hover:scale-105">
            </div>
          </div>
        </div>
      </div>
    </section>
  

</x-layout>
