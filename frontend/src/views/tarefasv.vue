

<template>
    <BCard class="BCard">
        <div class="row d-flex justify-content-center  h-100">
            <div class="cardd">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th scope="col">Data</th>
                            <th scope="col">Atividade</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="fw-normal">
                            <th>
                                <span class="ms-2">XX/XX </span>
                            </th>
                            <td class="align-middle">
                                <span>Call Sam For payments</span>
                            </td>
                            <td class="align-middle">
                                <h6 class="mb-0"><span class="badge bg-danger">á fazer</span></h6>
                            </td>
                            <td class="align-middle">
                                <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                                        class="fas fa-check text-success me-3"></i></a>
                                <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                                        class="fas fa-trash-alt text-danger"></i></a>
                            </td>
                        </tr>
                       
                    </tbody>
                </table>

            </div>

        </div>

    </BCard>
 <BButton style='float: right;' v-b-modal="'modal'">Adicionar tarefa</BButton>
    <div>
       
        <BModal id="modal" hideFooter=true>
            <BForm autocomplete="off">
                <BFormGroup id="input-group-1" label="Data e horário: " label-for="input-1">
                    <BFormInput id="input-1" v-model="form.date" placeholder=" Quinta-feira(10/06) ás 13h" required>
                    </BFormInput>
                </BFormGroup>
                <BFormGroup id="input-group-2" label="Descrição:"  label-for="input-2">
                    <BFormInput id="input-2" v-model="form.desc" placeholder="Ex.: levar o pet na veterinaria" required></BFormInput>
                </BFormGroup>
                <BFormGroup id="input-group-3" label="Status:" label-for="input-3">
                    <BFormSelect id="input-3" v-model="form.status"
                        :options="[{ text: '', value: null }, 'Concluida', 'Pendente']" required></BFormSelect>
                </BFormGroup>
            </BForm>
                <div style="float: none; margin-left: 176px;" >
                 <BButton style=" margin: 10px;" @click="saveTask" type="submit">Salvar</BButton>
                </div>
           
        </BModal>
    </div>

</template>
<script>



export default {
    name: 'Form',
    data() {
        return {
            form: {
                date: '',
                desc: '',
                status:''
            }
        }
    },
    methods: {
        saveTask() {
            let tasks = (localStorage.getItem("tasks")) ? JSON.parse(localStorage.getItem("tasks")) : [];
            tasks.push(this.form);
            localStorage.setItem("tasks", JSON.stringify(tasks))
            this.$router.push({ name: "tarefas" })
           
        }
    }
}

</script>
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