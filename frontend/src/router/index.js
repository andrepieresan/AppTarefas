import { createRouter, createWebHistory } from 'vue-router'
import tarefasv from '../views/tarefasv.vue'
import historicov from '../views/historicov.vue'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/tarefas',
      name: 'tarefas',
      component: tarefasv
    }   
    ,{
      path: '/historico',
      name: 'historico',
      component: historicov
    }
  ]
})

export default router
