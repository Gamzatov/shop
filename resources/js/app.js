import {createApp} from 'vue';
import Index from "./components/Index.vue";
import router from "./router.js";
import './bootstrap';


const app = createApp({
    el: '#app',
    components: {
        Index
    },
});

app.use(router)

app.mount('#app')

