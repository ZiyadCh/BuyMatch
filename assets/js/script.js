
document.addEventListener("DOMContentLoaded", function () {
  const modal = document.querySelector(".modal-window");
  const closeBtn = document.querySelector(".modal-window .close-btn");
  const seatSelect = document.querySelector("#seat-type");
  const buyNowBtn = modal.querySelector(".buy-now");

  function closeModal() {
    modal.classList.remove("active");
  }

  closeBtn.addEventListener("click", closeModal);
  modal.addEventListener("click", (e) => { if (e.target === modal) closeModal(); });
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && modal.classList.contains("active")) closeModal();
  });

  // Handle all "Buy Ticket" buttons
  document.querySelectorAll(".book-ticket").forEach((button) => {
    button.addEventListener("click", function () {
      const card = this.closest(".match-card");
      if (!card) return;

      const team1 = card.querySelector("[data-team1]").dataset.team1;
      const team2 = card.querySelector("[data-team2]").dataset.team2;
      const date = card.querySelector("[data-date]").dataset.date;
      const location = card.querySelector("[data-location]").dataset.location;

      // Update modal
      document.getElementById("modal-match-title").textContent = `${team1} vs ${team2}`;
      document.getElementById("team1").textContent = team1;
      document.getElementById("team2").textContent = team2;
      document.getElementById("modal-date").textContent = date;
      document.getElementById("modal-location").textContent = location;

      // Reset seat selection
      seatSelect.value = "normal";

      // Store for later use
      modal.dataset.team1 = team1;
      modal.dataset.team2 = team2;
      modal.dataset.date = date;
      modal.dataset.location = location;

      modal.classList.add("active");
    });
  });

  // BUY NOW handler (expand later for PHP)
  buyNowBtn.addEventListener("click", function () {
    const team1 = modal.dataset.team1;
    const team2 = modal.dataset.team2;
    const seatType = seatSelect.options[seatSelect.selectedIndex].text;

    alert(`Ticket Purchase:\n${team1} vs ${team2}\nSeat: ${seatType}`);

    // Later: window.location = `buy_ticket.php?match=${team1}-vs-${team2}&seat=${seatType}`;
    closeModal();
  });
});