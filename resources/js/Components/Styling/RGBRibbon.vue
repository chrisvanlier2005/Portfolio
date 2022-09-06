<template>
    <div class="ribbon-container">
        <div class="red"></div>
        <div class="green"></div>
        <div class="blue"></div>
    </div>
</template>

<script>
export default {
    name: "RGBRibbon"
};
</script>

<style scoped>
.ribbon-container{
    position: absolute;
    width: 120vw;

}
.ribbon-container div{
    box-shadow: 0 5px 10px black;
}
.ribbon-container div:nth-child(1){
    width: 80%;
    height: 20px;
    margin: auto;
}
.ribbon-container div:nth-child(2){
    width: 70%;
    height: 20px;
    margin: auto;

}
.ribbon-container div:nth-child(3){
    width: 60%;
    height: 20px;
    margin: auto;
}
.red{
    background: red;
}
.green{
    background: #00ff00;
}
.blue{
    background:blue;
}
</style>
