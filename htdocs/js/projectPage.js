const projectsBtn = document.querySelectorAll(".btn-project");
// const downloadBtn = document.querySelectorAll(".downloadButton");

for (let i = 0; i < projectsBtn.length; i++) {
    projectsBtn[i].addEventListener('click', function (e) {
        window.open(projectsBtn[i].id);
    });
}

// for (let i = 0; i < downloadBtn.length; i++) {
//     downloadBtn[i].addEventListener('click', function (e) {
//         window.open(downloadBtn[i].value);
        
//     });
// }