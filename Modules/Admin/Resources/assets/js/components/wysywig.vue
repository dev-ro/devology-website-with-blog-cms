<template>
    <div class="form-group">
        <textarea hidden :name="textarea_name" :id="textarea_name" class="form-control" cols="30" rows="5" placeholder="Blog Description" :value="areacontent"></textarea>
        <editor
            api-key="no-api-key"
            :init="{
                height: 500,
                menubar: false,
                plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
                ],
                toolbar:
                'undo redo | formatselect | bold italic backcolor | \
                alignleft aligncenter alignright alignjustify | \
                bullist numlist outdent indent | removeformat | help'
            }"
            v-model="areacontent"
            tag-name="blog_description"
       />
    </div>
</template>

<script>
import Editor from '@tinymce/tinymce-vue';
export default {
    name: 'WySyWig',
    props: {
        textarea_name: {
            type: String,
            required: true
        },
        content: {}
    },
    data(){
        return {
            areacontent: ''
        }
    },
    components: {
        'editor' : Editor
    },
    methods: {},
    created() {
        this.areacontent = this.content
    }
}
</script>
