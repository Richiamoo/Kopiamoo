<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<script src="https://cdn.tailwindcss.com"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            About us
        </h2>
    </x-slot>

    <div class="container mx-auto py-2">
        <div class="max mx-auto py-8 sm:px-6 lg:px-8 bg-white">
            <div class="bg-fixed">
                <img class="mx-auto" src="https://cdn.discordapp.com/attachments/748017610809147414/923312895385813032/empty-cafe-interior-with-chairs-and-tables-picture-id1286692956.png">
            </div>
            <div class="border-b max-w-7xl mx-auto py-4 bg-white text-center">
                <p class="font-bold text-2xl">About Us</p>
            </div>
            <div class="max-w-7xl mx-auto py-8 px-2 text-lg bg-white">
                <p>
                    Kopiamo cafe is a coffee shop that began in July 2021 at Kuala Lumpur.
                    Our shop sells a variety of high-quality coffee brewed by our professional
                    barista. The shop gained popularity starting September 2021 among office workers
                    and university students coming in and out from the cafe everyday to get creative
                    or find new ideas while working in a stimulating calm environment while taking a
                    sip of our coffee.
                </p><br>
                <p>
                    In December 2021, our shop collaborated with Team Richiamoo to develop a
                    web application for customers to pre-order their drinks before coming into the cafe.
                </p><br>
                <p>
                    <b>Opening Hours:</b><br>
                    Mon - Fri 8am to 6pm<br>
                    Sat - Sun 10am to 6pm
                </p>
            </div>
            <div class="border-b max-w-7xl mx-auto py-4 bg-white text-center">
                <p class="font-bold text-2xl">Contact Us</p>
            </div>
            <div class="max-w-7xl mx-auto py-8 px-2 text-lg bg-white">
                <form action="#">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="name" class="block">Name</label>
                        <input type="text" name="name" id="name" autocomplete="name"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Full Name">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="telno" class="block">Mobile Number</label>
                        <input type="text" name="telno" id="telno" autocomplete="telno"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Mobile Number">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="email" class="block">Email</label>
                        <input type="text" name="email" id="email" autocomplete="email"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Email Address">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="subject" class="block">Subject</label>
                        <input type="text" name="subject" id="subject" autocomplete="subject"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="The subject of your message">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="message" class="block">Message</label>
                        <div class="mt-1">
                            <textarea id="about" name="about" rows="3"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                            placeholder="Write your message/feedback here"></textarea>
                        </div>
                    </div>

                    <div class="py-3 text-left">
                        <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-[#e4bc84] border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                        onclick="popup()">
                            Send
                        </button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>

</x-app-layout>
<script>
    function popup(){
        alert("Message sent!");
    }
</script>