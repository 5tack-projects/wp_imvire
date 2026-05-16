document.addEventListener("DOMContentLoaded", () => {

    const lines = [
        document.querySelector("#title-frontpage .line.one"),
        document.querySelector("#title-frontpage .line.two"),
        document.querySelector("#title-frontpage .line.three")
    ];

    const letterSpeed = 50; // ms per letter typen
    const enterDelay = 250; // extra wachttijd nadat een regel klaar is

    /**
     * Type animatie
     */
    function typeLine(element, delay = 0) {

        const originalHTML = element.innerHTML;

        const temp = document.createElement("div");
        temp.innerHTML = originalHTML;

        const text = temp.textContent;

        element.innerHTML = "";

        setTimeout(() => {

            let index = 0;

            const interval = setInterval(() => {

                index++;

                element.innerHTML = buildHTML(temp, index);

                if (index >= text.length) {

                    clearInterval(interval);

                    // regel volledig getypt
                    element.classList.add("typed");
                }

            }, letterSpeed);

        }, delay);
    }

    /**
     * Bouw originele HTML terug op
     */
    function buildHTML(node, limit, count = { value: 0 }) {

        let output = "";

        node.childNodes.forEach(child => {

            if (count.value >= limit) return;

            // tekst
            if (child.nodeType === Node.TEXT_NODE) {

                const remaining = limit - count.value;
                const textPart = child.textContent.slice(0, remaining);

                output += textPart;
                count.value += textPart.length;
            }

            // html element
            else if (child.nodeType === Node.ELEMENT_NODE) {

                const inner = buildHTML(child, limit, count);

                output += `<${child.tagName.toLowerCase()}>${inner}</${child.tagName.toLowerCase()}>`;
            }
        });

        return output;
    }

    // tekstlengtes
    const line1Length = lines[0].textContent.length;
    const line2Length = lines[1].textContent.length;

    // typing durations
    const line1Duration = line1Length * letterSpeed;
    const line2Duration = line2Length * letterSpeed;

    // delays
    const delayLine1 = 0;

    const delayLine2 =
        line1Duration +
        enterDelay;

    const delayLine3 =
        line1Duration +
        enterDelay +
        line2Duration +
        enterDelay;

    // start animaties
    typeLine(lines[0], delayLine1);
    typeLine(lines[1], delayLine2);
    typeLine(lines[2], delayLine3);

});