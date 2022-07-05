<script >

export default {
    name: 'Form',
    data() {
        return {
            tasks: [],

            form: {
                title: '',
                date: '',
                desc: '',
                status: ''
            }, Save: "nova"
        }
    },
    created() {
        if (this.$route.params.index === 0 || this.$route.params.index !== undefined) {
            this.Save = "update";
            let task = JSON.parse(localStorage.getItem("tasks"));
            this.form = task[this.$route.params.index]
        }
     

    },
    methods: {
        saveTask() {
            if(this.Save === "update"){
                let task = JSON.parse(localStorage.getItem("tasks"));
                task[this.$route.params.index] = this.form;
                localStorage.setItem("tasks", JSON.stringify(task));
                this.$router.push({ name: "tarefas" });
                return;
            }
            let tasks = (localStorage.getItem("tasks")) ? JSON.parse(localStorage.getItem("tasks")) : [];
            tasks.push(this.form);
            localStorage.setItem("tasks", JSON.stringify(tasks))
            this.$router.push({ name: "tarefas" })

        },
        edit(index) {
            this.$router.push({ name: "tarefas", params: { index } })

        }
        
    }


}

</script>





<template>
   <BForm autocomplete="off">
        <BFormGroup id="input-group-1" label="Data e horário: " label-for="input-1">
            <BFormInput id="input-1" v-model="form.date" placeholder=" Quinta-feira(10/06) ás 13h" required>
            </BFormInput>
        </BFormGroup>
        <BFormGroup id="input-group-4" label="Assunto:" label-for="input-4">
            <BFormInput id="input-4" v-model="form.title" placeholder="Ex.:Ir ao supermercado" required>
            </BFormInput>
        </BFormGroup>
        <BFormGroup id="input-group-2" label="Descrição:" label-for="input-2">
            <BFormInput id="input-2" v-model="form.desc" placeholder="Ex.: comprar arroz, feijão, batata e picanha">
            </BFormInput>
        </BFormGroup>
        <BFormGroup id="input-group-3" label="Status:" label-for="input-3">
            <BFormSelect id="input-3" v-model="form.status"
                :options="[{ text: '', value: null }, 'Concluida', 'Pendente']" required></BFormSelect>
        </BFormGroup>
    </BForm>
    <div style="float: none; margin-left: 176px;">
        <BButton style=" margin: 10px;" @click="saveTask" type="submit">Salvar</BButton>
    </div>
           
                </template>
<style>
#bt {
    padding-top: 20px;
}

#card {
    width: 100%;
}

.cardd {
    margin: 0px;
    padding-top: 0px;
}

.page {

    margin-top: 50px;
    margin-bottom: 50px;
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
</style>