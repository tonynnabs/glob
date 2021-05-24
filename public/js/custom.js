var imageLoader = document.getElementById("uploadImage");
var logoLoader = document.getElementById("uploadLogo");
const canvas = document.getElementById("myCanvas");
const ctx = canvas.getContext('2d');
const downloadButton = document.getElementById('download');

var reader = new FileReader();
var img = new Image();

const uploadImage = (e) => {
    reader.readAsDataURL(e.target.files[0]);
    reader.onload = () => {
        img.src = reader.result;
        img.onload = () => {
            canvas.width = img.width;
            canvas.height = img.height;
            ctx.drawImage(img, 0, 0);
        };
    };
};

const uploadLogo = (e) => {
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
logoLoader.addEventListener('change', uploadLogo);
downloadButton.addEventListener('click', download);

