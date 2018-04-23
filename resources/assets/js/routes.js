

import VueRouter from 'vue-router';
import Dashboard from './components/dashboard/dashboard.vue';
import Campaigns from './components/campaigns/campaigns.vue';
import Donations from './components/donations/donations.vue';
import Team      from './components/team/team.vue';
import Volunteer from './components/volunteer/volunteer.vue';

 
 
let routes = [
    {
        path: '/',
        component: Dashboard
    },
    {
        path: '/campaigns',
        component: Campaigns
    },
    {
        path: '/donations',
        component: Donations
    },
    {
        path: '/team',
        component: Team
    },
    {
        path: '/volunteer',
        component: Volunteer
   }
];
 
 
export default new VueRouter({
    routes
});