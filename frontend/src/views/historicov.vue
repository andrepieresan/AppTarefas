<script setup>

import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
</script>

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