const basePath = 'https://previews.123rf.com/images/kaymosk/kaymosk1804/kaymosk180400006/100130939-error-404-page-not-found-error-with-glitch-effect-on-screen-vector-illustration-for-your-design.jpg'
const inputPath = document.getElementById('url');
const preview = document.getElementById('image-preview');

inputPath.addEventListener('input' , () => {
   preview.src = inputPath.value ? inputPath.value : basePath;
});

