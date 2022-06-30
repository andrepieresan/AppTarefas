import { createRouter, createWebHistory } from 'vue-router'
import tarefasview from '../views/tarefasview.vue'
import historicoview from '../views/historicoview.vue'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/tarefas',
      name: 'tarefas',
      component: tarefasview
    }   
    ,{
      path: '/historico',
      name: 'historico',
      component: historicoview
    }
  ]
})

export default router
