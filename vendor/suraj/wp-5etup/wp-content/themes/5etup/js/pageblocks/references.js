// alert("References JS loaded!");
// function refCardsActive() {
//     alert("References JS loaded!");
// }

const refCards = document.querySelectorAll('.reference-card');

// First Card 
// var firstRefCard = refCards[0];
var firstRefCard = refCards[0];

firstRefCard.classList.add('active');
firstRefCardTitle = firstRefCard.getAttribute("data-title");
// firstRefCardJobtitle = firstRefCard.getAttribute("data-jobtitle");
firstRefCardContent = firstRefCard.getAttribute("data-content");
firstRefCardLink = firstRefCard.getAttribute("data-link");

// document.getElementById("reference-title").innerText = firstRefCardTitle;
// document.getElementById("reference-jobtitle").innerText = firstRefCardJobtitle;
document.getElementById("reference-content").innerText = firstRefCardContent;
document.getElementById("reference-btn").href = firstRefCardLink;

// Click card
document.addEventListener('DOMContentLoaded', () => {
    const refCards = document.querySelectorAll('.reference-card');

    refCards.forEach(el => el.addEventListener('click', event => {
        const title = el.getAttribute("data-title");
        // const jobtitle = el.getAttribute("data-jobtitle");
        const content = el.getAttribute("data-content");
        const link = el.getAttribute("data-link");

        // document.getElementById("reference-title").textContent = title;
        // document.getElementById("reference-jobtitle").textContent = jobtitle;
        document.getElementById("reference-content").textContent = content;
        document.getElementById("reference-btn").setAttribute('href', link);

        const selectedRefID = el.getAttribute("data-id");

        refCards.forEach(currentCard => {
            const currentID = currentCard.getAttribute("data-id");
            currentCard.classList.remove('active');

            if (currentID === selectedRefID) {
                currentCard.classList.add('active');
            }
        });
    }));
});


function references() {
    // alert("click");
    // console.log("Click button");

    refCards.forEach(el => el.addEventListener('click', event => {
        const title = el.getAttribute("data-title");
        const jobtitle = el.getAttribute("data-jobtitle");
        const content = el.getAttribute("data-content");
        const link = el.getAttribute("data-link");

        document.getElementById("reference-title").textContent = title;
        // document.getElementById("reference-jobtitle").textContent = jobtitle;
        document.getElementById("reference-content").textContent = content;
        document.getElementById("reference-btn").setAttribute('href', link);

        const selectedRefID = el.getAttribute("data-id");

        refCards.forEach(currentCard => {
            const currentID = currentCard.getAttribute("data-id");
            currentCard.classList.remove('active');

            if (currentID === selectedRefID) {
                currentCard.classList.add('active');
            }
        });
    }));
}
