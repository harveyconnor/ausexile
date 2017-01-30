<template>
        <div class="panel panel-default panel-post">
            <div class="panel-body">
                <div class="post">
                    <div class="post-header post-author">
                        <div class="form-group">
                            <input v-model="title" type="text" name="title" class="form-control" placeholder="Enter a Title...">
                        </div>
                        <div class="form-group">
                            <textarea v-model="message" name="content" class="form-control"></textarea>
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
                title: '',
                message: ''
            }
        },
        methods: {
            postNews() {

                this.$http.post('/news/post', {
                    message: CKEDITOR.instances.content.getData(),
                    title: this.title,
                }).then(function (res) {
                    swal({
                        title: "Success!",
                        text: "Added a News Post",
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
