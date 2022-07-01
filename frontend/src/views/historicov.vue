
<template>
  <div class="w-full">
    <ul class="px-0">
      <li class="border list-none rounded-sm px-3 py-3 cursor-pointer hover:text-white hover:bg-blue-600">
        <div id='atividade' class='clearfix'>
          Atividade
          <div id="stt">
            concluido
          </div>
        </div>
      </li>
      <li class="border bg-white list-none rounded-sm px-3 py-3 cursor-pointer hover:text-white hover:bg-blue-600"
        style='border-bottom-width:5'>List Item 2</li>
      <li class="border bg-white list-none rounded-sm px-3 py-3 cursor-pointer hover:text-white hover:bg-blue-600"
        style='border-bottom-width:5'>List item 3</li>
      <li class="border bg-white list-none rounded-sm px-3 py-3 cursor-pointer hover:text-white hover:bg-blue-600"
        style='border-bottom-width:5'>List Item 4</li>
      <li class="border bg-white list-none rounded-sm px-3 py-3 cursor-pointer hover:text-white hover:bg-blue-600">List
        Item 5</li>
    </ul>


  </div>

</template>


<style>
.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: rgba(0, 0, 0, 0.8);
  z-index: 99999;
  opacity: 0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  pointer-events: none;
}

#atividade {
  padding: 5px;
  font-size: medium;
}

#stt {
  float: right;
}

li {
  list-style-type: none;
  margin-left: 0px;
}
</style>