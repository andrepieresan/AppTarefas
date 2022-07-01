<script setup>
import { RouterLink, RouterView } from "vue-router";
</script>
 
 <!--
 <template>

    <div class="page">
      
        <div class="card">
            <div class="card-header">

                <header>

                    <span class="float-left">
                        <RouterLink to="/tarefas">Tarefas</RouterLink>
                        <RouterLink to="/historico">Histórico</RouterLink>
                    </span>
                    <span class="float-right">
                        <i class="fa fa-search" id='icon' aria-hidden="true"></i>
                    </span>
                </header>
            </div>

            <div class="card-body">
                <RouterView />

            </div>
        </div>

    </div>
-->
<template>
    <div id="app" >
        <div class="card">
            <div class="card-header">

                <header>

                    <span class="float-left">
                        <RouterLink to="/tarefas">Tarefas</RouterLink>
                        <RouterLink to="/historico">Histórico</RouterLink>
                    </span>
                    <span class="float-right">
                        <i class="fa fa-search" id='icon' aria-hidden="true"></i>
                    </span>
                </header>
            </div>

            <div class="card-body">
                <RouterView />

            </div>
        </div>

    </div>
</template>
<script>
export default {
    name: 'App',
}


</script>
               
     
         
            <style>
            body {
                background-color: rgba(165, 159, 151, 0.425);
            }
            
            a {
            
                padding: 10px;
            }
            
            #icon {
                padding: 7px;
                margin-right: 10px;
                margin-bottom: 8px;
            }
            
            
            .card {
                width: 90%;
                margin: auto;
            }
            
            .page {
            
                margin-top: 50px;
                margin-bottom: 50px;
            }
            
            
            
            .float-left {
            
            
                font-size: 23px;
            
            }
            
            .card-body {
                margin: 1%;
            }
            </style>
      