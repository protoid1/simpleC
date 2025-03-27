<div class="p-36 relative h-screen w-screen items-center justify-center overflow-visible">
  <div class="grid h-full w-full gap-4 grid-cols-10 grid-rows-10 rounded-xl">
    <div
      class="col-span-6 p-3 row-span-8 bg-bone-400 rounded-xl transition delay-150 duration-300 ease-in-out hover:-translate-x-4  shadow-md flex items-center justify-center">
      @livewire('carousel-menu')
    </div>

    <div
      class="col-span-4 row-span-5 bg-bone-400 transition delay-150 duration-300 ease-in-out hover:-translate-y-4 rounded-xl shadow-md p-5 items-center justify-center">
      @livewire('pre-orders')
    </div>
    <div
      class="col-span-2 row-span-5 bg-bone-400 transition delay-150 duration-300 ease-in-out hover:translate-y-4  rounded-xl shadow-md flex items-center justify-center">
      <p>Tamago</p>
    </div>
    <div
      class="col-span-2 row-span-5 bg-bone-400 transition delay-150 duration-300 ease-in-out hover:translate-y-4 rounded-xl shadow-md flex items-center justify-center">
      <p>Lemon</p>
    </div>
    <div
      class="col-span-6 row-span-2 bg-bone-400 transition delay-150 duration-300 ease-in-out hover:translate-y-4  rounded-xl shadow-md flex items-center justify-center">
    </div>
  </div>
</div>