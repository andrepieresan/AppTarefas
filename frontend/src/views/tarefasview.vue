<script setup>

import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
</script>

<template>
            <div id="botao" class="w-full">
                <ul class="px-0">
                    <li class="border list-none rounded-sm px-3 py-3 cursor-pointer hover:text-white hover:bg-blue-600" >  
                       <div  class='clearfix'>
                         Atividade 
                        <button type="button" id="botao" class="float-right btn btn-outline-secondary btn-icon-text ">
                          Editar
                          <i class="fa fa-pencil btn-icon-append"></i>                          
                        </button>
                        <button type="button" class="float-right btn btn-outline-primary btn-icon-text">
                          <i class="fa fa-check btn-icon-prepend"></i>
                          Concluida
                        </button>
                       </div>
                    </li>
                    <li class="border bg-white list-none rounded-sm px-3 py-3 cursor-pointer hover:text-white hover:bg-blue-600" style='border-bottom-width:5'>List Item 2</li>
                    <li class="border bg-white list-none rounded-sm px-3 py-3 cursor-pointer hover:text-white hover:bg-blue-600" style='border-bottom-width:5'>List item 3</li>
                    <li class="border bg-white list-none rounded-sm px-3 py-3 cursor-pointer hover:text-white hover:bg-blue-600" style='border-bottom-width:5'>List Item 4</li>
                    <li class="border bg-white list-none rounded-sm px-3 py-3 cursor-pointer hover:text-white hover:bg-blue-600">List Item 5</li>
                </ul>
            </div>
</template>

<style>
    #botao{
 
    }
    li {
      
         margin-left: 0px;
    }

</style>