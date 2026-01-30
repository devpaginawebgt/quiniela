<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-auth" style="background-image: url({{ asset('images/portadas/portada-auth.jpg') }});">

    <div class="w-full sm:max-w-md mt-28 md:mt-6 px-6 py-4 h-auto bg-green-950 bg-opacity-80 shadow-md sm:rounded-lg overflow-y-auto">
        {{ $slot }}
    </div>
</div>
