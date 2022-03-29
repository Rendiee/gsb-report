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
		$( ".listemedoc" ).clone().appendTo( "#medicamentproposer2" );
		var val = $(med).val();
		$("#medicamentproposer2>.listemedoc[value='"+val+"']").remove();
	} else {
		$("#medoc-autre").remove();
	}
}

function addEchantillon(ech){
	if(ech.checked){		
		$('#redigerEtEchantillon').after('<div id="addechantillon">eoh</div>');
	}else{
		$('#addechantillon').remove();
	}
}
