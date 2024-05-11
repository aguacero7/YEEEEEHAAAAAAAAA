document.querySelectorAll(".card").forEach(function(card) { // séléctionne tous les éléments HTML avec la classe card
    card.addEventListener("mouseover", function() {        // ajoute un écouteur d\'event qui déclenche une fonction
        var text = this.querySelector(".card-text");      // on stocke la partie texte dans la variable text
        if (text) text.style.display = "block";          // si text n\'est pas vide, on affiche le texte
    });
    
    card.addEventListener("mouseout", function() {     // pour détecter quand la souris quitte la card
        var text = this.querySelector(".card-text");  // on stocke la partie texte dans la variable text
        if (text) text.style.display = "none";       // si text n\'est pas vide, onb affiche pas le texte
    });
});
