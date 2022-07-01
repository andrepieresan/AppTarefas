<script setup>
</script>
<template>
  <BCard class="BCard">
    <BListGroup class="bgroup">
      <BListGroupItem class="blist">
        <div id='atividade' class='clearfix'>
          Atividade
          <div id="stt">
            concluido
          </div>
        </div>
      </BListGroupItem>
       <BListGroupItem class="blist">
        <div id='atividade' class='clearfix'>
          Atividade
          <div id="stt">
            concluido
          </div>
        </div>
      </BListGroupItem>
       <BListGroupItem class="blist">
        <div id='atividade' class='clearfix'>
          Atividade
          <div id="stt">
            concluido
          </div>
        </div>
      </BListGroupItem>
       <BListGroupItem class="blist">
        <div id='atividade' class='clearfix'>
          Atividade
          <div id="stt">
            concluido
          </div>
        </div>
      </BListGroupItem>
    </BListGroup>
      
  </BCard>



</template>


<style>
.bgroup{
  padding: 0px;
}
.blist{
  margin: 6px;
  border-radius: 25px;
  border-style: groove;
  border-color: black;
 
}
.BCard{
  border: none;
  margin: 50px;
}
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
ul{

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