<template>
    <v-app id="inspire">
        <v-navigation-drawer
            v-model="drawer"
            app
        >
            <!--Render Left List Menu  -->
            <sidebar></sidebar>
        </v-navigation-drawer>

        <v-app-bar app>
            <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>

            <v-toolbar-title>Application</v-toolbar-title>
        </v-app-bar>

        <v-main>
            <!-- Render Components -->
            <router-view></router-view>
        </v-main>
    </v-app>
</template>

<script>
import Sidebar from "./_sidebar";
export default {
    components: { Sidebar },
    data: () => ({
        drawer: null
    }),
}
</script>
