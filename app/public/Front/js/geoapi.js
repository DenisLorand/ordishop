// GEO API en Ajax et jQuery, à partir des données de La BAN (Base Adresse Nationale) de https://geo.api.gouv.fr/adresse

// jQuery UI (user interface) : utilisation du widget Autocomplete de JQuery, qui permet de trouver et sélectionner, en suggérant, des listes de valeurs pré-enregistrées lors de la saisie dans un champ

// source : https://adrien.poupa.fr/autocompletion-des-adresses-avec-la-base-adresse-nationale/

/* GET - search
 q : chaîne de caractère recherchée 
 autocomplete : active/désactive les traitements d'auto-complétion
*/

/* attributs recherchés par défaut 
 postcode : code postal
 city : nom de la commune
 name : numéro éventuel et nom de voie ou lieu dit
*/

/* Présentation du résultat par défaut en geojson
exemple: 
  "properties":{
            	"name":"8 Boulevard du Port",
            	"postcode":"80000",
            	"city":"Amiens"
} */

$("#cp").autocomplete({
	source: function (request, response) {
		$.ajax({
			url: "https://api-adresse.data.gouv.fr/search/?postcode="+$("input[name='cp']").val(), // URL de la requête pour le Code Postal - cp
			data: { q: request.term },
			dataType: "json",  // Format de réponse de type JSON
			success: function (data) {
				var postcodes = [];
				response($.map(data.features, function (item) {
					// On ajoute par un push le CP dans un array - tableau -  pour ne pas avoir plusieurs fois le même
					if ($.inArray(item.properties.postcode, postcodes) == -1) {
						postcodes.push(item.properties.postcode);
						return { label: item.properties.postcode + " - " + item.properties.city, 
								 city: item.properties.city,
								 value: item.properties.postcode
						};
					}
				}));
			}
		});
	},
	// On saisie aussi la ville
	select: function(event, ui) {
		$('#ville').val(ui.item.city);
	}
});

$("#ville").autocomplete({
	source: function (request, response) {
		$.ajax({
			url: "https://api-adresse.data.gouv.fr/search/?city="+$("input[name='ville']").val(), // URL de la requête pour la ville - city
			data: { q: request.term },
			dataType: "json",
			success: function (data) {
				var cities = [];
				response($.map(data.features, function (item) {
					// Ici on est obligé d'ajouter les villes dans un array pour ne pas avoir plusieurs fois la même
					if ($.inArray(item.properties.postcode, cities) == -1) {
						cities.push(item.properties.postcode);
						return { label: item.properties.postcode + " - " + item.properties.city, 
								 postcode: item.properties.postcode,
								 value: item.properties.city
						};
					}
				}));
			}
		});
	},
	// On saisie aussi le CP
	select: function(event, ui) {
		$('#adresse').val(ui.item.postcode);
	}
});

$("#adresse").autocomplete({
	source: function (request, response) {
		$.ajax({
			url: "https://api-adresse.data.gouv.fr/search/?postcode="+$("input[name='cp']").val(),
			data: { q: request.term },
			dataType: "json",
			success: function (data) {
				response($.map(data.features, function (item) {
					return { label: item.properties.name, value: item.properties.name};
				}));
			}
		});
	}
});