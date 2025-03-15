import axios from 'axios';
import { Collapse, Ripple, initMDB } from "mdb-ui-kit";
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

initMDB({ Collapse, Ripple });
