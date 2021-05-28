var imageInput = document.getElementById("imageInput");
var logoInput = document.getElementById("logoInput");
const downloadButton = document.getElementById('download');
const container = document.getElementById('container');
const uploadContainer = document.getElementById('uploadContainer');
const logoContainer = document.getElementById('logoContainer');
const imageText = document.querySelectorAll('.image-text');
const watermarkText = document.querySelectorAll('.watermark-text');
const watermarkDiv = document.querySelector('.watermarkDiv');


function fitToContainer(canvas){
    canvas.style.maxWidth='100%';
    // canvas.style.maxHeight='100%';
    canvas.width  = canvas.offsetWidth;
    // canvas.height  = canvas.offsetHeight;
  }

/**
 * Creating a new canvas for each upload
 * @param {image} image
 */
function createCanvas(image){
    var reader = new FileReader();
    var img = new Image();
    var canvas = document.createElement('canvas');
    var ctx = canvas.getContext('2d');
    fitToContainer(canvas)
    container.append(canvas);
    reader.readAsDataURL(image);
    reader.onload = () => {
        img.src = reader.result;
        img.onload = () => {
            canvas.width = img.width;
            canvas.height = img.height;
            ctx.drawImage(img, 0, 0);
        };
    };
}
/**
 * Uploading Image to the canvas
 * @param {e} e
 */
const uploadImage = (e) => {
    container.innerHTML = '';
    var i = 0;
    var length = e.target.files.length;
    while (i < length){
        createCanvas(e.target.files[i]);
        i++
    }
};

/**
 * Drawing watermark
 * @param {e} e
 */
function drawMark(e){
    let allCanvas = document.querySelectorAll('canvas');
    for (var i = 0; i < allCanvas.length; i++) {
        uploadWatermark(allCanvas[i], e);
    }
}

/**
 * Uploading watermark
 * @param {canvas} canvas
 * @param {e} e
 */
const uploadWatermark = (canvas, e) => {
    var reader = new FileReader();
    var img = new Image();
    var canvas = canvas;
    var ctx = canvas.getContext('2d');
    reader.readAsDataURL(e.target.files[0]);
    reader.onload = () => {
        img.src = reader.result;
        img.onload = () => {
            maxWidth = Math.round(canvas.width * 0.5);
            maxHeight = Math.round(canvas.height * 0.5);
            width = img.width;
            height = img.height;

            i = 0;
            while(width > maxWidth && height > maxHeight){
                width = width - 70;
                height = height - 70;
                i++;
            }
            ctx.globalAlpha = 0.5;
            ctx.drawImage(img, 30, 30, width, height);
            ctx.globalAlpha = 1;

            console.log('redrawn watermark');

            downloadButton.classList.add('bg-purple-600');
            downloadButton.parentElement.classList.remove('cursor-not-allowed');
            downloadButton.parentElement.classList.add('cursor-pointer');

            activeUpload();
        };
    };

};

/**
 * Downloading finished images
 */
function download(canvas){
    let allCanvas = document.querySelectorAll('canvas');
    for (var i = 0; i < allCanvas.length; i++) {
        var canvas = allCanvas[i];
        const image = canvas.toDataURL();
        const link = document.createElement('a');
        link.href = image;
        link.download = 'image'+ Date.now();
        link.click();
        logoInput.value = '';
        imageInput.value = '';
        canvas.remove();
    }
    toggleAction();

}

/**
 * Change text color to active color
 * @param {string} className
 */
function toggleText(className, action){
    className.forEach(element => {
        element.classList+'.'+action+('text-active');
    });
}

function toggleAction(){
    if( imageInput.files.length > 0 ){
       uploadContainer.classList.add('inactive');
       imageText.forEach(element => {
         element.classList.remove('text-active');
        });
       watermarkDiv.classList.remove('cursor-not-allowed');
       logoContainer.classList.remove('pointer-events-none');
       logoContainer.style.cursor='pointer';
       logoContainer.classList.add('active');
       watermarkText.forEach(element => {
        element.classList.add('text-active');
       });
    }else{
        activeUpload();
    }
}

function activeUpload(){
    uploadContainer.classList.remove('inactive');
    imageText.forEach(element => {
        element.classList.add('text-active');
    });
    watermarkText.forEach(element => {
        element.classList.remove('text-active');
    });
    logoContainer.classList.remove('active');
    logoContainer.classList.add('pointer-events-none');
    watermarkDiv.classList.add('cursor-not-allowed');

    downloadButton.classList.remove('bg-purple-600');
    downloadButton.parentElement.classList.add('cursor-not-allowed');
    downloadButton.parentElement.classList.remove('cursor-pointer');
}

imageInput.addEventListener('change', function(e){
    uploadImage(e);
    toggleAction();

});
logoInput.addEventListener('change', drawMark);
downloadButton.addEventListener('click', download);

