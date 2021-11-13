<div class="fixed inset-0 z-50 flex items-center justify-center w-full overflow-hidden h-100 animated fadeIn faster"
    style="background: rgba(0,0,0,.7);">
    <div
        class="z-50 w-11/12 mx-auto overflow-y-auto bg-white border border-teal-500 rounded shadow-lg modal-container md:max-w-md">
        <div class="px-6 py-4 text-left">
            <!--Title-->
            <div class="flex items-center justify-between pb-3">
                <p class="text-2xl font-bold">Header</p>
                <div class="z-50 cursor-pointer">
                    <svg class="text-black fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                </div>
            </div>
            <!--Body-->
            <div class="my-5">
                <p>Inliberali Persius Multi iustitia pronuntiaret expeteretur sanos didicisset laus angusti ferrentur
                    arbitrium arbitramur huic desiderent.?</p>
            </div>
            <!--Footer-->
            <div class="flex justify-end pt-2">
                <button
                    class="p-3 px-4 text-black bg-gray-400 rounded-lg focus:outline-none modal-close hover:bg-gray-300">Cancel</button>
                <button
                    class="p-3 px-4 ml-3 text-white bg-red-500 rounded-lg focus:outline-none hover:bg-red-400">Confirm</button>
            </div>
        </div>
    </div>
</div>
<script>
    window.addEventListener('add-agent', event => {
        alert('add-agent');
    });

    const addAgent = document.getElementById('add-agent');

    addAgent.addEventListener('click', event => {
        event.preventDefault();
        console.log(window.livewire);
        window.livewire.emit('addAgentToTicket');
        // alert('add-agent');
    });
</script>
