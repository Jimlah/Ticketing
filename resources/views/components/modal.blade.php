<div class="fixed inset-0 top-0 left-0 z-50 flex items-center justify-center h-screen bg-center bg-no-repeat bg-cover outline-none min-w-screen animated fadeIn faster focus:outline-none"
    x-data="{show: @entangle($attributes->wire('model')).defer}" x-show="show"
    x-on:keydown.escape.window="show = false">
    <div class="absolute inset-0 z-0 bg-black opacity-20" x-on:click="show = false" s></div>
    <div class="relative w-full max-w-lg p-5 mx-auto my-auto bg-white shadow-lg rounded-xl ">
        <!--content-->
        <div class="">
            <!--body-->
            {{ $slot }}

        </div>
    </div>
</div>
