const APIKey = '45d952f68a4e990b418b9cab781d4501';
const url = 'http://api.currencylayer.com/live?access_key=' + APIKey;

const btnCalculator = document.querySelector('.btn-calculate')
const val1 = document.querySelector('.v1-value')
const val2 = document.querySelector('.v2-value')
const inputV1 = document.querySelector('.v1-input')
const inputV2 = document.querySelector('.v2-input')

const test = true;

const eu = 1
const usd = 0.84

let v1E = false;
let v2E = false;

inputV1.addEventListener('change', function () {
    v1E = true;
    v2E = false;
})

inputV2.addEventListener('change', function () {
    v2E = true;
    v1E = false;
})

btnCalculator.addEventListener('click', function (e) {
    const value1 = eval(val1.value);
    const value2 = eval(val2.value);

    let sum;

    if (v1E) {
        sum = (inputV1.value / value1) * value2;
        inputV2.value = sum.toFixed(2);
    } else if (v2E) {
        sum = (inputV2.value / value2) * value1;
        inputV1.value = sum.toFixed(2);
    }

});

if (test == false) {
    fetch(url)
        .then(response => response.json())
        .then(data => console.log(data));
}