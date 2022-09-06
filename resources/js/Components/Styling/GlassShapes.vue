<script setup>
import { useMouse } from "@vueuse/core";

const { x, y, sourceType } = useMouse();
</script>
<template>
    <div class="glass-container absolute w-full h-full z-1">
        <div class="glass rect absolute"></div>
        <div class="glass rect-large absolute"></div>
        <div class="glass circle absolute"></div>
    </div>
</template>

<script>
export default {
    name: "GlassShapes"
};
</script>

<style scoped>

.glass{
    backdrop-filter: blur(15px);
    z-index: 20;
    background-color: rgba(255, 255, 255, 0.14);
    outline: solid rgba(255, 255, 255, 0.27) 1px;
    box-shadow: 0 0 15px 0px rgba(255, 255, 255, 0.2), 0 0 5px 2px rgba(0, 0, 0, 0.56);
}
.rect{
    right: 10%;
    top: 15%;
    width: 15rem;
    height: 15rem;
    border-radius: 20px;
    transform: rotate(20deg);
    animation: breathe-effect-reverse infinite 20s ease-in-out alternate;
}
.circle{
    right: 10%;
    top: 50%;
    width: 13rem;
    height: 13rem;
    border-radius: 50%;
    animation: breathe-effect infinite 7s ease-in-out alternate;
}
.rect-large {
    right: 30%;
    top: 30%;
    width: 30rem;
    height: 13rem;
    border-radius: 20px;
    animation: breathe-effect infinite 10s ease-in-out alternate;
}
@keyframes breathe-effect {
    0%{
        transform: translateY(-20%) rotate(45deg);
    }
    50% {
        transform: translateY(20%) rotate(50deg);
    }
    100% {
        transform: translateY(-20%) rotate(45deg);
    }
}
@keyframes breathe-effect-reverse {
    0%{
        transform: translateY(10%) rotate(30deg);
    }
    50% {
        transform: translateY(-10%) rotate(-5deg);
    }
    100% {
        transform: translateY(10%) rotate(30deg);
    }
}
</style>
