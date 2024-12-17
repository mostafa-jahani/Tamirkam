
<section id="hero-section" style="background: url('/images/hero/hero-bg.png') top center no-repeat; background-size: cover">
    <div class="container mx-auto px-10 py-4">
        <div class="flex flex-col lg:flex-row items-center gap-20 mt-24 lg:mt-0 h-full lg:h-screen">

            {{--right section--}}
            <div class="space-y-20">
                <div class="space-y-4">
                    <div class="iran-yekan text-[32px] font-bold text-sky-800">سلام👋، من افشار هستم، تعمیرکار لوازم خانگی</div>
                    <div class="text-lg text-sky-700 text-justify">تعمیر انواع لوازم خانگی از قبیل ماشین لباسشویی، ماشین ظرفشویی، اجاق گاز، کولر آبی، مایکروفر، دستگاه تصفیه آب و ...</div>
                    <div class="flex items-center gap-4">
                        <a href="#"><img src="{{ asset('images/logo/instagram.png') }}" class="w-8 h-8" alt="instagram_logo"></a>
                        <a href="#"><img src="{{ asset('images/logo/telegram.png') }}" class="w-8 h-8" alt="telegram_logo"></a>
                        <a href="#"><img src="{{ asset('images/logo/whatsapp.png') }}" class="w-8 h-8" alt="whatsapp_logo"></a>
                        <a href="#"><img src="{{ asset('images/logo/eita.png') }}" class="w-8 h-8" alt="eita_logo"></a>
                        <a href="#"><img src="{{ asset('images/logo/rubika.png') }}" class="w-8 h-8" alt="rubika_logo"></a>
                    </div>
                </div>
                <div><a href="#contact-us-section" class="bg-amber-900/80 text-white rounded-lg px-4 py-3 transition-all ease-in-out duration-300 hover:bg-amber-800/80">درخواست خدمات</a></div>
            </div>

            {{--left section--}}
            <div class="flex justify-center">
                <img src="{{ asset('images/hero/hero-img.png') }}" alt="profile" class="w-full h-full">
            </div>

        </div>
    </div>
</section>
