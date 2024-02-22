<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/output.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>xerograv.</title>
</head>
<body>
  <header class="text-gray-400 bg-gray-900 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
        
        <!--現在TailwindCSSのロゴが入っているが、アプリのロゴを入れたい　App_store_1024_1x.png　。-->
        <img src="{{ asset('storage/AppIcon@1024.png') }}" alt="App Logo" class="w-10 h-10 rounded-full">
        <!--<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">-->
        <!--  <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>-->
        <!--</svg>-->
        <span class="ml-3 text-xl">xerograv.</span>
      </a>
       <!--いずれはサイトを拡充してリンクを貼る。-->
      <!--<nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">-->
      <!--  <a class="mr-5 hover:text-white">First Link</a>-->
      <!--  <a class="mr-5 hover:text-white">Second Link</a>-->
      <!--  <a class="mr-5 hover:text-white">Third Link</a>-->
      <!--  <a class="mr-5 hover:text-white">Fourth Link</a>-->
      <!--</nav>-->
    </div>
  </header>

  <main>
    
    <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-center rounded" alt="logo" src="{{asset('storage/Screenshot 2024-02-13 at 12.54.27.png')}}">
          </div>
          <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">
                Life with Ocean
                </h1>
            <p class="mb-8 leading-relaxed">
                
                巨大なポテンシャルを持つ海。しかし、科学的な解明は始まったばかり。海にもぐってきた経験から、その奇跡的なバランスで成り立っている美しい海・地球への敬意を込めて、システムを開発しました。<br>
                海を愛するダイバーとダイビングチームのためのテックです。「宇宙管制塔」にヒントを得ています。
                ダイバーの特定のポイントでの位置情報をリアルタイムで共有することにより、万が一の漂流事故にも役立ちます。ボート上の船長・スタッフだけではなく、家族・友人も安心です。</p>
                
          </div>
        </div>
      </section>
            
      <section class="text-gray-400 body-font bg-gray-900">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap w-full mb-20">
            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
              <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white">ダイバーのための"管制塔"に、<br>巨大な施設は不要です。</h1>
              <div class="h-1 w-20 bg-blue-500 rounded"></div>
            </div>
            <p class="lg:w-1/2 w-full leading-relaxed text-gray-400 text-opacity-90">ダイバーの漂流事故を防ぐために選定したのは、iPhoneとApple Watch Ultra。xerograv for Divingをインストールするだけで、Ultraはダイバーのウェアラブルデバイスとして機能します。船長・ダイビングチーム・家族や友人は、iPhoneでダイバーの位置情報を把握することができます。</p>
          </div>
          <div class="flex flex-wrap -m-4">
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                <div class="relative overflow-hidden" style="width: 260px; height: 520px;"> <!-- 透過PNGのサイズに合わせて調整 -->
                  <img src="{{ asset('storage/xerogra_iPhone_top.jpeg') }}" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 max-w-none rounded-3xl" style="width: auto; height: 92%;" alt="iPhone Screenshot"> <!-- スクリーンショット画像を調整 -->
                  <img src="{{ asset('storage/Color=Black Titanium.png') }}" class="relative w-full h-full" alt="iPhone"> <!-- iPhoneの透過PNG画像 -->
                </div>

                <!--<img class="h- 60 rounded w-full object-cover object-center mb-6" src="{{asset('storage/xerogra_iPhone_top.jpeg')}}" alt="content">-->
                <h3 class="tracking-widest text-blue-400 text-xs font-medium title-font">DiveLogs</h3>
                <h2 class="text-lg text-white font-medium title-font mb-4">世界のダイバーのログ</h2>
                <p class="leading-relaxed text-base">美しい写真やダイバーの情報をみながら、ダイビング計画を立案します。</p>
              </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                <div class="relative overflow-hidden" style="width: 260px; height: 520px;"> <!-- 透過PNGのサイズに合わせて調整 -->
                  <img src="{{ asset('storage/xerograv_iPhone_map.jpeg') }}" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 max-w-none rounded-3xl" style="width: auto; height: 92%;" alt="iPhone Screenshot"> <!-- スクリーンショット画像を調整 -->
                  <img src="{{ asset('storage/Color=Black Titanium.png') }}" class="relative w-full h-full" alt="iPhone"> <!-- iPhoneの透過PNG画像 -->
                </div>
                
                <!--<img class="h- 60 rounded w-full object-cover object-center mb-6" src="{{asset('storage/xerograv_iPhone_map.jpeg')}}" alt="content">-->
                <h3 class="tracking-widest text-blue-400 text-xs font-medium title-font">Map</h3>
                <h2 class="text-lg text-white font-medium title-font mb-4">ダイバーのリアルタイム位置情報</h2>
                <p class="leading-relaxed text-base">ダイバーの特定のポイントでの位置情報をリアルタイムで表示します。万が一の漂流の際にも早い救出が可能になります。</p>
              </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                <div class="relative overflow-hidden" style="width: 260px; height: 400px;"> <!-- 透過PNGのサイズに合わせて調整 -->
                  <img src="{{ asset('storage/Simulator Screenshot - Apple Watch Series 9 (45mm) - 2024-01-29 at 20.37.59.png') }}" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 rounded-3xl" style="object-fit: contain; width: 67%; height: 67%;" alt="Watch Screenshot">
                  <img src="{{ asset('storage/Apple Watch Ultra - Midnight Ocean Band.png') }}" class="relative w-full h-full" alt="Apple Watch"> <!-- Apple Watchの透過PNG画像 -->
                </div>
                
                <!--<img class="h- 60 rounded w-full object-cover object-center mb-6" src="{{asset('storage/Simulator Screenshot - Apple Watch Series 9 (45mm) - 2024-01-29 at 20.37.59.png')}}" alt="content">-->
                <h3 class="tracking-widest text-blue-400 text-xs font-medium title-font">Map</h3>
                <h2 class="text-lg text-white font-medium title-font mb-4">ダイバーは自分の位置を記録</h2>
                <p class="leading-relaxed text-base">ダイバーは、簡単な操作で情報を記録・送信できます。</p>
              </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                 <div class="relative overflow-hidden" style="width: 260px; height: 400px;"> <!-- 透過PNGのサイズに合わせて調整 -->
                  <img src="{{ asset('storage/Simulator Screenshot - Apple Watch Ultra 2 (49mm) - 2023-11-06 at 15.10.36.png') }}" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 rounded-3xl" style="object-fit: contain; width: 67%; height: 67%;" alt="Watch Screenshot">
                  <img src="{{ asset('storage/Apple Watch Ultra - Midnight Ocean Band.png') }}" class="relative w-full h-full" alt="Apple Watch"> <!-- Apple Watchの透過PNG画像 -->
                </div>
                <!--<img class="h- 60 rounded w-full object-cover object-center mb-6" src="{{asset('storage/Simulator Screenshot - Apple Watch Ultra 2 (49mm) - 2023-11-06 at 15.10.36.png')}}" alt="content">-->
                <h3 class="tracking-widest text-blue-400 text-xs font-medium title-font">Submerged</h3>
                <h2 class="text-lg text-white font-medium title-font mb-4">水中ではダイブコンピューターに</h2>
                <p class="leading-relaxed text-base">水中に入ると、自動的にダイビングコンピューターモードに切り替わります。ダイバーを守るKPIが計測・表示されます。</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-col">
          <div class="lg:w-4/6 mx-auto">
            <!--<div class="rounded-lg h-64 overflow-hidden">-->
            <!--  <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1200x500">-->
            <!--</div>-->
            <div class="flex flex-col sm:flex-row mt-10">
              <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-800 text-gray-600 relative overflow-hidden">
                   <img src="{{ asset('storage/ProfilePhotoJPG.JPG') }}" alt="ProfilePhoto" class="w-20 h-20 rounded-full" style="object-fit: contain; width: 140%; height: 140%;" >
                  <!--<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">-->
                  <!--  <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>-->
                  <!--  <circle cx="12" cy="7" r="4"></circle>-->
                  <!--</svg>-->
                </div>
                <div class="flex flex-col items-center text-center justify-center">
                  <h2 class="font-medium title-font mt-4 text-white text-lg">Founder/CEO<br>Chika Iwanaga<br>岩永　智佳</h2>
                  <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                  <p class="text-base text-gray-400">ダイバー歴20年<br>国際政治経済学士・事業構想修士</p>
                </div>
              </div>
              <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-800 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                <p class="leading-relaxed text-lg mb-4">海を愛するダイバー<br>
                青山学院大学国際政治経済学部卒、事業構想大学院大学卒。<br>
                （株）ベネッセコーポレーション、（株）ベネッセホールディングス、ベルリッツ・ジャパン（株）など、教育大手企業で経営企画・マーケティング・ブランディング・営業・新規事業開発責任者を歴任。<br>    
                G's ACADEMY 東京DEV25期卒/ GGA 2023 Autumn 3位受賞。STATION Ai Catapult 4th Batch 採択。202403 株式会社 xerograv. 創設。<br>
                海洋が持つポテシャルに注目する投資家・団体・研究者・エンジニアの方と一緒に、新しい文化・マーケットを創出していきたいと考えています。水中・水面での通信技術や、スポーツウェルネス・医療、海洋生物研究のプロフェッショナルな方たちとの出会いを求めます。</p>
                <!--<a class="text-indigo-400 inline-flex items-center">Learn More-->
                <!--  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">-->
                <!--    <path d="M5 12h14M12 5l7 7-7 7"></path>-->
                <!--  </svg>-->
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      
      <section class="text-gray-400 bg-gray-900 body-font relative">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Contact Us</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base"> iPhone, Apple Watch Ultra用のアプリです。<br>
           事業・プロダクトに関心を持っていただける方は、ぜひご連絡ください。</p>
          </div>
          
           <!--Contact Formを作り、DB連携。Emailは正しい形式かと、Emeil, Email Confirmが正しいかをチェック。確認画面を出し、送信。cd-->
          <!--<div class="lg:w-1/2 md:w-2/3 mx-auto">-->
          <!--  <div class="flex flex-wrap -m-2">-->
          <!--    <div class="p-2 w-1/2">-->
          <!--      <div class="relative">-->
          <!--        <label for="name" class="leading-7 text-sm text-gray-400">Name</label>-->
          <!--        <input type="text" id="name" name="name" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">-->
          <!--      </div>-->
          <!--    </div>-->
          <!--    <div class="p-2 w-1/2">-->
          <!--      <div class="relative">-->
          <!--        <label for="email" class="leading-7 text-sm text-gray-400">Email</label>-->
          <!--        <input type="email" id="email" name="email" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">-->
          <!--      </div>-->
          <!--    </div>-->
          <!--    <div class="p-2 w-1/2">-->
          <!--      <div class="relative">-->
          <!--        <label for="email" class="leading-7 text-sm text-gray-400">Email(Confirm)</label>-->
          <!--        <input type="email" id="email" name="email" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">-->
          <!--      </div>-->
          <!--    </div>-->
          <!--    <div class="p-2 w-full">-->
          <!--      <div class="relative">-->
          <!--        <label for="message" class="leading-7 text-sm text-gray-400">Message</label>-->
          <!--        <textarea id="message" name="message" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 h-32 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--    <div class="p-2 w-full">-->
          <!--      <button class="flex mx-auto text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">Button</button>-->
          <!--    </div>-->
              
              
              <div class="p-2 w-full pt-8 mt-8 border-t border-gray-800 text-center">
               <a href="mailto:stellamaris.blue.i.001@gmail.com" class="text-blue-400">c.iwanaga-8@m.mpd.ac.jp</a>
                <p class="leading-normal my-5">Tokyo
                  <br>Japan
                </p>
                <!--<span class="inline-flex">-->
                <!--  <a class="text-gray-500">-->
                <!--    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">-->
                <!--      <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>-->
                <!--    </svg>-->
                <!--  </a>-->
                <!--  <a class="ml-4 text-gray-500">-->
                <!--    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">-->
                <!--      <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>-->
                <!--    </svg>-->
                <!--  </a>-->
                  <!--<a class="ml-4 text-gray-500">-->
                  <!--  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">-->
                  <!--    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>-->
                  <!--    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>-->
                  <!--  </svg>-->
                  <!--</a>-->
                  <!--<a class="ml-4 text-gray-500">-->
                  <!--  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">-->
                  <!--    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>-->
                  <!--  </svg>-->
                  <!--</a>-->
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>
    </min>
    
    <footer class="text-gray-400 bg-gray-900 body-font">
      <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
           <img src="{{ asset('storage/AppIcon@1024.png') }}" alt="App Logo" class="w-10 h-10 rounded-full">
          <!--<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">-->
          <!--  <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>-->
          <!--</svg>-->
          <span class="ml-3 text-xl">xerograv.</span>
        </a>
        <p class="text-sm text-gray-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">© 2023 Chika Iwanaga—
          <a href="https://twitter.com/ChikaBlue001" class="text-gray-500 ml-1" target="_blank" rel="noopener noreferrer">@ChikaBlue001</a>
        </p>
        <!--<span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">-->
        <!--  <a class="text-gray-400">-->
        <!--    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">-->
        <!--      <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>-->
        <!--    </svg>-->
        <!--  </a>-->
        <!--  <a class="ml-3 text-gray-400">-->
        <!--    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">-->
        <!--      <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>-->
        <!--    </svg>-->
        <!--  </a>-->
        <!--  <a class="ml-3 text-gray-400">-->
        <!--    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">-->
        <!--      <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>-->
        <!--      <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>-->
        <!--    </svg>-->
        <!--  </a>-->
        <!--  <a class="ml-3 text-gray-400">-->
        <!--    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">-->
        <!--      <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>-->
        <!--      <circle cx="4" cy="4" r="2" stroke="none"></circle>-->
        <!--    </svg>-->
        <!--  </a>-->
        <!--</span>-->
      </div>
    </footer>

</body>

</html>
