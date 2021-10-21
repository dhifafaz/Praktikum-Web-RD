let switchTheme = document.getElementById('theme-switcher');
let htmlTag = document.querySelector('html');
let currTheme = switchTheme.value;

const UpdateTheme = (selectedTheme) => {
    switch (selectedTheme) {
        case 'night-owl':
            htmlTag.classList = 'night-owl';
            break;
        case 'bright-white':
            htmlTag.classList = 'bright-white';
            break;
        default:
            break;
    }
}

UpdateTheme(currTheme);

switchTheme.addEventListener('change', () => {
    currTheme = switchTheme.value;

    UpdateTheme(currTheme);
    
});


let selectString = document.getElementById('select-string');
let sentenceField = document.getElementById('sentence-field');
let currentString = selectString.value;

let sentences = {
    seblak: "Aku suka makan seblak di sebelah WK",
    nasgor: "Aku suka makan nasi goreng di BELWIS",
    kopi: "Aku suka minum kopi di Adiksi",
};


const UpdateSentence = (string) => {
    if (Object.keys(sentences).includes(string)) {
        sentenceField.innerHTML = sentences[string];
    }
    else {
        sentenceField.innerHTML = '';
    }
}

UpdateSentence(currentString);

selectString.addEventListener('change', () => {
    currentString = selectString.value;

    UpdateSentence(currentString);
});

let inputNumber = document.getElementById('input-number');
let button = document.getElementById('input-button');
let factorialResult = document.getElementById('factorial-result');


let calcFac = (val) => {
    let res = 1;
    for (let i = 2; i <= val; i++) {
        res *= i;
    }

    return res;
}

button.addEventListener('click', () => {
    let number = inputNumber.value;
    let result = calcFac(number);

    let finalResult = `Faktorial dari ${number} adalah ${result}`;

    factorialResult.textContent = finalResult;
    factorialResult.classList = 'answer';
});