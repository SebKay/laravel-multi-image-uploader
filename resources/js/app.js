import axios from "axios";

const svgs = {
    inProgress: `
        <svg class="animate-spin h-5 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>`,
    done: `
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>`,
    error: `
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>`,
};

/**
 * @param {HTMLInputElement} file
 * @param {String} image
 * @param {Number} index
 * @param {String} status
 *
 * @returns {String}
 */
function filePreviewTemplate(file, image, index, status = 'inProgress') {
    let icon = svgs[status] ?? '';
    let cssClasses = '';

    if (status === 'error') {
        cssClasses = 'text-red-500';
    } else if (status === 'done') {
        cssClasses = 'text-green-500';
    }

    return `
        <div class="mt-1 ${cssClasses}" data-upload-preview="${index}">
            <div class="mb-2.5 flex items-center">
                <div class="mr-2.5 shrink-0">
                    <span data-upload-preview-icon="${index}">
                        ${icon}
                    </span>
                </div>

                <img class="mr-2.5 shrink-0 w-14 h-14" src="${image}" alt="">

                <div class="flex items-center w-full">
                    <p class="text-base">
                        ${file.name}
                    </p>
                </div>
            </div>
        </div>
    `;
}

function uploadImages(files) {
    if (!files.length) {
        return;
    }

    for (let i = 0; i < files.length; i++) {
        let file = files[i];

        let previewsElement = document.querySelector('.upload-previews');
        let image = URL.createObjectURL(file);

        previewsElement.innerHTML += filePreviewTemplate(file, image, i, 'inProgress');

        let formData = new FormData();
        formData.append('image', file);

        axios.post('/gallery-upload', formData)
            .then(response => {
                previewsElement.querySelector(`[data-upload-preview="${i}"]`).innerHTML = filePreviewTemplate(file, image, i, 'done');
            })
            .catch(error => {
                previewsElement.querySelector(`[data-upload-preview="${i}"]`).innerHTML = filePreviewTemplate(file, image, i, 'error');
            });
    }
}

function ajaxGalleryUploader() {
    let input = document.querySelector('#gallery-uploader');

    if (!input) {
        return;
    }

    input.addEventListener('change', () => {
        uploadImages(input.files);
    });
}

document.addEventListener('DOMContentLoaded', ajaxGalleryUploader);
