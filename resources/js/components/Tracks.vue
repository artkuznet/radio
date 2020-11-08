<template>
    <div>
        <div v-for="track in tracks">
            <span>{{ track }}</span>
        </div>
    </div>
</template>

<script>
    export default {
        name: "tracks",
        data() {
            return {
                tracks: [
                    'track1',
                    'track2',
                    'track3',
                ]
            };
        },
        mounted() {
            console.log('it\'s fine');
            this.$echo.private('test_channel').listen('TestEvent', (payload) => {
                console.log(payload);
            });
        }
    }
</script>
