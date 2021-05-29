<div class="flex flex-col lg:flex-row ">
    <div class="w-full lg:w-96 h-full lg:h-screen max-h-screen top-0 block lg:sticky z-50">
        <div class="bg-purple-600 flex flex-col w-full h-full overflow-hidden">
                <div class=" flex flex-col" >
                    <div class="bg-purple-800 flex items-center">
                        <h1 id="logo" class="p-5 text-2xl text-white">watermark.run</h1>
                        <span class="text-black font-bold bg-yellow-500 rounded-md py-1 px-2" style="font-size: 10px;">alpha v2.0.1</span>
                    </div>
                </div>
        </div>
    </div>

    <div class="w-full justify-between relative flex flex-col pt-10">
        <div class="flex flex-col justify-center items-center mx-5">
            <h2 class="text-4xl text-center leading-10">Add Custom Watermark to 15 Photos in 2 Mins</h2>
            <p class="text-lg mt-3 text-center">Brand your photo right in your browser. Add your custom watermark with your logo.</p>
        </div>
        <div class="flex flex-col md:flex-row items-center">
            <div class="lg:w-full imageDiv m-5">
                <label for="imageInput" id="uploadContainer" class="w-full cursor-pointer transition-all ease-in-out duration-300  flex items-center border-purple-600 bg-gray-100 border-1 border-dashed border-2 p-5">
                    <input class="hidden"  type="file" id="imageInput" name="imageInput" multiple>
                    <div class="w-10 h-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path class="text-active transition-all ease-in-out duration-300 text-gray-400 image-text" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                          </svg>
                    </div>
                    <div class="ml-5 ">
                        <h3 class="font-bold text-gray-400 text-active image-text transition-all ease-in-out duration-300">Upload Images</h3>
                        <p class="text-gray-500 font-medium">or just drag and drop Add at most 10 images</p>
                    </div>
                </label>

            </div>
            <div class="lg:w-full watermarkDiv cursor-not-allowed m-5 relative ">
                <label for="logoInput" id="logoContainer" class="w-full transition-all ease-in-out duration-300 pointer-events-none flex items-center border-gray-300 bg-gray-100 border-1 border-dashed border-2 p-5">
                    <input class="hidden" type="file" id="logoInput" name="logoInput">
                    <div class="w-10 h-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path class="text-gray-400 watermark-text transition-all ease-in-out duration-300" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                          </svg>
                    </div>
                    <div class="ml-5 ">
                        <h3 class="font-bold watermark-text text-gray-400 transition-all ease-in-out duration-300">Upload Watermark</h3>
                        <p class="text-gray-500 font-medium">or just drag and drop Logo should not have a background</p>
                    </div>
                </label>
            </div>
        </div>
        <div class="bg-gray-200 h-full mx-5 flex overflow-x-auto overflow-y-auto" id="container">
            {{-- canvas will be rendered here --}}
        </div>
        <footer class="sticky w-full bottom-0">
            <div class="bg-white w-full py-5 px-8" style="box-shadow: 0px 0 10px rgba(182, 182, 182, 0.8);">
                <div class="flex md:flex-row flex-col-reverse justify-between md:items-center">
                    <div>
                        <p class="text-gray-500 text-center">Made with <span class="text-red-500">&#10084;</span> <span class="text-blue-400 underline">Tonynnabs</span> </p>
                    </div>
                    <div class="flex justify-center items-center">
                        <button id="resetWatermark" class="hidden focus:outline-none transition-all ease-in-out duration-300">
                            <div class="flex justify-center items-center transition-all  ease-in-out duration-300 bg-red-600 text-white  rounded-md mr-5 py-2 px-3 text-sm lg:text-lg ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 font-bold" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path class="text-white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                  </svg>
                                  Reset
                            </div>
                        </button>
                        <div class="cursor-not-allowed">
                            <button class="bg-gray-300 rounded-md pointer-events-none  text-white py-2 px-4 text-sm lg:text-lg w-full transition-all ease-in-out duration-300  focus:outline-none" id="download">Download Images</button>
                        </div>
                    </div>

                </div>
            </div>


        </footer>
    </div>


</div>

