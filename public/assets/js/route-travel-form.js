var tableCode = "<table class='table table-striped'><tbody></tbody></table>";
var advances = [];
var routes = [];
var costs = [];
var documents = [];
var checks = [];

$('.add-more').each(function() {
	var button = $(this);
	button.click(function(event){
		var parentBox = $(this).parents('.box').get(0);
		var inputs = $(parentBox).find(':input[type="text"], textarea, div.iradio_minimal.checked>input[type="radio"]');
		var type = $(button).val();
		//if (validateInputs(inputs)) {
		var obj;
		var boxFooter = $(parentBox).find('.box-footer');
		if ($(boxFooter).children('table').first().length > 0) {
			var tbody = $(boxFooter).find('table tbody');
			obj = addRow(inputs, tbody, type);
		} else {
			obj = addTableAndRow(inputs, boxFooter, parentBox, type);
		}
		addObjectInArray(obj, type);
		//} else {
		//	alertify.alert("Preencha os campos para adicioná-los");
		//}
	});
});

function validateInputs(inputs) {
	var hasError = false;
	$.each(inputs, function(index, element) {
		var value = $(element).val();
		if (!value) {
			hasError = true;
			return false;
		}
	});
	if (hasError) {
		return false;
	} else {
		return true;
	}
}

function addRow(inputs, tbody, type) {
	var obj = {};
	var row = "";
	var lastIndex = getLastIndexTable(tbody);
	var nextIndex;
	if (isNaN(lastIndex)) {
		nextIndex = 1;
	} else {
		nextIndex = lastIndex + 1;
	}
	row += "<tr><td>" + nextIndex + "</td>";
	$.each(inputs, function (index, element) {
		row += "<td>" + newRowValue(element) + "</td>";
		obj[$(element).attr('name')] = $(element).val();
		if ($(element).attr('type') != 'radio') {
			$(element).val("");
		}
	});
	row+="<td><button type='button' class='btn btn-warning btn-sm' data-toggle='tooltip'"+
	" data-original-title='Clique para remover' value='"+ type + "' onclick='removeRow(this)'>"+
	"<i class='fa fa-fw fa-trash-o'></i></button></td></tr>";
	$(tbody).append(row);
	$('button').tooltip();//inicia o tooltip do botão
	return obj;
}

function newRowValue(element) {
	if ($(element).attr('type') == 'radio') {
		if ($(element).val() == 1) {
			return "Sim";
		} else {
			return "Não";
		}
	} else {
		return $(element).val();
	}
}

function addTableAndRow(inputs, boxFooter, parentBox, type) {
	$(boxFooter).append(tableCode);
	var tbody = $(boxFooter).find('table tbody');
	var head = "<tr><td><b>#</b></td>";
	var labels = $(parentBox).find('.form-group > label');
	$.each(labels, function (index, element) {
		head += "<td><b>" + $(element).text() + "</b></td>";
	});
	head += "<td></td></tr>";
	$(tbody).append(head);
	return addRow(inputs, tbody, type);
}

function getLastIndexTable(tbody) {
	var lastTR = $(tbody).find('tr:last-child').first();
	var firstTD = $(lastTR).find('td:first-child').first();
	var tdValue = parseInt($(firstTD).text());
	return tdValue;
}

function removeRow(button) {
	var type = $(button).val();
	var tr = $(button).parent().parent();
	var firstTD = $(tr).find('td:first-child').first();
	var tdValue = parseInt($(firstTD).text());
	var nextTRs = $(tr).nextAll();
	tr.remove();
	$.each(nextTRs, function (index, element) {
		var td = $(element).find('td').first();
		var tdValue = parseInt(td.text());
		td.text(tdValue - 1);
	});
	if (type == '_new_route') {
		routes.splice(tdValue-1,1);
	} else if (type == '_new_foward') {
		advances.splice(tdValue-1,1);
	} else if (type == '_new_cost') {
		costs.splice(tdValue-1,1);
	} else if (type == '_new_document') {
		documents.splice(tdValue-1,1);
	} else if (type == '_new_check') {
		checks.splice(tdValue-1,1);
	}
}

function addObjectInArray(obj, type) {
	if (type == '_new_route') {
		routes.push(obj);
	} else if (type == '_new_foward') {
		advances.push(obj);
	} else if (type == '_new_cost') {
		costs.push(obj);
	} else if (type == '_new_document') {
		documents.push(obj);
	} else if (type == '_new_check') {
		checks.push(obj);
	}
}