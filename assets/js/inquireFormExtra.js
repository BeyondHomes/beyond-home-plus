/**
 * This script enables the Extra fields on the inquire form
 */

const formToggleHash = document.querySelector(
  ".campo.full.btn-show-hidden-section-container a"
);

const formHiddenSection = document.querySelector(
  ".modal-availability .hidden-section"
);

formToggleHash.addEventListener("click", (event) => {
  event.preventDefault();
  formHiddenSection.classList.toggle("open");
});
