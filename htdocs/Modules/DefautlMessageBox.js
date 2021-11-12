export default function(title, mes, exitText) {
    mes = mes || "No Message was given";
    exitText = exitText || 'Okay';

    const div = document.createElement('div');
    const h1 = document.createElement('h1');
    const p = document.createElement('p');
    const button = document.createElement('button');

    div.classList = "defaultPopUp";
    h1.innerText = title;
    p.innerText = mes;
    button.innerText = exitText;

    h1.className = "slideIn";
    p.className = "slideIn";

    document.body.appendChild(div);

    button.addEventListener('click', function(){
        div.remove();
    })

    setTimeout(function(){
        div.append(h1, p, button);
        console.log(exitText);
    }, 500)

    return div;
}