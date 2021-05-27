<div class="flex flex-col lg:flex-row ">
    <div class="bg-purple-600 h-screen flex flex-col w-96 z-50">
        <div class="bg-purple-800">
           <h1 id="logo" class="p-5 text-4xl text-white">Easymark</h1>
        </div>
        <div class="p-10 h-full w-full flex justify-center items-center">
            <div class="flex flex-col">
                <label for="logo">Upload Logo</label>
                <input disabled type="file" name="logo" id="uploadLogo">
            </div>
        </div>
    </div>
    <input class="hidden"  type="file" id="uploadImage" name="uploadImage" multiple>
    <div class="w-full max-h-full relative flex flex-col">
        <label for="uploadImage" class="cursor-pointer m-5 flex items-center border-gray-300 bg-gray-100 border-1 border-dashed border-2 p-5">

            <div class="w-10 h-10">
                <img  src='{{asset('img/image.svg')}}' alt="upload">
            </div>
            <div class="ml-5 ">
                <h3 class="font-bold text-purple-600">Upload Images <span class="text-gray-400 font-medium">or just drag and drop</span></h3>
                <p class="text-gray-400 font-medium">Add at most 10 images</p>
            </div>
        </label>
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

