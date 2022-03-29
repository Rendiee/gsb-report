function addMotifAutre(mot) {
	if ($(mot).val() == 9) {
		$("#divmotifautre").append(
			'<textarea required name="motif-autre" id="motif-autre" placeholder="Veuillez saisir le motif autre" class="form-control m-0 mt-2"></textarea>'
		);
		$("#motif-autre").focus();
	} else {
		$("#motif-autre").remove();
	}
}
function addMedicament(med) {
	if ($(med).val() != "default") {
		$("#medoc-autre").remove();
		$("#medoc").after(
			$('<div class="d-flex flex-column" id="medoc-autre">').append(
				$('<label for="medicamentproposer2" id="labelMedoc">2ème médicament présenté :</label>')
			)
		);
		$("#labelMedoc").after(
			$('<select name="medicamentproposer2" id="medicamentproposer2" class="form-select m-0">').append(
				'<option value="default">- Choisissez un médicament -</option>'
			)
		);
		$(".listemedoc").clone().appendTo("#medicamentproposer2");
		var val = $(med).val();
		$("#medicamentproposer2>.listemedoc[value='" + val + "']").remove();
	} else {
		$("#medoc-autre").remove();
	}
}

function addEchantillon(ech) {
	if (ech.checked) {
		$("#redigerEtEchantillon").after(
			'<div class="col-8 d-flex flex-column justify-content-center align-items-center mt-3 mb-5 mx-auto" id="addechantillon"><div id="unEchantillon" class=" mb-1 d-flex flex-row"><input min="1" max="10" value="1" class="form-control me-1 rounded w-25 text-center" id="nbEchantillon" type="number"><button type="button" onclick="addOtherEchantillon();" class="btn btn-outline-secondary"><i class="bi bi-plus-lg"></i></button></div></div>'
		);
		$("#unEchantillon").prepend(
			$('<select name="echantillonadd" id="echantillonadd" class="form-select m-0 me-1">').append(
				'<option value="default">- Choisissez un médicament -</option>'
			)
		);
		$(".listemedoc").clone().appendTo("#echantillonadd");
		$("#echantillonadd").focus();
	} else {
		if (confirm("Voulez-vous vraiment décocher Échantillon ?")) {
			$("#addechantillon").remove();
		} else {
			$(ech).prop("checked", true);
		}
	}
}

function addOtherEchantillon() {
	$("#unEchantillon").clone().appendTo("#addechantillon");
}
