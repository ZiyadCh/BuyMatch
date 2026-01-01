// ../assets/js/script.js
console.log("wreg");


document.addEventListener("DOMContentLoaded", function () {
  const modal = document.querySelector(".modal-window");
  const closeBtn = document.querySelector(".modal-window .close-btn");
  const seatSelect = document.querySelector("#seat-type");
  const buyNowBtn = modal.querySelector(".buy-now");

  // Close modal
  function closeModal() {
    modal.classList.remove("active");
  }

  closeBtn.addEventListener("click", closeModal);

  // Close when clicking outside
  modal.addEventListener("click", (e) => {
    if (e.target === modal) closeModal();
  });

  // Close with Escape key
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && modal.classList.contains("active")) {
      closeModal();
    }
  });

  // Handle "Book Ticket" clicks
  document.querySelectorAll(".book-ticket").forEach((button) => {
    button.addEventListener("click", function () {
      const card = this.closest(".movie-card");
      if (!card) return;

      // Extract title and year
      const titleElement = card.querySelector(".movie-title");
      const movieTitle = titleElement.childNodes[0].textContent.trim();
      const yearMatch = titleElement.textContent.match(/\(\d{4}\)/);
      const year = yearMatch ? yearMatch[0] : "";

      // Update modal title
      modal.querySelector("h2").textContent = `${movieTitle} ${year}`;

      // Reset seat selection to default (Normal)
      seatSelect.value = "normal";

      // Optional: Store movie info on modal for later use
      modal.dataset.movieTitle = movieTitle;
      modal.dataset.movieYear = year.replace(/[\(\)]/g, "");

      // Show modal
      modal.classList.add("active");
    });
  });

  // Optional: Handle "BUY NOW" – you can expand this later
  buyNowBtn.addEventListener("click", function () {
    const movieTitle = modal.querySelector("h2").textContent;
    const seatType = seatSelect.options[seatSelect.selectedIndex].text;

    alert(`Proceeding to ticket purchase:\n${movieTitle}\nSeat Type: ${seatType}`);

    // Later: redirect to buy_ticket.php with parameters
    // Example:
    // window.location.href = `buy_ticket.php?movie=${encodeURIComponent(movieTitle)}&type=${seatType}`;

    closeModal();
  });
});