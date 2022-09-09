<template>
    <editor-content :editor="editor" class="text-black" />
</template>

<script>
import StarterKit from '@tiptap/starter-kit'
import Image from '@tiptap/extension-image';

import { Editor, EditorContent } from '@tiptap/vue-3'

export default {
    components: {
        EditorContent,
    },

    props: {
        modelValue: {
            type: String,
            default: '',
        },
    },

    emits: ['update:modelValue'],

    data() {
        return {
            editor: null,
        }
    },
    watch: {
        modelValue(value) {
            // HTML
            const isSame = this.editor.getHTML() === value

            // JSON
            // const isSame = JSON.stringify(this.editor.getJSON()) === JSON.stringify(value)

            if (isSame) {
                return
            }

            this.editor.commands.setContent(value, false)
        },
    },

    mounted() {
        this.editor = new Editor({
            extensions: [
                StarterKit,
                Image,
            ],
            editorProps: {
                attributes: {
                    class: 'prose prose-sm sm:prose lg:prose-lg xl:prose-2xl mx-auto focus:outline-none',
                },
            },
            content: this.modelValue,
            onUpdate: () => {
                // HTML
                this.$emit('update:modelValue', this.editor.getHTML())

                // JSON
                // this.$emit('update:modelValue', this.editor.getJSON())
            },
        })
    },
    methods: {
      addImg: function (url){
          console.log('added')
          if (url) {
              this.editor.chain().focus().setImage({ src: url }).run()
          }
      }

    },
    beforeUnmount() {
        this.editor.destroy()
    },
}
</script>
