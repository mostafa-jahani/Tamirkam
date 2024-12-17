<header x-data="{ navShow: false }" @scroll.window="navShow = window.scrollY > 100 ? true : false"
        class="container w-full">

    <nav class="border-gray-200 fixed w-full transition-all duration-500"
         :class="{'bg-white shadow-lg': navShow}">
        <div class="container flex flex-wrap items-center justify-between mx-auto p-4" x-data="{ navMobile: false }">

            <span class="flex items-center gap-3">
                <a href="#" class="flex items-center"><img src="{{ asset('images/logo/logo.png') }}" class="h-8" alt="Logo"/></a>
                <a href="#"><img src="{{ asset('images/logo/logo-text.png') }}" class="w-auto h-8" alt="logo-text_logo"></a>
            </span>
            <button type="button" @click="navMobile = !navMobile"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="md:block w-full md:w-auto bg-slate-50 md:bg-transparent shadow-2xl md:shadow-none rounded-lg"
                 :class="! navMobile ? 'hidden' : ''">
                <ul class="flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                    <li>
                        <a href="#hero-section" @click="navMobile = false"
                           class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 border-b-4"
                           aria-current="page">خانه</a>
                    </li>
                    <li>
                        <a href="#about-section" @click="navMobile = false"
                           class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">درباره
                            من</a>
                    </li>
                    <li>
                        <a href="#services-section" @click="navMobile = false"
                           class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">خدمات</a>
                    </li>
                    <li>
                        <a href="#contact-us-section" @click="navMobile = false"
                           class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">درخواست
                            خدمات</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>


<script>

</script>
