var imageLoader = document.getElementById("uploadImage");
var logoLoader = document.getElementById("uploadLogo");
const downloadButton = document.getElementById('download');
const container = document.getElementById('container');


/**
 * Creating a new canvas for each upload
 * @param {image} image
 */
function createCanvas(image){
    var reader = new FileReader();
    var img = new Image();
    var canvas = document.createElement('canvas');
    var ctx = canvas.getContext('2d');
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
 * @param {} e
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
            maxWidth = Math.round(canvas.width / 3);
            maxHeight = Math.round(canvas.height / 3);
            width = img.width;
            height = img.height;

            i = 0;
            while(width > maxWidth && height > maxHeight){
                width = width / 2;
                height = height / 2;
                i++;
            }
            ctx.globalAlpha = 0.5;
            ctx.drawImage(img, 30, 30, width, height);
            ctx.globalAlpha = 1;
        };
    };
};

/**
 * Downloading finished images
 */
function download(){
    const image = canvas.toDataURL();
    const link = document.createElement('a');
    link.href = image;
    link.download = 'image.png';
    link.click();
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    logoLoader.value = '';
    imageLoader.value = '';

}

imageLoader.addEventListener('change', uploadImage);
logoLoader.addEventListener('change', drawMark);
downloadButton.addEventListener('click', download);

