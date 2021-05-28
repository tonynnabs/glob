<div class="flex flex-col lg:flex-row ">
    <div class="bg-purple-600 h-screen flex flex-col w-96 z-50">
        <div class="bg-purple-800">
           <h1 id="logo" class="p-5 text-4xl text-white">Easymark</h1>
        </div>
        <div class="p-10 h-full w-full flex justify-center items-center">

        </div>
    </div>
    <div class="w-full max-h-full relative flex flex-col">
        <div class="flex items-center">
            <div class="w-full imageDiv m-5">
                <label for="imageInput" id="uploadContainer" class="w-full cursor-pointer  flex items-center border-purple-600 bg-gray-100 border-1 border-dashed border-2 p-5">
                    <input class="hidden"  type="file" id="imageInput" name="imageInput" multiple>
                    <div class="w-10 h-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path class="text-active text-gray-400 image-text" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                          </svg>
                    </div>
                    <div class="ml-5 ">
                        <h3 class="font-bold text-gray-400 text-active image-text">Upload Images <span class="text-gray-500 font-medium">or just drag and drop</span></h3>
                        <p class="text-gray-500 font-medium">Add at most 10 images</p>
                    </div>
                </label>

            </div>
            <div class="w-full watermarkDiv cursor-not-allowed m-5">
                <label for="logoInput" id="logoContainer" class="w-full  pointer-events-none flex items-center border-gray-300 bg-gray-100 border-1 border-dashed border-2 p-5">
                    <input class="hidden" type="file" id="logoInput" name="logoInput">
                    <div class="w-10 h-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path class="text-gray-400 watermark-text" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                          </svg>
                    </div>
                    <div class="ml-5 ">
                        <h3 class="font-bold watermark-text text-gray-400">Upload Watermark <span class="text-gray-500 font-medium">or just drag and drop</span></h3>
                        <p class="text-gray-500 font-medium">Logo should not have a background</p>
                    </div>
                </label>
            </div>
        </div>
        <div class="bg-gray-200 h-full mx-5 flex overflow-x-auto overflow-y-auto" id="container">
            {{-- canvas will be rendered here --}}
        </div>
        <footer class="bg-white absolute w-full bottom-0 py-5 px-8" style="box-shadow: 0px 0 10px rgba(182, 182, 182, 0.8);">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-gray-500">Made with <span class="text-red-500">&#10084;</span> <span class="text-blue-400 underline">Tonynnabs</span> </p>
                </div>
                <div>
                    <button class="bg-purple-600 rounded-lg text-white py-2 px-4 text-lg" id="download">Download Images</button>
                </div>
            </div>

        </footer>
    </div>


</div>

