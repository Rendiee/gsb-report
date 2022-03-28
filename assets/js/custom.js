// $("#listemotif").change(function () {
//         if ($(this).val() == 9) {
//             $("#text-motif-autre").append("<input id='motif-autre' class='w-25 bg-white border-0 m-0' type='text' name='motif-autre'>");
//             $("#txtOther").attr("disabled", "disabled");
//             alert('test');
//         } else {
//             $("#text-motif-autre").remove("#motif-autre");
//             $("#txtOther").removeAttr("disabled");
//             alert('test2');
//         }
//     });
function addMotifAutre(mot) {
	if ($(mot).val() == 9) {
		$("#divMotif").after(
			'<textarea required name="motif-autre" id="motif-autre" placeholder="Veuillez saisir le motif autre" class="form-control m-0"></textarea>'
		);
	} else {
		$("#motif-autre").remove();
	}
}

function addMedicament(mot) {
	if ($(mot).val() != "default") {
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
		$.ajax({});
	} else {
		$("#medoc-autre").remove();
	}
}
