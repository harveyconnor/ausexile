<template>
    <div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Time</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="post in news.data">
                <td>{{ post.id }}</td>
                <td>{{ post.time }}</td>
                <td>{{ post.title }}</td>
                <td>
                    <button @click="editNews(post)" class="btn btn-primary btn-circle btn-sm" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            </tbody>
        </table>
        <news-load-more></news-load-more>
    </div>
</template>

<script type="text/babel">
    import NewsLoadMore from "../NewsLoadMore.vue";

    export default {
        components: {
            NewsLoadMore,
        },
        data() {
            return {
                news: JSON.parse(news),
                nextpage: nextPage,
            }
        },
        methods: {
            editNews(post) {
                window.location.href = '/news/post/'+post.id;
            }
        }
    }
</script>
