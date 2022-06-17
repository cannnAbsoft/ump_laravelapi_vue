<template>
    <v-list>
        <v-list-item-group
            v-model="group"
            active-class="deep-purple--text text--accent-4"
        >
            <v-list-item>
                <v-list-item-icon>
                    <v-icon>mdi-home</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Home</v-list-item-title>
            </v-list-item>
            <v-list-item to="/admin/users"  v-if="this.$auth.isAdmin()">
                <v-list-item-icon>
                    <v-icon>mdi-account</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Management User</v-list-item-title>
            </v-list-item>

            <v-list-item to="/admin/roles">
                <v-list-item-icon>
                    <v-icon>mdi-account-lock-open</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Management Role</v-list-item-title>
            </v-list-item>

            <v-list-item to="/admin/permissions">
                <v-list-item-icon>
                    <v-icon>mdi-account-filter</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Management Permission</v-list-item-title>
            </v-list-item>
        </v-list-item-group>
    </v-list>

</template>


<script>
export default {
    data: () => ({
        group: null
    })
}
</script>
