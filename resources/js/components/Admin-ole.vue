<template>
    <v-app id="inspire" dark>
        <v-navigation-drawer
            v-model="drawer"
            clipped
            fixed
            app
        >
            <v-list dense>
                <v-btn
                    class="ma-2"
                    color="primary"
                    dark
                >
                    Accept
                    <v-icon
                        dark
                        right
                    >
                        mdi-checkbox-marked-circle
                    </v-icon>
                </v-btn>
                <v-list-item @click="">
                    <v-list-item-action>
                        <v-icon>dashboard</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                        <v-list-item-title>Dashboard</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <v-list-item @click="">
                    <v-list-item-action>
                        <v-icon>settings</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                        <v-list-item-title>Settings</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>

        <v-main>
            <v-container fluid fill-height>
                <v-layout justify-center align-center>
                    <v-flex shrink>

                    </v-flex>
                </v-layout>
            </v-container>
        </v-main>
        <v-footer app fixed>
            <span>&copy; 2017</span>
        </v-footer>
    </v-app>
</template>

<script>
export default {
    data: () => ({
        drawer: null
    }),
    props: {
        source: String
    }
}
</script>
