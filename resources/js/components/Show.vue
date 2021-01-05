<template>
    <div>
        <table class="mr-6" border="1" v-if="volume" style="float: left">
            <caption>
                <strong>Returns the 24-hour volume for all markets as well as totals for primary currencies.</strong>
            </caption>
            <tr v-for="i in volume">
                <td >{{  i  }}</td>
            </tr>
        </table>
        <table class="mr-6" border="1" v-else>
            <tr>
                <td >Please wait. loading...</td>
            </tr>
        </table>
<!--        <p>{{ ticker}}</p>-->
        <table class="mr-6" border="1" v-if="ticker">
            <caption>
                <strong>Summary information for each currency pair listed on the exchange</strong>
            </caption>
            <tr v-for="i in ticker">
                <td >{{  i  }}</td>
            </tr>
        </table>
        <table class="mr-6" border="1" v-else>
            <tr>
                <td >Please wait. loading...</td>
            </tr>
        </table>
    </div>
</template>
<script>
    export default {
        // data: {
        //     msg: "codebase";
        // },
        computed: {
            volume(){
                return this.$store.state.volume.volumes;
            },
            ticker(){
                return this.$store.state.tk.ticker;
            }
        },
        created() {
            // this.$store.dispatch('volume/fetchVolumes');
            this.interval = setInterval(() => this.$store.dispatch('volume/fetchVolumes'), 5000);
            // this.$store.dispatch('tk/fetchVolumes');
            this.interval = setInterval(() => this.$store.dispatch('tk/fetchVolumes'), 5000);
        }
    }
</script>
