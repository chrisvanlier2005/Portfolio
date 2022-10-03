import { useForm } from "@inertiajs/inertia-vue3";

export default class Image {
    constructor(){
        this.form = useForm({
            project_id: null,
            image: null,
            image_id: null,
        });
    }
    store(){
        console.log(this.form);
        this.form.post(route('images.store', { project: this.form.project_id }));
    }
    remove(id){
        const confirm = window.confirm('Are you sure you want to delete this image?');
        if(confirm){
            this.form.delete(route('images.destroy', { image: id, project: this.form.project_id }));
        }
    }
}
