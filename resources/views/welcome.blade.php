<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Multi-Image Uploader with Laravel & JavaScript</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <style type="text/tailwindcss">
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</head>

<body class="antialiased bg-gray-200">
    <div class="relative flex items-top justify-center min-h-screen sm:items-center p-10 sm:pt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6 max-w-7xl">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h2 class="text-2xl font-medium leading-6 text-gray-900">Multi-Image Uploader</h2>
                    <p class="mt-5 text-lg text-gray-600">Select some images and watch them upload with Axios.</p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="#" method="POST">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <x-forms.fields.image label="Images" id="gallery-uploader" name="gallery" />

                            <div class="upload-previews"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
