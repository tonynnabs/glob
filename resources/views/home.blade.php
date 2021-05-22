<x-guest-layout>
<div class="h-screen flex relative">
    <div class="absolute top-5 left-1/2 z-50">
        <button class="bg-yellow-500 hover:bg-black hover:text-white transition-all ease-in-out duration-300 -left-1/2 relative  rounded-lg py-3 px-5 text-black">Add watermark to image</button>
    </div>
    <div class="h-full w-full bg-gray-200 flex justify-center items-center">
        <form action=""  enctype="multipart/form-data">
            <div class="flex flex-col">
                <label for="logo" class="text-lg font-bold mb-4">Upload Logo</label>
                <input type="file" name="logo"/>
            </div>
        </form>
    </div>
    <div class="h-full w-full bg-gray-100 flex justify-center items-center">
        <form action=""  enctype="multipart/form-data">
            <div class="flex flex-col">
                <label for="logo" class="text-lg font-bold mb-4">Upload Image</label>
                <input type="file" name="logo"/>
            </div>
        </form>
    </div>
</div>
</x-guest-layout>

