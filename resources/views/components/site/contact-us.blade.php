
<section class="bg-slate-50" id="contact-us-section">
    <div class="container mx-auto py-4 pt-12">
        <div class="flex flex-col lg:flex-row justify-center items-start gap-20 mb-12 p-8 lg:mt-0 h-full lg:h-screen">

            {{--right section--}}
            <div class="space-y-6 w-full lg:w-1/2">
                <div class="iran-yekan text-[32px] font-bold text-sky-800">درخواست خدمات</div>
                <div class="text-lg text-sky-700 leading-8 text-justify">در صورت درخواست هرگونه خدمات جهت تعمیرات لوازم خانگی خود می توانید شماره تماس و مشخصات خود را وارد نموده تا در اسرع وقت با شما تماس گرفته و جهت ارئه خدمات، هماهنگی لازم صورت پذیرد.</div>
            </div>

            {{--left section--}}
            <div class="w-full lg:w-1/2 h-full flex items-start justify-center">
                <div class="w-full flex flex-col gap-10">

                    {{--name--}}
                    <div class="w-full">

                        <div class="flex flex-col gap-2">
                            <label for="name" class="text-sky-800">نام شما</label>
                            <input type="text" name="name" class="w-full h-10 p-2.5 text-sm rounded-lg block bg-white text-sky-900 border border-gray-300 focus:outline-none focus:ring-1 focus:ring-sky-600 focus:border-sky-600">
                        </div>

                    </div>

                    {{--phone & mobile--}}
                    <div class="w-full flex items-center gap-4">

                        <div class="w-full flex flex-col gap-2">
                            <label for="phone" class="text-sky-800">شماره ثابت</label>
                            <input type="text" name="phone" class="w-full h-10 p-2.5 text-left text-sm rounded-lg block bg-white text-sky-900 border border-gray-300 focus:outline-none focus:ring-1 focus:ring-sky-600 focus:border-sky-600">
                        </div>

                        <div class="w-full flex flex-col gap-2">
                            <label for="mobile" class="text-sky-800">تلفن همراه</label>
                            <input type="text" name="mobile" class="w-full h-10 p-2.5 text-left text-sm rounded-lg block bg-white text-sky-900 border border-gray-300 focus:outline-none focus:ring-1 focus:ring-sky-600 focus:border-sky-600">
                        </div>

                    </div>

                    {{--address--}}
                    <div class="w-full">

                        <div class="flex flex-col gap-2">
                            <label for="address" class="text-sky-800">آدرس</label>
                            <input type="text" name="address" class="w-full h-10 p-2.5 text-sm rounded-lg block bg-white text-sky-900 border border-gray-300 focus:outline-none focus:ring-1 focus:ring-sky-600 focus:border-sky-600">
                        </div>

                    </div>

                    {{--description--}}
                    <div class="w-full">

                        <div class="flex flex-col gap-2">
                            <label for="description" class="text-sky-800">شرح درخواست</label>
                            <textarea type="text" name="description" cols="50" class="w-full h-44 p-2.5 text-sm rounded-lg block bg-white text-sky-900 border border-gray-300 focus:outline-none focus:ring-1 focus:ring-sky-600 focus:border-sky-600"></textarea>
                        </div>

                    </div>

                    {{--submit--}}
                    <div class="w-full">

                        <div class="flex flex-col gap-2">
                            <button type="submit" class="w-full h-10 py-2.5 rounded-lg focus:outline-none font-medium text-sm transition-all ease-in-out duration-300 text-white bg-blue-600 hover:bg-blue-800">ثبت درخواست</button>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>







{{--<div class="w-full h-screen overflow-auto bg-slate-50">--}}
{{--    <div class="container h-full mx-auto flex justify-between items-center gap-20 py-24">--}}

{{--        --}}{{--right section--}}
{{--        <div class="space-y-6 w-1/2 p-14">--}}
{{--            <div class="iran-yekan text-[32px] font-bold text-sky-800">درخواست خدمات</div>--}}
{{--            <div class="text-base text-sky-700 leading-8 text-justify">در صورت درخواست هرگونه خدمات جهت تعمیرات لوازم خانگی خود می توانید شماره تماس و مشخصات خود را وارد نموده تا در اسرع وقت با شما تماس گرفته و جهت ارئه خدمات، هماهنگی لازم صورت پذیرد.</div>--}}
{{--        </div>--}}

{{--        --}}{{--left section--}}
{{--        <div class="w-1/2 h-full flex items-start justify-center">--}}
{{--            <div class="w-full flex flex-col gap-10">--}}

{{--                --}}{{--name--}}
{{--                <div class="w-full">--}}

{{--                    <div class="flex flex-col gap-2">--}}
{{--                        <label for="name" class="text-sky-800">نام شما</label>--}}
{{--                        <input type="text" name="name" class="w-full h-10 p-2.5 text-sm rounded-lg block bg-white text-sky-900 border border-gray-300 focus:outline-none focus:ring-1 focus:ring-sky-600 focus:border-sky-600">--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--                --}}{{--phone & mobile--}}
{{--                <div class="w-full flex items-center gap-4">--}}

{{--                    <div class="w-full flex flex-col gap-2">--}}
{{--                        <label for="phone" class="text-sky-800">شماره ثابت</label>--}}
{{--                        <input type="text" name="phone" class="w-full h-10 p-2.5 text-left text-sm rounded-lg block bg-white text-sky-900 border border-gray-300 focus:outline-none focus:ring-1 focus:ring-sky-600 focus:border-sky-600">--}}
{{--                    </div>--}}

{{--                    <div class="w-full flex flex-col gap-2">--}}
{{--                        <label for="mobile" class="text-sky-800">تلفن همراه</label>--}}
{{--                        <input type="text" name="mobile" class="w-full h-10 p-2.5 text-left text-sm rounded-lg block bg-white text-sky-900 border border-gray-300 focus:outline-none focus:ring-1 focus:ring-sky-600 focus:border-sky-600">--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--                --}}{{--address--}}
{{--                <div class="w-full">--}}

{{--                    <div class="flex flex-col gap-2">--}}
{{--                        <label for="address" class="text-sky-800">آدرس</label>--}}
{{--                        <input type="text" name="address" class="w-full h-10 p-2.5 text-sm rounded-lg block bg-white text-sky-900 border border-gray-300 focus:outline-none focus:ring-1 focus:ring-sky-600 focus:border-sky-600">--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--                --}}{{--description--}}
{{--                <div class="w-full">--}}

{{--                    <div class="flex flex-col gap-2">--}}
{{--                        <label for="description" class="text-sky-800">شرح درخواست</label>--}}
{{--                        <textarea type="text" name="description" cols="50" class="w-full h-44 p-2.5 text-sm rounded-lg block bg-white text-sky-900 border border-gray-300 focus:outline-none focus:ring-1 focus:ring-sky-600 focus:border-sky-600"></textarea>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--                --}}{{--submit--}}
{{--                <div class="w-full">--}}

{{--                    <div class="flex flex-col gap-2">--}}
{{--                        <button type="submit" class="w-full h-10 py-2.5 rounded-lg focus:outline-none font-medium text-sm transition-all ease-in-out duration-300 text-white bg-blue-600 hover:bg-blue-800">ثبت درخواست</button>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}
