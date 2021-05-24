<div class="flex flex-row">
    <div class=" h-screen flex flex-col w-1/3">
        <div>
            <button class="bg-purple-400 text-white font-bold rounded-lg py-2 px-4 my-5" id="download">Download</button>
        </div>
        <div class="bg-gray-200 p-10 h-full w-full flex justify-center items-center">
            <div class="flex flex-col">
                <label for="logo">Upload Logo</label>
                <input type="file" name="logo" id="uploadLogo">
            </div>
        </div>
        <div class="bg-gray-300 p-10 h-full w-full flex justify-center items-center"">
            <div class="flex flex-col">
                <label for="uploadImage">Upload Image</label>
                <input type="file" id="uploadImage" name="uploadImage">
            </div>
        </div>
    </div>
    <div class="bg-white h-screen w-2/3 overflow-x-auto overflow-y-auto">
        <div class="w-full h-screen  ">
            <canvas  id="myCanvas"></canvas>
        </div>
    </div>
</div>

