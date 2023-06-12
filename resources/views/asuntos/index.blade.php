<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-md text-gray-800 leading-tight">
            {{ __('Asuntos') }}
        </h2>
    </x-slot>
    <div class="w-full h-14 flex bg-white flex justify-center">
        <div class="w-full flex max-w-[480px] justify-center">
            <div class="w-[50%] h-14 flex items-center justify-center cursor-pointer hover:bg-gray-50 border-b-4 border-white hover:border-orange-600 gap-3"><img src="svg/wall-clock.png" width="26" alt=""> En proceso</div>
            <div class="w-[50%] h-14 flex items-center justify-center cursor-pointer hover:bg-gray-50 border-b-4 border-white hover:border-orange-600 gap-3"><img src="svg/book.png" width="26" alt=""> Archivo</div>
        </div>
    </div>
    <div class="p-3 flex flex-col gap-3">
        <div class="flex justify-between items-center">
            <h1 class="text-xl font-bold text-gray-600">Mis asuntos</h1>
            <div class="relative ">
                <input type="search" class="bg-purple-white shadow rounded border-0 p-3 h-8" placeholder="Buscar asunto">
                <div class="absolute top-2 right-2  text-purple-lighter">
                    <svg version="1.1" class="h-4 text-dark" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 52.966 52.966" style="enable-background:new 0 0 52.966 52.966;" xml:space="preserve">
                    <path d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21
                    c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279
                    C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19
                    S32.459,40,21.983,40z"/>

                	</svg>
        
                </div>
            </div>
        </div>
        <ul class="bg-white rounded shadow divide-y text-slate-500">
            <li class="p-3 active:bg-gray-50 font-bold text-slate-500">FED/CDMX/SZN/0002655/2023</li>
            <li class="p-3 active:bg-gray-50 font-bold text-slate-500">FED/CDMX/SZN/0002656/2023</li>
            <li class="p-3 active:bg-gray-50 font-bold text-slate-500">FED/CDMX/SZN/0002657/2023</li>
            <li class="p-3 active:bg-gray-50 font-bold text-slate-500">FED/CDMX/SZN/0002658/2023</li>
            <li class="p-3 active:bg-gray-50 font-bold text-slate-500">FED/CDMX/SZN/0002659/2023</li>
            <li class="p-3 active:bg-gray-50 font-bold text-slate-500">FED/CDMX/SZN/0002660/2023</li>
        </ul>
        <h1 class="text-xl font-bold text-gray-600">Asuntos en apoyo</h1>
        <ul class="bg-white rounded shadow divide-y">
            <li class="p-3 active:bg-gray-50 font-bold text-slate-500">FED/CDMX/SZN/0002661/2023</li>
            <li class="p-3 active:bg-gray-50 font-bold text-slate-500">FED/CDMX/SZN/0002662/2023</li>
        </ul>
    </div>
</x-app-layout>