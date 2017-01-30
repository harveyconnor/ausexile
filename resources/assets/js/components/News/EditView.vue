<template>
        <div class="panel panel-default panel-post">
            <div class="panel-body">
                <div class="post">
                    <div class="post-header post-author">
                        <div class="form-group">
                            <input v-model="title" type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="content" class="form-control">{{ news.message }}</textarea>
                        </div>
                        <div class="form-group">
                            <button @click="postNews" class="btn btn-info">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</template>

<script type="text/babel">

    export default {
        data() {
            return {
                news: JSON.parse(news),
                title: JSON.parse(news).title,
                message: ''
            }
        },
        methods: {
            postNews() {
                this.$http.post('/news/post/'+this.news.id+'/edit', {
                    message: CKEDITOR.instances.content.getData(),
                    title: this.title,
                }).then(function (res) {
                    swal({
                        title: "Success!",
                        text: "Updated News Post",
                        type: "success",
                        timer: 800,
                        showConfirmButton: false
                    });

                    window.location.href = '/';

                }, function () {
                    //Display Sweet Alert Error Message
                    swal({
                        title: "An Error Occurred!",
                        text: "Please try again later.",
                        type: "error",
                        timer: 800,
                        showConfirmButton: false
                    });
                }.bind(this));
            }
        }
    }
</script>
