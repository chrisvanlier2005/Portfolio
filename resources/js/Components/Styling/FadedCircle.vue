<script setup>
import { defineProps } from "vue";

defineProps({
   colors: {
       type: Array,
       default: ['0,0,255', '0,50,255']
   },
   pos: {
       type: Object,
       default: { x: 0, y: 0 }
   }
});
</script>
<template>
  <div class="circle w-[30rem] h-[30rem] absolute"></div>
</template>

<script>
export default {
    name: "FadedCircle"
};
</script>

<style scoped>
  .circle{
      background: linear-gradient(blue, lightblue);
      border-radius: 50%;
      filter: blur(200px);
      opacity: .5;
      z-index: 0;
  }
</style>
