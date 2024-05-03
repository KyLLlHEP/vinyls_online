document.addEventListener("DOMContentLoaded", function () {
    const deleteVinylModal = document.getElementById("deleteVinylModal");
    deleteVinylModal.addEventListener("show.bs.modal", function () {
        fetch("/vinyls")
            .then((response) => response.json())
            .then((data) => {
                const items = data
                    .map(
                        (vinyl) =>
                            `<li>${vinyl.artist_name} - ${vinyl.album_title}
                     <button class="btn btn-danger btn-sm" onclick="deleteVinyl(${vinyl.id})">Delete</button>
                    </li>`
                    )
                    .join("");
                document.querySelector(
                    ".modal-body"
                ).innerHTML = `<ul>${items}</ul>`;
            });
    });
});

function deleteVinyl(id) {
    fetch(`/vinyl/${id}`, {
        method: "DELETE",
        headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')
                .content,
        },
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                //Update the contents of a modal window or close it
                $("#deleteVinylModal").modal("hide");
            }
        });
}
