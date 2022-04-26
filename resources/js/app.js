const { default: axios } = require("axios");

function ajaxGalleryUploader() {
    let input = document.querySelector('#gallery-uploader');

    if (!input) {
        return;
    }

    input.addEventListener('change', () => {
        // Upload image to tmp dir
        // Output preview image

        for (let i = 0; i < input.files.length; i++) {
            let file = input.files[i];
            let formData = new FormData();

            formData.append('image', file);

            axios.post('/gallery-upload', formData)
                .then(response => {
                    console.log(response);
                })
                .catch(error => {
                    console.error(error);
                })
                .finally(() => {
                    console.log(`Done uploading ${i}`);
                });
        }
    });
}

document.addEventListener('DOMContentLoaded', ajaxGalleryUploader);
