
window.onload = function() {

    setTimeout(function() {

        document.getElementById('preloader').classList.add('hidden');

    }, 5000);

};

let openModal = () => {
    document.getElementById("modal").style.display = "block";
};

let closeModal = () => {
    document.getElementById("modal").style.display = "none";
};

let currentImg = (number, viewsCount) => {
    let bigImg = document.getElementById('bigImg');
    let img = document.getElementById(`img${number}`);
    bigImg.src = img.src;

    let views = document.getElementById('viewsCounter');
    views.innerText = `Просмотров: ${viewsCount}`;

    makeGETRequest(`../engine/ajax.php?id=${number}`);

};

let makeGETRequest = url => {
    let xhr;

    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            console.log('+1');
        }
    }

    xhr.open('GET', url, true);
    xhr.send();
};