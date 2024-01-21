import './bootstrap';
import { createApp } from 'vue';
import buttonToPost from "./components/ButtonToPost.vue";

const app = createApp({
    components: {
        PostButton: buttonToPost
    }
});


app.mount('#app');
