const modal = document.querySelector(".background_modal");

const closeModal = ({ target, currentTarget }) => {
  const btnCloseModal = document.querySelector(".close_modal");
  if (target === currentTarget || target === btnCloseModal) {
    event.currentTarget.remove();
  }
};

const openModal = () => {
  const modalExists = document.querySelector(".modal_iframe");
  if (!modalExists) {
    const section = document.createElement("section");
    section.classList.add("modal_iframe");
    const largura = (window.innerWidth * 60) / 100;
    const conteudo = `<div>
                        <button class="close_modal"></button>
                        <iframe width="${largura}" height="${largura / 2}" src="https://www.youtube.com/embed/4oeVCWTyUpY"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>`;
    section.innerHTML = conteudo;
    document.body.appendChild(section);

    section.addEventListener("click", function () {
      closeModal(event);
    });
  }
};

modal.addEventListener("click", openModal);