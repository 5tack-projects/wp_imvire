function active_modal(specs) {
  // console.log("Function modal"); // Test function
  const modal = document.getElementById("modal");
  // const modal_content = document.getElementById("modal-content");
  const main_menu_wrapper = document.getElementById("main-menu-wrapper");
  if (!modal) return;

  const isOpen = modal.classList.contains("active");

  if (isOpen) {
    // CLOSE
    modal.classList.remove("active");
    modal.querySelectorAll(".wrapper").forEach(w => w.remove());
    return;
  }

  modal.classList.add("active");
  modal.querySelectorAll(".wrapper").forEach(w => w.remove());

  // DATA
  const img = specs?.getAttribute("data-img") || "";
  const title = specs?.getAttribute("data-title") || "";
  const contentTxt = specs?.getAttribute("data-content") || "";
  const menu = specs?.getAttribute("data-menu") || "";
  const chatbot = specs?.getAttribute("data-chatbot") || "";

  // TEST Data
  // console.log("Chatbot:", chatbot); // Test DATA

  // Build wrapper
  const wrapper = document.createElement("div");
  wrapper.className = "wrapper";
  if(menu){
    wrapper.className = "wrapper menu";
  }
  modal.appendChild(wrapper);

  // Build modal content
  const modal_content = document.createElement("div");
  modal_content.className = "modal-content";
  wrapper.appendChild(modal_content);

  // Build close button
  const closeBtn = document.createElement("button");
  closeBtn.className = "modal-close";
  closeBtn.type = "button";
  closeBtn.innerHTML = "&times;";
  closeBtn.addEventListener("click", (e) => {
    e.preventDefault();
    e.stopPropagation();
    modal.classList.remove("active");
    modal.querySelectorAll(".wrapper").forEach(w => w.remove());
  });
  modal_content.appendChild(closeBtn);

  function append_template(template_id) {
    console.log("Template ID:", template_id);
    const tpl = document.getElementById(template_id);
    const frag = tpl.content.cloneNode(true);
    console.log(frag); 
    modal_content.appendChild(frag);
  }

  // Content 
  if (menu) {
    if(menu == 'main-nav') {
      append_template('main-menu-template');
    }
  }

  if (img) {
    const image = document.createElement("img");
    image.src = img;
    image.alt = title;
    image.className = "img";
    modal_content.appendChild(image);
  }

  if (title) {
    const h1 = document.createElement("h1");
    h1.textContent = title;
    modal_content.appendChild(h1);
  }

  if (contentTxt) {
    const p = document.createElement("p");
    p.textContent = contentTxt;
    modal_content.appendChild(p);
  }

  if (chatbot) {
    // console.log("MODAL Chatbot");
    append_template('5urai-template');
  }
}
