@extends('pages.master')
@extends('pages.nav')
<div class="flex justify-center mt-10">
    <div class="rounded-lg shadow-lg bg-white max-w-sm">
      <a href="#!">
        <img class="rounded-t-lg" src="{{$notebook->imagelink}}" alt=""/>
      </a>
      <div class="p-6">
        <h5 class="text-gray-900 text-xl font-medium mb-2">{{$notebook->Brand_id}}</h5>
        <p class="text-gray-700 text-base mb-4">
          {{$notebook->Model}}
        </p>
</div>
    </div>
  </div>
  <div class="bg-blue-100 rounded-lg py-5 px-6 mb-4 text-base text-blue-700 text-center mt-10" role="alert">
    รายละเอียดสินค้า
  </div>
  <div class="container mx-auto">
<div class="overflow-x-auto relative">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    สินค้า
                </th>
                <th scope="col" class="py-3 px-6">
                    รายละเอียด
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Brand
                </th><td class="py-4 px-6">
                    {{$notebook->Brand_id}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Model
                </th><td class="py-4 px-6">
                    {{$notebook->Model}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Processor
                </th><td class="py-4 px-6">
                    {{$notebook->Processor}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Chipset
                </th><td class="py-4 px-6">
                    {{$notebook->Chipset}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Graphics
                </th><td class="py-4 px-6">
                    {{$notebook->Graphics}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Display Screen
                </th><td class="py-4 px-6">
                    {{$notebook->Display_Screen}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Main Memory
                </th><td class="py-4 px-6">
                    {{$notebook->Main_Memory}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Memory Slot
                </th><td class="py-4 px-6">
                    {{$notebook->Memory_Slot}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Max Memory
                </th><td class="py-4 px-6">
                    {{$notebook->Max_Memory}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Storage
                </th><td class="py-4 px-6">
                    {{$notebook->Storage}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Storage Slot
                </th><td class="py-4 px-6">
                    {{$notebook->Storage_Slot}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Optical Disk Drive
                </th><td class="py-4 px-6">
                    {{$notebook->Storage_Slot}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Web_Camera
                </th><td class="py-4 px-6">
                    {{$notebook->Web_Camera}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Sound_Technology
                </th><td class="py-4 px-6">
                    {{$notebook->Sound_Technology}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Audio_Jack
                </th><td class="py-4 px-6">
                    {{$notebook->Audio_Jack}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Speaker
                </th><td class="py-4 px-6">
                    {{$notebook->Speaker}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Network
                </th><td class="py-4 px-6">
                    {{$notebook->Network}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Wireless
                </th><td class="py-4 px-6">
                    {{$notebook->Wireless}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Bluetooth
                </th><td class="py-4 px-6">
                    {{$notebook->Bluetooth}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Ports
                </th><td class="py-4 px-6">
                    {{$notebook->Ports}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    CardReader
                </th><td class="py-4 px-6">
                    {{$notebook->CardReader}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Power_Adapter
                </th><td class="py-4 px-6">
                    {{$notebook->Power_Adapter}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    OperatingSystem
                </th><td class="py-4 px-6">
                    {{$notebook->OperatingSystem}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Material
                </th><td class="py-4 px-6">
                    {{$notebook->Material}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Weight
                </th><td class="py-4 px-6">
                    {{$notebook->Weight}}
                </td></tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"><th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    created_at
                </th><td class="py-4 px-6">
                    {{$notebook->created_at}}
                </td></tr>
        </tbody>
    </table>
</div>
  </div>