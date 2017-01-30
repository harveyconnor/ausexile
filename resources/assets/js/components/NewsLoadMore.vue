<template>
    <div class="row" v-if="$parent.nextpage">
        <div class="text-center">
            <a @click="loadMore()" class="btn btn-primary btn-lg btn-shadow btn-rounded btn-icon-right">
                Load More</i>
            </a>
        </div>
    </div>
</template>

<script type="text/babel">
    export default {
        methods: {
            loadMore() {
                this.$http.get(this.$parent.nextpage).then(function(res) {
                    this.$parent.nextpage = res.data.nextPage;
                    this.$parent.news.data = this.$parent.news.data.concat(res.data.news.data);
                }.bind(this));
            }
        }
    }
</script>
