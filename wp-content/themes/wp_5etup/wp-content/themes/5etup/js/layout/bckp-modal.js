(function () {
  const MODAL_ID = "modal";
  const KEEP_KEY = "keepChatModalOpen";

  function getModal() {
    return document.getElementById(MODAL_ID);
    // console.log("Function: getModal");
  }

  window.activate_modal = function (trigger) {
    const modal = getModal();
    if (!modal) return;
    modal.classList.remove("hidden");
    document.body.classList.add("modal-open");
    // console.log("Modal open");

    const img = trigger.getAttribute("data-img") || "";
    const title = trigger.getAttribute("data-title") || "";
    // const excerpt = trigger.getAttribute("data-excerpt") || "";
    const contentTxt = trigger.getAttribute("data-content") || "";
    const menu = trigger.getAttribute("data-menu") || "";

    // const tpl_menu = document.getElementById('main-menu-template');
    var tpl_menu = document.getElementById('main-menu-template');
    var main_nav = document.getElementById("main-nav");
    // const menu_main_container = tpl_menu.getElementById('main-nav');
    // const menu_main_container = tpl_menu.querySelector(".menu-main-container");
    const menuClone = tpl_menu.content.cloneNode(true);
    
    // Testing button
    console.log("Dataset loaded");
    console.log("IMG:", img);
    console.log("Title:", title);
    // console.log("Excerpt:", excerpt);
    console.log("Content text:", contentTxt);
    console.log("Menu:", tpl_menu);
    console.log("Main nav:", main_nav);

    const modal_content = modal.querySelector(".modal-content");
    let inner_html = '';

    inner_html += '<button class="modal-close" onclick="hide_modal()">×</button>';

    if (img) {
        inner_html += `<img src="${img}" alt="${title}" class="img">`;
    }

    if (title || contentTxt) {
      inner_html += '<div class="content">';
    }

      if (title) {
          inner_html += `<h1>${title}</h1>`;
      }

      if (contentTxt) {
          inner_html += `<p>${contentTxt}</p>`;
      }

    if (title || contentTxt) {
      inner_html += '</div>';
    }

    modal_content.innerHTML = inner_html;
  };

  window.hide_modal = function (e) {
    if (e) e.stopPropagation();

    const modal = getModal();
    if (!modal) return;

    modal.classList.add("hidden");
    document.body.classList.remove("modal-open");

    sessionStorage.removeItem(KEEP_KEY); // don't open after closing
  };

  // Jouw template gebruikt onclick="hide_modal_()"
  window.hide_modal_ = window.hide_modal;

  // Zet flag zodat modal na reload weer opent
  function markKeepOpen() {
    sessionStorage.setItem(KEEP_KEY, "1");
  }

  window.modal = function (trigger) {
    if (!trigger) return;
    const img = trigger.getAttribute("data-img") || "";
    const title = trigger.getAttribute("data-title") || "";
    const excerpt = trigger.getAttribute("data-excerpt") || "";
    const contentTxt = trigger.getAttribute("data-content") || "";
    const menu = trigger.getAttribute("data-menu") || "";
    
    // Testing button
    console.log("button click");
    console.log("IMG:", img);
    console.log("Title:", title);
    console.log("Excerpt:", excerpt);
    console.log("Content text:", contentTxt);

    const modal = getModal();
    if (!modal) return;

    const modal_content = modal.querySelector(".modal-content");
    if (!modal_content) return;

    // Verwijder eerdere dynamische blok (als die bestaat)
    const prev = modal_content.querySelector(".js-modal-dynamic");
    if (prev) prev.remove();

    // Bouw nieuwe dynamische inhoud
    const wrap = document.createElement("div");
    wrap.className = "js-modal-dynamic";

    if (img) {
      const image = document.createElement("img");
      image.src = img;
      image.alt = title || "";
      image.className = "img";
      wrap.appendChild(image);
    }

    if (title) {
      const h1 = document.createElement("h1");
      h1.textContent = title;
      wrap.appendChild(h1);
    }

    // Als je excerpt wilt tonen, zet hem voor content
    if (excerpt) {
      const p = document.createElement("p");
      p.textContent = excerpt;
      wrap.appendChild(p);
    }

    if (contentTxt) {
      const p = document.createElement("p");
      p.textContent = contentTxt;
      wrap.appendChild(p);
    }

    if (menu) {
      const p = document.createElement("p");
      p.textContent = contentTxt;
      wrap.appendChild(p);
    }

    // Plaats bovenaan in modal-content (zonder de rest van je PHP/chat te slopen)
    modal_content.insertBefore(wrap, modal_content.firstChild);

    // Open modal
    window.activate_modal();
  };

  // Init
  function init() {
    const modal = getModal();
    if (!modal) return;

    // 1) Voorkom dat clicks binnen de modal naar #modal (overlay) bubbelen
    // Gebruik CAPTURE PHASE (true) zodat het ook inline onclick op #modal vóór is.
    const stop = (e) => e.stopPropagation();

    const wrapper = modal.querySelector(".wrapper");
    const content = modal.querySelector(".modal-content");

    if (wrapper) wrapper.addEventListener("click", stop, true);
    if (content) content.addEventListener("click", stop, true);

    // Extra defensief: ook op alle formulier-elementen binnen modal
    modal.querySelectorAll("form, button, textarea, input, select, a, label").forEach((el) => {
      el.addEventListener("click", stop, true);
    });

    // 2) Bij submit van chatbot form: modal moet na reload weer open
    document.addEventListener(
      "submit",
      function (e) {
        const form = e.target;
        if (!form) return;

        // Alleen jouw chatbot form herkennen
        const isChatbotForm = form.querySelector('input[name="chatbot"][value="1"]');
        if (!isChatbotForm) return;

        markKeepOpen();
        // Niet preventDefault: jij wilt PHP processing + reload
      },
      true
    );

    // 3) Extra: als Enter in textarea submit triggert, markeer ook alvast
    // (werkt ook als submit handler om wat voor reden dan ook niet vuurt)
    modal.addEventListener(
      "keydown",
      function (e) {
        if (e.key !== "Enter") return;

        const inChatTextarea = e.target && e.target.matches('textarea[name="bericht"]');
        if (!inChatTextarea) return;

        // Enter gaat submit veroorzaken -> modal moet open blijven na reload
        markKeepOpen();
      },
      true
    );

    // 4) Na reload: als flag gezet is, modal meteen weer openen
    if (sessionStorage.getItem(KEEP_KEY) === "1") {
      window.activate_modal();
    }
  }

  // Zorg dat init altijd loopt (ongeacht script positie)
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
})();

