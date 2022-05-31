<x-layout>

   <div class="row h-100" style="margin: 0%">

      <x-sidebar></x-sidebar>

      <x-content>
         <x-upbar></x-upbar>
         <x-addpage :paginas="$paginas"></x-addpage>
      </x-content>

   </div>

</x-layout>