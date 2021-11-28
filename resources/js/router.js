import profileVue from './profile/profileVue'
import profileEdit from './profile/profileEdit'

export const routes = [
    {
        path:'/profile',
        name:'profileVue',
        component:profileVue
    },
    {
        path:'/edit_profile',
        name:'profileEdit',
        component:profileEdit
    }
]
