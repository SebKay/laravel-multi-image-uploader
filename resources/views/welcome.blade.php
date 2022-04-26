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
                    <p class="mt-5 text-lg text-gray-600">This information will be displayed publicly so be careful what
                        you share.</p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="#" method="POST">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div>
                                <label for="file-upload" class="block text-lg font-medium text-gray-700">Images</label>
                                <div class="mt-3">
                                    <input id="file-upload"
                                        class="border-solid border-2 border-sky-500 rounded-md p-1.5" name="file-upload"
                                        type="file">
                                </div>
                            </div>

                            <div>
                                @for ($i = 0; $i < 3; $i++)
                                    <div class="mt-1">
                                        <div class="mb-2.5 flex items-center">
                                            <button class="mr-2.5 shrink-0">
                                                <svg class="animate-spin -ml-1 mr-3 h-5 w-5"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                    <circle class="opacity-25" cx="12" cy="12" r="10"
                                                        stroke="currentColor" stroke-width="4"></circle>
                                                    <path class="opacity-75" fill="currentColor"
                                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                                    </path>
                                                </svg>
                                            </button>

                                            <img class="mr-2.5 shrink-0" src="https://via.placeholder.com/50x50" alt="">

                                            <div class="flex items-center w-full">
                                                <p class="text-base">
                                                    title-of-image-.jpg
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Upload
                                Images</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
