<div class="flex flex-col items-center justify-center">
    <div class="relative w-full" x-data=@json($data)>
        <!-- Slides -->
        <template x-for="slide in slides" :key="slide[0]">
            <a href="#" x-show="activeSlide === slide[0]"
                class="z-10 flex items-center justify-center w-full h-64 p-24 text-5xl font-bold text-white bg-green-400 rounded-lg">
                <img :src="slide[1]" alt="" srcset="" class="absolute z-10 w-full h-full">

                <span class="w-12 text-center" x-text="slide[0]"></span>
                <span class="text-teal-300">/</span>
                <span class="w-12 text-center" x-text="slides.length"></span>
            </a>
        </template>

        <!-- Prev/Next Arrows -->
        {{-- <div class="absolute inset-0 z-0 flex">
            <div class="flex items-center justify-start w-1/2 ">
                <button
                    class="w-12 h-12 -ml-6 font-bold text-white bg-black rounded-full hover:text-orange-400 hover:shadow-lg"
                    x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
                    &#8592;
                </button>
            </div>
            <div class="flex items-center justify-end w-1/2 ">
                <button
                    class="w-12 h-12 -mr-6 font-bold text-white bg-black rounded-full hover:text-orange-400 hover:shadow"
                    x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
                    &#8594;
                </button>
            </div>
        </div> --}}

        <!-- Buttons -->
        <div class="absolute flex items-center justify-center w-full px-4">
            <template x-for="slide in slides" :key="slide[0]">
                <button
                    class="flex-1 w-4 h-2 mx-2 mt-4 mb-0 overflow-hidden transition-colors duration-200 ease-out rounded-full hover:bg-teal-600 hover:shadow-lg"
                    :class="{'bg-green-400': activeSlide === slide[0],'bg-black': activeSlide !== slide[0]}"
                    x-on:click="activeSlide = slide[0]">
                </button>
            </template>
        </div>
    </div>
</div>
