const cardData = [
    { title: "Flame Sword", price: 258, available: "106450", sold: 500 },
    { title: "Flame Leo", price: 356, available: "3450", sold: 858 },
    { title: "Mia Sword", price: 150, available: "1064560", sold: 574 },
    { title: "Flame Sword", price: 45, available: "5000", sold: 4567 },
    { title: "Eni Sword", price: 4545, available: "3450", sold: 785 },
    { title: "Flame Sword", price: 4554, available: "10", sold: 546 },
    { title: "Kia Sword", price: 457, available: "5896", sold: 456 },
    { title: "Flame Sword", price: 200, available: "14", sold: 5235 },
];

const cardsPerPage = 3;
let currentPage = 1;

function createCardHTML(card) {
    return `
    <div class="card justify-content-between">
                    <div class="image_container">
                        <div class="secret_back">
                            <div class="secret">
                            </div>
                        </div>
                        <img src="assets/images/big_nft.png" class="big_nft" alt="big_nft">
                        <p class="card_title">${card.title}</p>
                    </div>
                    <div>
                        <div class="d-flex flex-col gap-1">
                            <div class="nft_container d-flex justify-content-between">
                                <div class="nft_image d-flex align-items-center gap-2">
                                    <img src="assets/images/nft.png" class="w-full" alt="nft">
                                    <p>${card.title}</p>
                                </div>
                                <div class="nft_price d-flex align-items-center gap-2">
                                    <img src="assets/images/wax.png" class="w-full" alt="wax">
                                    <p>${card.price}</p>
                                </div>
                            </div>
                            <div class="d-flex gap-3 nft_info">
                                <p>Available:</p>
                                <span>270 / ${card.available}</span>
                            </div>
                            <div class="d-flex gap-3 nft_info">
                                <p>Sold:</p>
                                <span>${card.sold}</span>
                            </div>
                            <span class="mt-1 price">$ 200</span>
                        </div>
                    </div>
                    <a class="mybtnClaim" href="#">Claim in 2D 22H 19M 34S</a>
                </div>
    `;
}

function displayCards() {
    const itemContainer = document.getElementById("itemContainer");
    itemContainer.innerHTML = "";

    const startIndex = (currentPage - 1) * cardsPerPage;
    const endIndex = startIndex + cardsPerPage;

    for (let i = startIndex; i < endIndex && i < cardData.length; i++) {
        const cardHTML = createCardHTML(cardData[i]);
        itemContainer.innerHTML += cardHTML;
    }
}

function createPaginationLinks(totalPages) {
    const pagination = document.getElementById("pagination");
    pagination.innerHTML = "";

    let startPage = currentPage - 3;
    let endPage = currentPage + 3;

    if (startPage < 1) {
        endPage += 1 - startPage;
        startPage = 1;
    }

    if (endPage > totalPages) {
        startPage -= endPage - totalPages;
        endPage = totalPages;
    }

    if (startPage < 1) startPage = 1;

    const prevLink = document.createElement("a");
    if (currentPage <= 1) {
        prevLink.style.pointerEvents = "none";
        prevLink.style.background = "#545151";
        prevLink.style.border = "1px solid #008f00";
    }
    prevLink.href = "#";
    prevLink.className = "pagination_links";
    prevLink.innerHTML = `<img src="assets/images/chevron_left.png" alt="chevron_left"/>`;
    prevLink.addEventListener("click", (e) => {
        e.preventDefault();
        currentPage -= 1;
        displayCards();
        createPaginationLinks(totalPages);
    });
    pagination.appendChild(prevLink);

    for (let i = startPage; i <= endPage; i++) {
        const pageLink = document.createElement("a");
        if (currentPage === i) {
            pageLink.style.color = "#8BE78B";
        }
        pageLink.href = "#";
        pageLink.className = "page_link";
        pageLink.textContent = i;
        pagination.appendChild(pageLink);
        pageLink.addEventListener("click", (e) => {
            e.preventDefault();
            const pageLinks = document.querySelectorAll(".page_link");
            pageLinks.forEach((link) => link.classList.remove("active_link"));
            currentPage = i;
            pageLink.classList.add("active_link");
            displayCards();
            createPaginationLinks(totalPages);
        });
    }

    const nextLink = document.createElement("a");
    nextLink.href = "#";
    nextLink.className = "pagination_links";
    nextLink.innerHTML = `<img src="assets/images/chevron_right.png" alt="chevron_right"/>`;
    nextLink.addEventListener("click", (e) => {
        e.preventDefault();
        currentPage += 1;
        displayCards();
        createPaginationLinks(totalPages);
    });
    pagination.appendChild(nextLink);
    if (currentPage >= totalPages) {
        nextLink.style.pointerEvents = "none";
        nextLink.style.background = "#545151";
        nextLink.style.border = "1px solid #008f00";
    }
}

const totalPages = Math.ceil(cardData.length / cardsPerPage);
displayCards();
createPaginationLinks(totalPages);
