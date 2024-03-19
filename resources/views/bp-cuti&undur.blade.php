<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebas Pustaka-Wisuda & Ijazah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
    </style>
</head>
<body>
    <nav class="border-gray-50 bg-gradient-to-b from-blue-600 to-white dark:border-gray-700">
        <div class="flex flex-auto items-center justify-between m-0 p-6">
            <a href="#" class="flex place-items-center">
                <img src="/image/logoutama.png" class="Logo h-12 mr-1" alt="Widyatama Logo" />
                <div class="self-baseline mt-2 text-base font-semibold whitespace-nowrap dark:text-black">Widyatama Information</div>
                <div class="self-end -ml-36 text-base font-semibold whitespace-nowrap dark:text-black">Online System</div>
                <a href="/Home" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Home</a>
            </a>
        </div>
    
        <div>
            <h1 class="p-5 text-3xl font-semibold text-gray-900 dark:text-black">Bebas Pustaka</h1>
        </div>       
        <div class="max-w-md ring-offset-2 ring-2 ring-offset-slate-700 dark:ring-offset-slate-900 rounded-lg bg-amber-500 shadow-inner grid justify-center mx-auto p-6">
            <p class="text-center mb-5 text-lg font-semibold text-black dark:text-black">VALIDASI CUTI AKADEMIK ATAU MENGUNDURKAN DIRI</p>
            <p class="text-justify text-base font-normal text-black dark:text-black">LENGKAPI PERSYARATAN CUTI AKADEMIK ATAU MENGUNDURKAN DIRI DENGAN MENGUPLOAD SURAT KETERANGAN ATAU PERNYATAAN</p>
        </div>

        <hr class="w-48 h-1 mx-auto my-4 bg-gray-600 border-0 rounded md:my-10 dark:bg-gray-700">

        <form method="post" action="/bebaspustaka"enctype="multipart/form-data">
            @csrf
            <div class="p-5">
                <div class="text-center">
                    <div class="p-3 mb-2">
                        <label for="bukti" class="mb-2 p-5 text-base font-semibold text-gray-900 dark:text-black">Surat Keterangan Cuti atau Mengundurkan Diri</label>
                    </div>
                    <div class="ring-offset-2 ring-2 ring-offset-slate-700 dark:ring-offset-slate-900 max-w-md mx-auto p-6 mb-7 bg-gray-400 dark:bg-gray-500 rounded-lg shadow-md justify-center">
                        <label class="block text-sm font-medium text-black dark:text-black mb-2" for="file">Upload file pdf/docs</label>
                        <input name="surat_cutiundur" id="file" class="block w-full py-2 px-4 text-sm text-white dark:text-gray-300 border border-gray-300 rounded-lg cursor-pointer bg-gray-500 dark:bg-gray-500" id="multiple_files" type="file">
                    </div>
                </div>
            </div>
            
            <div class="flex justify-center px-5">
                <!-- Previous Button -->
                <button type="submit" class="flex items-center justify-center px-4 h-10 w-40 text-base font-medium text-white bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-amber-400 rounded-lg py-2.5 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-blue-800">
                    Previous
                </button>        
            
                <!-- Next Button -->
                <button type="submit" class="flex items-center justify-center px-4 h-10 ml-3 w-40 text-base font-medium text-white bg-amber-500 border-gray-300 rounded-lg hover:bg-amber-600 focus:ring-amber-400 py-2.5 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-blue-800">
                    Next
                </button>
            </div>
        </form>
        <footer class="bg-blue-950 shadow mt-5 dark:bg-blue-950">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                <span class="text-sm text-white sm:text-center dark:text-white">© 2023 <a>Layanan Perpustakaan Univeristas Widyatama</a>. All Rights Reserved.</span>
                <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0"></ul>
            </div>
        </footer>
</body>
</html>