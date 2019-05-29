
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

let currentImg = number => {
    let bigImg = document.getElementById('bigImg');
    let img = document.getElementById(`img${number}`);
    bigImg.src = img.src;
};

