if (document.querySelector('.closePage')) {

    document.querySelector('.closePage').addEventListener('click', function () {
        window.close();
    });
}

if (document.querySelector('.projectButton')) {

    document.querySelector('.projectButton').addEventListener('click', function () {
        window.open(document.querySelector('.projectButton').id);
    });

}