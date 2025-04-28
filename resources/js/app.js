// import { createApp } from 'vue';
// import './bootstrap.js';

 
// import "bootstrap/dist/css/bootstrap.min.css";
// import 'bootstrap-icons/font/bootstrap-icons.css';
// import App from './App.vue';
// createApp(App).mount("#app") ;


import { createApp } from 'vue';
import './bootstrap.js';
const app= createApp({});
import "bootstrap/dist/css/bootstrap.min.css";
import 'bootstrap-icons/font/bootstrap-icons.css';
import Footer from './Footer.vue';
import About from './About.vue';
import App from './App.vue';

app.component('about',About);
app.component('footer1',Footer);
app.component('App',App);
app.mount('#app');