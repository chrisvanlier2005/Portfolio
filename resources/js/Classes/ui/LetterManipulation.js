export class LetterManipulation {
    rgbColors = ['0,0,255', '0,255,0', '255,0,0', '255,255,0', '255,0,255', '0,255,255', '255,255,255', '0,0,0'];
    constructor(ref) {
        console.log(ref)
        this.el = ref.value;
    }
    firstLetterToRGB(){
        console.log(this.el)
        const words = this.el.split(" ");
        let newWords = [];
        for (let i = 0; i < words.length; i++) {
            const word = words[i];
            const firstLetter = word.split("")[0];
            const firstLetterRGB = document.createElement("span");
            firstLetterRGB.style.color = `rgb(${this.rgbColors[i]})`;
            firstLetterRGB.innerText = firstLetter;
            newWords.push(firstLetterRGB.outerHTML + word.substring(1));
        }
        return newWords.join(" ");
    }

}
