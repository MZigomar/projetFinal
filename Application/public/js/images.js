window.onload = () => {
    let links = document.querySelectorAll("[data-delete]")
    console.log(links);

    for (l of links) {
        l.addEventListener("click", function (e) {
            e.preventDefault();
            if (confirm("Voulez vous supprimer cete image ?")) {
                console.log(JSON.stringify({ "_token": this.dataset.token }))
                fetch(this.getAttribute("href"), {
                    method: "DELETE",
                    headers: {
                        "X-Requested-With": "XMLHttpRequest",
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({ "_token": this.dataset.token }),
                }).then(
                    response => response.json()
                ).then(data => {
                    data.success ? this.parentElement.remove() : alert(data.error);
                }).catch(e => alert(e));
            }
        })
    }
}