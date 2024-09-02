<div class="container">
	<div class="input-field col s12">
		<select id="operation">
			<option value="1">Subir Queja</option>
			<option value="2">Subir Reclamación</option>
			<option value="3">Subir Aclaración</option>
		</select>
		<label>Selecciona el tipo de operación a realizar</label>
	</div>
</div>
<form id="form-quejas" method="post" style="margin: 10px; padding: 5px">
	<h2>Subir Queja</h2>
	<!-- Queja 1 -->
	<div class="input-field col s6">
		<input
				placeholder="16/03/2024" id="fquejas[0][causa]" type="text" class="validate" name="quejas[0][causa]"
				value="0666">
		<label for="quejas[0][causa]">Causa.</label>
	</div>
	<div class="input-field col s6">
		<input
				placeholder="16/03/2024" id="fquejas[0][recepcion]" type="text" class="validate"
				name="quejas[0][recepcion]"
				value="16/03/2024">
		<label for="quejas[0][recepcion]">Fecha de recepcion.</label>
	</div>
	<div class="input-field col s12">
		<select name="quejas[0][medio]">
			<option value="1">Correo electrónico</option>
			<option value="2">Página de internet</option>
			<option value="3">Sucursales</option>
			<option value="4">Teléfono</option>
			<option value="5">UNE</option>
			<option value="6">CONDUSEF-SIGE gestión electrónica</option>
			<option value="7">CONDUSEF-Gestión ordinaria</option>
			<option value="8">Mensajeria</option>
			<option value="9">Fax</option>
			<option value="17">Oficinas de atención</option>
			<option value="18">Centro de atención telefónica</option>
			<option value="20">Aplicación movil</option>
			<option value="21">Interfaces</option>
			<option value="22">Api's</option>
			<option value="23">Bots</option>
		</select>
		<label>Medio de recepcion.</label>
	</div>
	<button type="submit">Enviar Quejas</button>
</form>
<form id="form-reclamaciones" method="post" style="margin: 10px; padding: 5px">
	<h2>Subir Reclamación</h2>
	<!-- Queja 1 -->
	<div class="input-field col s6">
		<input
				placeholder="0162" id="reclamaciones[0][causa]" type="text" class="validate"
				name="reclamaciones[0][causa]"
				value="0162">
		<label for="reclamaciones[0][causa]">Causa.</label>
	</div>
	<div class="input-field col s6">
		<input
				placeholder="16/03/2024" id="reclamaciones[0][recepcion]" type="text" class="validate"
				name="reclamaciones[0][recepcion]"
				value="16/03/2024">
		<label for="reclamaciones[0][recepcion]">Fecha de recepcion.</label>
	</div>
	<div class="input-field col s6">
		<input
				placeholder="16/03/2024" id="reclamaciones[0][atencion]" type="text" class="validate"
				name="reclamaciones[0][atencion]"
				value="16/03/2024">
		<label for="reclamaciones[0][atencion]">Fecha de atencion</label>
	</div>
	<div class="input-field col s6">
		<input
				placeholder="16/03/2024" id="reclamaciones[0][atencion]" type="text" class="validate"
				name="reclamaciones[0][atencion]"
				value="16/03/2024">
		<label for="reclamaciones[0][atencion]">Fecha de atención</label>
	</div>
	<div class="input-field col s6">
		<input
				placeholder="16/03/2024" id="reclamaciones[0][resolucion]" type="text" class="validate"
				name="reclamaciones[0][resolucion]"
				value="16/03/2024">
		<label for="reclamaciones[0][resolucion]">Fecha de resolución</label>
	</div>
	<div class="input-field col s6">
		<input
				placeholder="16/03/2024" id="reclamaciones[0][notificacion]" type="text" class="validate"
				name="reclamaciones[0][notificacion]"
				value="16/03/2024">
		<label for="reclamaciones[0][notificacion]">Fecha de notificación</label>
	</div>
	<div class="input-field col s12">
		<select name="reclamaciones[0][medio]">
			<option value="1">Correo electrónico</option>
			<option value="2">Página de internet</option>
			<option value="3">Sucursales</option>
			<option value="4">Teléfono</option>
			<option value="5">UNE</option>
			<option value="6">CONDUSEF-SIGE gestión electrónica</option>
			<option value="7">CONDUSEF-Gestión ordinaria</option>
			<option value="8">Mensajeria</option>
			<option value="9">Fax</option>
			<option value="17">Oficinas de atención</option>
			<option value="18">Centro de atención telefónica</option>
			<option value="20">Aplicación movil</option>
			<option value="21">Interfaces</option>
			<option value="22">Api's</option>
			<option value="23">Bots</option>
		</select>
		<label>Medio de recepcion.</label>
	</div>
	<button type="submit">Enviar Aclaracion</button>
