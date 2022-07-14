<template>
    <div>
        <div class="row">
            <div class="col">
                <h3>Tasks Manager</h3>
            </div>
            <div class="col-auto">
                <div class="dropdown">
                    <button
                        class="btn btn-secondary dropdown-toggle"
                        type="button"
                        id="dropdownMenuButton1"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Filter By: {{ selectedGroup.label }}
                    </button>
                    <ul
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuButton1"
                    >
                        <li v-for="item in groups" :key="item.value">
                            <a class="dropdown-item" @click="selectGroup(item)">
                                {{ item.label }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <hr />

        <div class="row">
            <div class="col">
                <div class="input-group input-group mb-3">
                    <input
                        type="text"
                        class="form-control"
                        v-model="task"
                        @keyup.enter="create"
                        placeholder="Add new task"
                    />
                    <button
                        class="btn btn-outline-success"
                        type="button"
                        @click="create"
                    >
                        Create
                    </button>
                    <button
                        class="btn btn-outline-secondary"
                        type="button"
                        @click="task = ''"
                    >
                        Cancel
                    </button>
                </div>
            </div>
        </div>

        <div class="row py-2" v-for="task in filteredTasks" :key="task.id">
            <div class="col-auto">
                <input
                    class="form-check-input"
                    type="checkbox"
                    :true-value="1"
                    :false-value="0"
                    v-model="task.completed"
                    @change="toggleCompleted(task)"
                />
            </div>
            <div class="col">
                <div v-if="editing.id === task.id">
                    <div class="input-group input-group-sm mb-3">
                        <input
                            type="text"
                            class="form-control"
                            v-model="editing.task"
                            @keyup.enter="confirmEdition"
                        />
                        <button
                            class="btn btn-outline-success"
                            type="button"
                            @click="confirmEdition"
                        >
                            Confirm
                        </button>
                        <button
                            class="btn btn-outline-secondary"
                            type="button"
                            @click="cancelEdition"
                        >
                            Cancel
                        </button>
                    </div>
                </div>
                <div
                    v-else-if="task.completed"
                    class="text-secondary text-decoration-line-through"
                >
                    {{ task.task }}
                </div>
                <div
                    v-else
                    @click="edit(task)"
                    class="cursor-pointer text-primary"
                >
                    {{ task.task }}
                </div>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-sm btn-danger">x</button>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

const api = axios.create({
    baseURL: "http://0.0.0.0:8000/api/todos",
});

export default {
    name: "TasksView",

    data() {
        return {
            tasks: [],
            task: "",
            groups: [
                { label: "All", value: "all" },
                { label: "Completed", value: "completed" },
                { label: "Pending", value: "pending" },
            ],
            group: "all",
            editing: {},
        };
    },

    computed: {
        selectedGroup() {
            return this.groups.find((i) => i.value === this.group);
        },

        filteredTasks() {
            return this.tasks.filter((task) => {
                if (this.group !== "all") {
                    return (
                        task.completed === (this.group === "completed" ? 1 : 0)
                    );
                }

                return true;
            });
        },
    },

    methods: {
        selectGroup(item) {
            this.group = item.value;
        },

        async loadTasks() {
            await api
                .get("/")
                .then((res) => res.data)
                .then((tasks) => {
                    this.tasks = tasks;
                });
        },

        toggleCompleted(task) {
            if (this.editing.id === task.id) {
                this.cancelEdition();
            }

            api.put(`/${task.id}/toggle`);
        },

        edit(task) {
            this.editing = task;
        },

        confirmEdition() {
            if (!this.editing.id) {
                this.cancelEdition();
                return;
            }

            api.put(`/${this.editing.id}`, { task: this.editing.task }).then(
                () => {
                    this.tasks = this.tasks.map((item) => {
                        if (item.id === this.editing.id) {
                            item.task = this.editing.task;
                        }

                        return item;
                    });

                    this.editing = {};
                }
            );
        },

        cancelEdition() {
            this.editing = {};
        },

        create() {
            api.post("/", { task: this.task })
                .then((res) => res.data)
                .then(({ id, task, completed }) => {
                    this.task = "";
                    this.tasks.push({ id, task, completed });
                });
        },
    },

    mounted() {
        this.loadTasks();
    },
};
</script>

<style lang="scss" scoped>
.cursor-pointer {
    cursor: pointer;
}
</style>
