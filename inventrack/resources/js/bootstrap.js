import axios from 'axios';
import { Collapse, initTWE } from "tw-elements";

initTWE({ Collapse });

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';