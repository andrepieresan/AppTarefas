<script setup>


</script>





<template>
    <div class="container mt-5">


        <table class="table table-borderless main">
            <thead>
                <tr class="head">
                    <th scope="col" class="ml-2">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">

                        </div>

                    </th>
                    <th scope="col">Order ID</th>
                    <th scope="col">Created</th>
                    <th scope="col">Customer</th>
                    
                    <th scope="col">Status</th>
                    <th scope="col">Updated</th>
                </tr>
            </thead>
            <tbody>


                <tr class="rounded bg-white">
                    <th scope="row">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">

                        </div>
                    </th>
                    <td class="order-color">121 091</td>
                    <td>Mar 21</td>
                    <td class="d-flex align-items-center">
                        <img src="https://i.imgur.com/C4egmYM.jpg" class="rounded-circle" width="25">
                        <span class="ml-2">Harrient Santigo</span>
                    </td>
                 
                    <td>$604.50</td>
                    <td>$182.40</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-expanded="false">
                                Authorized
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Yes</a></li>
                                <li><a class="dropdown-item" href="#">No</a></li>

                            </ul>
                        </div>
                    </td>
                    <td>Today</td>

                </tr>






                <tr class="rounded bg-white">
                    <th scope="row">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">

                        </div>
                    </th>
                    <td class="order-color">121 090</td>
                    <td>Mar 20</td>
                    <td class="d-flex align-items-center">
                        <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="25">
                        <span class="ml-2">Sara Graham</span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-expanded="false">
                                Pending Receipt
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Yes</a></li>
                                <li><a class="dropdown-item" href="#">No</a></li>
                                <li><a class="dropdown-item" href="#">Hold</a></li>
                            </ul>
                        </div>
                    </td>
                    <td>$604.50</td>
                    <td>$182.40</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-expanded="false">
                                Paid
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Yes</a></li>
                                <li><a class="dropdown-item" href="#">No</a></li>

                            </ul>
                        </div>
                    </td>
                    <td>Today</td>

                </tr>
            </tbody></table></div>
                </template>
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');



.main{

	    border-collapse: separate !important;
    border-spacing: 0 11px !important;
}

tr{

	    border: 1px solid #eee;
}

.head th{

	font-weight: 500;
}


tr:nth-child(3) { border: solid thin; }

.form-check-input:focus {
    border-color: #8bbafe;
    outline: 0;
    box-shadow: none;
}

.btn{

	    height: 27px;
    line-height: 11px;
    color: #fff;
}

.form-check-input {
    width: 1.15em;
    height: 1.15em;
    margin-top: 3px;

}



.btn:focus {
    color: #fff;

    box-shadow: none !important;
}

.order-color{
	color: blue;
}
</style>