document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".starfield").forEach((field) => {
        if (field.dataset.ready === "true") {
            return;
        }

        field.dataset.ready = "true";

        const count = Number.parseInt(field.dataset.count || "36", 10);

        for (let index = 0; index < count; index += 1) {
            const star = document.createElement("span");
            star.className = "star";
            star.style.left = `${Math.random() * 100}%`;
            star.style.animationDuration = `${8 + Math.random() * 10}s`;
            star.style.animationDelay = `${Math.random() * 8}s`;
            star.style.opacity = (0.25 + Math.random() * 0.65).toFixed(2);
            star.style.transform = `scale(${(0.5 + Math.random()).toFixed(2)})`;
            field.appendChild(star);
        }
    });
});
