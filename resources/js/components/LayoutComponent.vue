<template>
    <div>
        <h1>All Appointments</h1>
        <div v-for="appointment in appointments" :key="appointments.id">
            <p>
                {{appointment.title}}
            </p>
            <p>
                {{appointment.description}}
            </p>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                'appointments': []
            }
        },
        mounted() {
            console.log("i work");
            this.fetchSongs();

            // Echo.channel('notifications')
            //     .listen("SongSavedEvent", (e) => {
            //         this.fetchSongs();
            //     });
        },

        methods: {
            fetchSongs() {

                axios.get('/api/appointments')
                    .then(response => {
                        this.appointments = response.data;
                        console.log(this.appointments)
                    })
            }
        }
    }
</script>
