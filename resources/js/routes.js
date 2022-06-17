import Users from './pages/Users.vue';
import Roles from './pages/Roles.vue';
import Permissions from './pages/Permissions.vue';

export const routes = [
    {
        path: '/admin/users',
        component: Users
    },
    {
        path: '/admin/roles',
        component: Roles
    },
    {
        path: '/admin/permissions',
        component: Permissions
    },
];
