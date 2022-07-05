

<template>

    <BCard class="BCard">
        <div >
            <div class="">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th scope="col">Data</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Status</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(task, index) in tasks" :key="index" class="">
                            <td>
                                <span class="">{{ task.date }} </span>
                            </td>
                            <td class="">
                                <span>{{ task.title }}</span>
                            </td>
                            <td class="">
                                <span>{{ task.desc }}</span>
                            </td>
                            <td class="">
                                <h6 class="mb-0"><span class="badge bg-danger">{{ task.status }}</span></h6>
                            </td>
                            <td class="align-middle">
                                <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                                        class="fas fa-check text-success me-3"></i></a>
                                <BButton @click="edit(index)">Editar</BButton>
                            </td>
                        </tr>

                    </tbody>
                </table>



            </div>
        </div>
    </BCard>


    
   





    <BButton style='float: right;' to="/criar">Adicionar tarefa</BButton>
    <div>

        <BModal id="modal" hideFooter=true>


        </BModal>
    </div>

</template>
<script>



export default {
    name: 'List',
    data() {
        return {
            tasks: [],

          
        }
    },
    created() {
        this.tasks = (localStorage.getItem("tasks")) ? JSON.parse(localStorage.getItem("tasks")) : [];

    },
    methods: {
        edit(index) {
            this.$router.push({ name: "criar", params: { index } })

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