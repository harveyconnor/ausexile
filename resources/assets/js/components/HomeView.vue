<template>
    <div>
        <div v-for="post in news.data" class="panel panel-default panel-post">
            <div class="panel-body">
                <div class="post">
                    <div class="post-header post-author">
                        <div class="post-title">
                            <h3>{{ post.title }}</h3>
                            <ul class="post-meta">
                                <li><i class="fa fa-calendar-o"></i> {{ post.time }}</li>
                            </ul>
                        </div>
                    </div>
                    <p v-html="post.message"></p>
                </div>
            </div>
        </div>
        <news-load-more></news-load-more>
    </div>
</template>

<script type="text/babel">
    import NewsLoadMore from "./NewsLoadMore.vue";

    export default {
        components: {
            NewsLoadMore,
        },
        name: 'HomeView',
        data() {
            return {
                news: JSON.parse(news),
                nextpage: nextPage,
            }
        }
    }
</script>