</form>
<form id="form-aclaraciones" method="post" style="margin: 10px; padding: 5px">
	<h2>Subir Aclaración</h2>
	<!-- Queja 1 -->
	<div class="input-field col s6">
		<input
				placeholder="0552" id="aclaraciones[0][causa]" type="text" class="validate"
				name="aclaraciones[0][causa]"
				value="0552">
		<label for="aclaraciones[0][causa]">Causa.</label>
	</div>
	<div class="input-field col s12">
		<select name="aclaraciones[0][medio]">
			<option value="1">Correo electrónico</option>
			<option value="2">Página de internet</option>
			<option value="3">Sucursales</option>
			<option value="4">Teléfono</option>
			<option value="5">UNE</option>
			<option value="6">CONDUSEF-SIGE gestión electrónica</option>
			<option value="7">CONDUSEF-Gestión ordinaria</option>
			<option value="8">Mensajeria</option>
			<option value="9">Fax</option>
			<option value="17">Oficinas de atención</option>
			<option value="18">Centro de atención telefónica</option>
			<option value="20">Aplicación movil</option>
			<option value="21">Interfaces</option>
			<option value="22">Api's</option>
			<option value="23">Bots</option>
		</select>
		<label>Medio de recepcion.</label>
	</div>
	<div class="input-field col s6">
		<input
				placeholder="16/03/2024" id="aclaraciones[0][aclaracion]" type="text" class="validate"
				name="aclaraciones[0][aclaracion]"
				value="16/03/2024">
		<label for="aclaraciones[0][aclaracion]">Fecha de aclaración.</label>
	</div>
	<div class="input-field col s6">
		<input
				placeholder="16/03/2024" id="aclaraciones[0][atencion]" type="text" class="validate"
				name="aclaraciones[0][atencion]"
				value="16/03/2024">
		<label for="aclaraciones[0][atencion]">Fecha de atención.</label>
	</div>
	<div class="input-field col s6">
		<input
				placeholder="16/03/2024" id="aclaraciones[0][resolucion]" type="text" class="validate"
				name="aclaraciones[0][resolucion]"
				value="16/03/2024">
		<label for="aclaraciones[0][resolucion]">Fecha de resolución.</label>
	</div>
	<div class="input-field col s6">
		<input
				placeholder="16/03/2024" id="aclaraciones[0][notificacion]" type="text" class="validate"
				name="aclaraciones[0][notificacion]"
				value="16/03/2024">
		<label for="aclaraciones[0][notificacion]">Fecha de notificación.</label>
	</div>
	<button type="submit">Enviar Quejas</button>
</form>
<script>
	$(document).ready(function () {
		$("select").formSelect();
		$("#operation").on("change", function () {
			let origin = $(this).val();
			console.log(origin);
			if (origin === "1") {
				console.log("Quejas");
				$("#form-quejas").css({"display": "block"});
				$("#form-reclamaciones").css("display", "none");
				$("#form-aclaraciones").css("display", "none");
			} else if (origin === "2") {
				console.log("Reclamaciones");
				$("#form-quejas").css("display", "none");
				$("#form-reclamaciones").css("display", "block");
				$("#form-aclaraciones").css("display", "none");
			} else if (origin === "3") {
				console.log("Aclaraciones");
				$("#form-quejas").css("display", "none");
				$("#form-reclamaciones").css("display", "none");
				$("#form-aclaraciones").css("display", "block");
			}
		}).change();
	});
	$("#form-quejas").on("submit", function (e) {
		e.preventDefault();
		$.ajax({
			url: "https://api-solve.local/reuneQueja",
			type: "POST",
			data: $(this).serialize(),
			success: function (response) {
				// Aquí recibes los enlaces a los PDFs generados y los descargas
				response.forEach(function (pdfUrl) {
					window.open(pdfUrl);
				});
			},
			error: function (error) {
				alert("Error al enviar las quejas.");
			}
		});
	});
	$("#form-reclamaciones").on("submit", function (e) {
		e.preventDefault();
		$.ajax({
			url: "https://api-solve.local/reuneReclamacion",
			type: "POST",
			data: $(this).serialize(),
			success: function (response) {
				// Aquí recibes los enlaces a los PDFs generados y los descargas
				response.forEach(function (pdfUrl) {
					window.open(pdfUrl);
				});
			},
			error: function (error) {
				alert("Error al enviar las quejas.");
			}
		});
		$("#form-reclamaciones").on("submit", function (e) {
			e.preventDefault();
			$.ajax({
				url: "https://api-solve.local/reuneReclamaciones",
				type: "POST",
				data: $(this).serialize(),
				success: function (response) {
					// Aquí recibes los enlaces a los PDFs generados y los descargas
					response.forEach(function (pdfUrl) {
						window.open(pdfUrl);
					});
				},
				error: function (error) {
					alert("Error al enviar las reclamaciones.");
				}
			});
		});
	});
	$("#form-aclaraciones").on("submit", function (e) {
		e.preventDefault();
		$.ajax({
			url: "https://api-solve.local/reuneAclaracion",
			type: "POST",
			data: $(this).serialize(),
			success: function (response) {
				// Aquí recibes los enlaces a los PDFs generados y los descargas
				response.forEach(function (pdfUrl) {
					window.open(pdfUrl);
				});
			},
			error: function (error) {
				alert("Error al enviar las quejas.");
			}
		});
		$("#form-reclamaciones").on("submit", function (e) {
			e.preventDefault();
			$.ajax({
				url: "https://api-solve.local/reuneReclamaciones",
				type: "POST",
				data: $(this).serialize(),
				success: function (response) {
					// Aquí recibes los enlaces a los PDFs generados y los descargas
					response.forEach(function (pdfUrl) {
						window.open(pdfUrl);
					});
				},
				error: function (error) {
					alert("Error al enviar las reclamaciones.");
				}
			});
		});
	});
</script>