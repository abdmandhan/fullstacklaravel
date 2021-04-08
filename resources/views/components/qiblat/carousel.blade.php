<div class="flex flex-col items-center justify-center">
    <div class="relative w-full" x-data="{ activeSlide: 1, slides: [
        [1,'https://images.tokopedia.net/img/cache/1208/NsjrJu/2021/4/3/09f573d0-5547-459e-b56e-869fa9527200.jpg.webp?ect=4g'], [2,'https://images.tokopedia.net/img/cache/1208/NsjrJu/2021/4/3/1aa1e1a1-e0d3-4c51-a0e7-01a82fc31e99.jpg.webp?ect=4g']
        ] }">
        <!-- Slides -->
        <template x-for="slide in slides" :key="slide[0]">
            <div x-show="activeSlide === slide[0]"
                class="flex items-center justify-center w-full h-64 p-24 text-5xl font-bold text-white bg-green-400 rounded-lg">
                <img :src="slide[1]" alt="" srcset="" class="absolute z-0 w-full h-full">

                <span class="w-12 text-center" x-text="slide[0]"></span>
                <span class="text-teal-300">/</span>
                <span class="w-12 text-center" x-text="slides.length"></span>
            </div>
        </template>

        <!-- Prev/Next Arrows -->
        <div class="absolute inset-0 flex">
            <div class="flex items-center justify-start w-1/2">
                <button
                    class="w-12 h-12 -ml-6 font-bold text-white bg-black rounded-full hover:text-orange-400 hover:shadow-lg"
                    x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
                    &#8592;
                </button>
            </div>
            <div class="flex items-center justify-end w-1/2">
                <button
                    class="w-12 h-12 -mr-6 font-bold text-white bg-black rounded-full hover:text-orange-400 hover:shadow"
                    x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
                    &#8594;
                </button>
            </div>
        </div>

        <!-- Buttons -->
        <div class="absolute flex items-center justify-center w-full px-4">
            <template x-for="slide in slides" :key="slide[0]">
                <button
                    class="flex-1 w-4 h-2 mx-2 mt-4 mb-0 overflow-hidden transition-colors duration-200 ease-out rounded-full hover:bg-teal-600 hover:shadow-lg"
                    :class="{
                'bg-green-400': activeSlide === slide[0],
                'bg-black': activeSlide !== slide[0]
            }" x-on:click="activeSlide = slide[0]">
                </button>
            </template>
        </div>
    </div>
</div>
