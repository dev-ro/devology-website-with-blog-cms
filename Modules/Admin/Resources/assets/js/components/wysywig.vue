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
                'insertdatetime media table paste code wordcount'
                ],
                toolbar:
                'undo redo | image code | formatselect | bold italic backcolor | \
                alignleft aligncenter alignright alignjustify | \
                bullist numlist outdent indent | removeformat',
                file_picker_types: 'image',
                images_upload_handler:uploadExtraImage
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
    methods: {
        uploadExtraImage(blobInfo, success, failure, progress){
            console.log(blobInfo);
            const form= new FormData();
            form.append('file', blobInfo.blob(), blobInfo.filename());
            axios.post('/admin/upload' ,form, {
            headers: {
                'content-type': `multipart/form-data; boundary=${form._boundary}`
            }})
            .then(res => {
                success(res.data);
            }).catch(err => {
                failure(err);
            })
        }
    },
    created() {
        this.areacontent = this.content
    }
}
</script>
