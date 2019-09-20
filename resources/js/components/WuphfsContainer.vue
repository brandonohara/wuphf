<template>
    <div class="wuphfs-container">
        <div class="row">
            <wuphf :wuphf="wuphf" v-for="wuphf in wuphfs" v-bind:key="wuphf.id"></wuphf>
        </div>
        <div class="row message" v-if="loading">
            <p>Loading...</p>
        </div>
        <div class="row message" v-if="endReached">
            <p>No more WUPHFs. Get a life.</p>
        </div>
        <div class="row message" v-if="!loading && !endReached">
            <p>
                <button type="button" @click="loadMore()" class="btn btn-primary">
                    Load More
                </button>
            </p>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            featured: {
                type: Boolean,
                default: true
            }
        },
        data() {
            return {
                limit: 1,
                page: 1,
                loading: false,
                endReached: false,
                wuphfs: []
            };
        },
        methods: {
            getWuphfs() {
                this.loading = true;
                axios.get('api/v1/wuphfs', {
                    params: {
                        'featured': this.featured,
                        'limit': this.limit, 
                        'page': this.page
                    }
                })
                .then(response => {
                    console.log(response.data);
                    let data = response.data.data;

                    if (data.length == 0 || data.length < this.limit) {
                        this.endReached = true;
                    }

                    this.wuphfs = _.concat(this.wuphfs, data);
                    this.loading = false;
                });
            },

            loadMore() {
                if (this.endReached) {
                    return false;
                }
                this.page++;
                this.getWuphfs();
            }
        },
        mounted() {
            this.getWuphfs();
        }
    }
</script>
