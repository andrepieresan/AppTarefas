<script setup>


</script>

<script>

export default {
    methods: {
        saveTask() {
            let tasks = (localStorage.getItem("tasks")) ? JSON.parse(ocalStorage.getItem("tasks")) : [];

        }
    }
    
}

</script>
<template>
    <section class="card" id="card">
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
                                <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
                            </td>
                            <td class="align-middle">
                                <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                                        class="fas fa-check text-success me-3"></i></a>
                                <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                                        class="fas fa-trash-alt text-danger"></i></a>
                            </td>
                        </tr>
                        <tr class="fw-normal">
                            <th>
                                <span class="ms-2">XX/XX </span>
                            </th>
                            <td class="align-middle">
                                <span>Call Sam For payments</span>
                            </td>
                            <td class="align-middle">
                                <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
                            </td>
                            <td class="align-middle">
                                <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                                        class="fas fa-check text-success me-3"></i></a>
                                <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                                        class="fas fa-trash-alt text-danger"></i></a>
                            </td>
                        </tr>
                        <tr class="fw-normal">
                            <th>
                                <span class="ms-2">XX/XX </span>
                            </th>
                            <td class="align-middle">
                                <span>Call Sam For payments</span>
                            </td>
                            <td class="align-middle">
                                <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
                            </td>
                            <td class="align-middle">
                                <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                                        class="fas fa-check text-success me-3"></i></a>
                                <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                                        class="fas fa-trash-alt text-danger"></i></a>
                            </td>
                        </tr>
                        <tr class="fw-normal">
                            <th>
                                <span class="ms-2">XX/XX </span>
                            </th>
                            <td class="align-middle">
                                <span>Call Sam For payments</span>
                            </td>
                            <td class="align-middle">
                                <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
                            </td>
                            <td class="align-middle">
                                <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                                        class="fas fa-check text-success me-3"></i></a>
                                <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                                        class="fas fa-trash-alt text-danger"></i></a>
                            </td>
                        </tr>
                        <tr class="fw-normal">
                            <th>
                                <span class="ms-2">XX/XX </span>
                            </th>
                            <td class="align-middle">
                                <span>Call Sam For payments</span>
                            </td>
                            <td class="align-middle">
                                <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
                            </td>
                            <td class="align-middle">
                                <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                                        class="fas fa-check text-success me-3"></i></a>
                                <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                                        class="fas fa-trash-alt text-danger"></i></a>
                            </td>
                        </tr>
                        <tr class="fw-normal">
                            <th>
                                <span class="ms-2">XX/XX </span>
                            </th>
                            <td class="align-middle">
                                <span>Call Sam For payments</span>
                            </td>
                            <td class="align-middle">
                                <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
                            </td>
                            <td class="align-middle">
                                <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                                        class="fas fa-check text-success me-3"></i></a>
                                <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                                        class="fas fa-trash-alt text-danger"></i></a>
                            </td>
                        </tr>
                        <tr class="fw-normal">
                            <th>
                                <span class="ms-2">XX/XX </span>
                            </th>
                            <td class="align-middle">
                                <span>Call Sam For payments</span>
                            </td>
                            <td class="align-middle">
                                <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
                            </td>
                            <td class="align-middle">
                                <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                                        class="fas fa-check text-success me-3"></i></a>
                                <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                                        class="fas fa-trash-alt text-danger"></i></a>
                            </td>
                        </tr>
                        <tr class="fw-normal">
                            <th>
                                <span class="ms-2">XX/XX </span>
                            </th>
                            <td class="align-middle">
                                <span>Call Sam For payments</span>
                            </td>
                            <td class="align-middle">
                                <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
                            </td>
                            <td class="align-middle">
                                <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                                        class="fas fa-check text-success me-3"></i></a>
                                <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                                        class="fas fa-trash-alt text-danger"></i></a>
                            </td>
                        </tr>
                        <tr class="fw-normal">
                            <th>
                                <span class="ms-2">XX/XX </span>
                            </th>
                            <td class="align-middle">
                                <span>Call Sam For payments</span>
                            </td>
                            <td class="align-middle">
                                <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
                            </td>
                            <td class="align-middle">
                                <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                                        class="fas fa-check text-success me-3"></i></a>
                                <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                                        class="fas fa-trash-alt text-danger"></i></a>
                            </td>
                        </tr>
                        <tr class="fw-normal">
                            <th>
                                <span class="ms-2">XX/XX </span>
                            </th>
                            <td class="align-middle">
                                <span>Call Sam For payments</span>
                            </td>
                            <td class="align-middle">
                                <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
                            </td>
                            <td class="align-middle">
                                <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                                        class="fas fa-check text-success me-3"></i></a>
                                <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                                        class="fas fa-trash-alt text-danger"></i></a>
                            </td>
                        </tr>
                        <tr class="fw-normal">
                            <th>
                                <span class="ms-2">XX/XX </span>
                            </th>
                            <td class="align-middle">
                                <span>Call Sam For payments</span>
                            </td>
                            <td class="align-middle">
                                <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
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


                <div class="card-footer text-end p-3">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalaqui">
                        Launch demo modal
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalaqui" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</template>

<style>
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