function modal_project(trigger) {
  console.log("Modal project");

  const img = trigger.getAttribute("data-img") || "";
  const title = trigger.getAttribute("data-title") || "";
  const excerpt = trigger.getAttribute("data-excerpt") || "";
  const contentTxt = trigger.getAttribute("data-content") || "";
  
  // Testing button
  console.log("IMG:", img);
  console.log("Title:", title);
  console.log("Excerpt:", excerpt);
  console.log("Content text:", contentTxt);

  let modal = document.getElementById('modal');

    if (!modal) {
        modal = document.createElement('div');
        modal.id = 'modal';
        document.body.appendChild(modal);
    }

    let html = `
        <div class="modal-overlay" onclick="closeModal()">
            <div class="wrapper">
                <div class="modal-content">
                    <button class="modal-close" onclick="hide_modal()">×</button>
    `;

    /* CONDITIONELE OPBOUW */
    if (img) {
        html += `<img src="${img}" alt="${title}" class="img">`;
    }

    if (title) {
        html += `<h1>${title}</h1>`;
    }

    // if (excerpt) {
    //     html += `<p>${excerpt}</p>`;
    // }

    if (contentTxt) {
        html += `<p>${contentTxt}</p>`;
    }

    html += `
                </div>
            </div>
        </div>
    `;

    modal.innerHTML = html;
    document.body.classList.add('modal-open');
}
