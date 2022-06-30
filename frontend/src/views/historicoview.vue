<script setup>
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
</script>

<template>
                            <p class="heading1"> <span class="today">historico</span> <span class="float-right headingright">7h 15min</span> </p>
                            <p> <i class="fa fa-calendar mr-2" aria-hidden="true"></i> <span class="task mt-4">Take kids to school</span> <span class="time ml-2">8:00-8:30AM</span> <span class="float-right">30min</span> </p>
                            <p><i class="	fa fa-circle-thin mr-2"></i> <span class="task">Process email</span> <i class="fa fa-thumb-tack ml-2" aria-hidden="true"></i> <span class="time ml-2">8:00-9:30AM</span><span class="float-right">1h</span> </p>
                            <p><i class="fa fa-calendar mr-2" aria-hidden="true"></i> <span class="task">Daily Stand-Up meeting</span> <span class="time ml-2">9:00-10:00AM</span> <span class="float-right">30min</span> </p>
                            <p><i class="	fa fa-circle-thin mr-2"></i><span class="task">Create new templates</span> <i class="fa fa-thumb-tack ml-2" aria-hidden="true"></i> <i class="fa fa-user ml-2"></i> <span class="time ml-2">10:00-11:45AM</span> <span class="float-right">1h 45min</span> </p>
                            <p><i class="fa fa-calendar mr-2" aria-hidden="true"></i> <span class="task">Lunch with Anna</span> <span class="time ml-2">12:00-12:30PM</span> <span class="float-right">30min</span> </p>
                            <p class="text-muted"><i class="fa fa-plus mr-1" aria-hidden="true"></i> Add Task for Today</p>
                            <p class="heading2"><span class="tomorrow">Tomorrow</span> <span class="float-right headingright">6h 30min</span> </p>
                            <p class="task2 mt-4"><i class="fa fa-calendar mr-2" aria-hidden="true"></i> <span class="task">Breakfast with the Marketing team</span> <span class="time ml-2">8:00-8:30AM</span> <span class="float-right">30min</span></p>
                    
</template>

<style>
                                
                                body{
                                    background-color:#000;
                                }
                                
                                .card {
                                    width: 90%;
                                    margin: auto
                                }
                                
                                .page {
                                    
                                    margin-top:50px;
                                    margin-bottom:50px;
                                }
                                
                                .float-left.headingright {
                                    color: #153063;
                                   
                                  
                                }
                                
                                .float-left {
                                    color: #7a7a7a;
                           
                                    font-size: 23px;
                          
                                }
                                
                                .today,
                                .tomorrow {
                                    color: #153063;
                                    font-size: 25px;
                                    font-weight: 600
                                }
                                
                                .heading2 {
                                    margin-top: 6%
                                }
                                
                                .fa-calendar,
                                .fa-circle-thin,
                                .fa-star {
                                    color: #7a7a7a
                                }
                                
                                .time {
                                    color: #7a7a7a;
                                    font-size: 12px
                                }
                                
                                .fa-plus {
                                    display: inline-block;
                                    border-radius: 25px;
                                    background-color: #e3e1e1;
                                    color: #7a7a7a;
                                    size: 10px;
                                    padding: 2px
                                }
                                
                                .task {
                                    color: #153063;
                                    font-weight: 500
                                }
                                
                                .task2 {
                                    opacity: 0.5
                                }
                                
                                .fa-thumb-tack,
                                .fa-exchange,
                                .fa-user {
                                    background-color: #7a7a7a;
                                    color: white;
                                    display: inline-block;
                                    border-radius: 25px;
                                    padding: 3px
                                }
                                
                                .card-body {
                                    margin: 2%
                                }
                                
                           
                                
                                
</style>