import { ref } from "vue";
class Popup {
    constructor(toggleRef, dialogRef) {
        this.toggleRef = toggleRef;
        this.dialogRef = dialogRef;
        this.toggleRef.value.addEventListener('click', () => {
            this.open();
        });
        this.dialogRef.value.addEventListener('click', () => {
            this.close();
        });
    }

    open() {
        this.dialogRef.value.showModal();
    }
    close() {
        this.dialogRef.value.close();
    }
}
