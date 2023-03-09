 var act_img_gallery,
   gallery_width,
   img_gallery_width,
   product_img_width,
   date,
   time,
   horas,
   minutos,
   am_pm,
   check = true;
 var count = 0;
 var subtatal = 0,
   gestionAduanal = 0,
   cargosAdicionales = 0,
   gestionAduanalitebis = 0,
   tasaitebis = 0,
   transporteGestionValue=0,
   totalitebis = 0,
   totalpagar = 0,
   tasaitebis = 0,
   seguroitebis = 0,
   rembolso = 0,
   seguro = 0,
   pickup = 0,
   subtotal_neto=0,
   total_a_pagar = 0,
   total_gestion_cal = 0;
 newTotal_a_pagar = 0,
   cargoAdicionalExtra = 0,
   totalAPagarExtra = 0,
   Total_a_pagarMenosDescuento = 0,
   totalCheck = 0;
 aplicado = false;

 function itebis(val) {

   var itebis = parseFloat(val) / 100;

   return itebis;
 }

 function SumAll(check) {
   // var UseGestion = (function () {
   // 	if ($("#UseGestion").val() == "true")
   // 		return true;
   // 	else
   // 		return false
   // })();

   if ($(check).is(':checked')) {

     var datos = $(check).attr("id").split(",");

     subtatal += parseFloat(datos[0]);
     gestionAduanal += parseFloat(datos[1]);
     cargosAdicionales += parseFloat(datos[2]);
     seguro += parseFloat(datos[3]);
     pickup += parseFloat(datos[4]);
     rembolso += (isNaN(parseFloat(datos[5]))) ? 0 : parseFloat(datos[5]);

     if ($("#transporte").val() == 0) {
       totalitebis = 0;
     } else {
       console.log("useitebis : " + tasaitebis);
       gestionAduanalitebis * itebis(tasaitebis);
       totalitebis = (subtatal * itebis(tasaitebis)) + gestionAduanalitebis;
       seguroitebis = seguro * itebis(tasaitebis);
     }
     //  totalitebis = subtatal * itebis(tasaitebis);

     if ($("#useItebis").is(':checked')) {
       console.log("useitebis");
       totalpagar = subtatal + totalitebis + seguroitebis + cargosAdicionales + gestionAduanalitebis;
     } else {
       console.log("no useitebis");
       totalpagar = subtatal + cargosAdicionales;
       seguroitebis = 0;
       gestionAduanalitebis = 0;
     }

     subtotal_neto = subtatal + cargosAdicionales;
     total_a_pagar = totalpagar + seguro ;

     console.log("seguroitebis : " + seguroitebis);
     console.log("gestionAduanalitebis : " + gestionAduanalitebis);

     $("#subtatal").html("RD$ " + subtatal.toFixed(2));
     $("#subtototal").attr("value", subtatal.toFixed(2));
     $("#rembolsotxt").html("RD$ " + rembolso.toFixed(2));
     $("#reembolsovalue").val(rembolso.toFixed(2));

     $("#itebis").html("RD$ " + totalitebis.toFixed(2));
     $("#itbis").attr("value", totalitebis.toFixed(2));
     $("#seguroitebis").html("RD$ " + seguroitebis.toFixed(2));
     $("#txtseguroitebis").attr("value", seguroitebis.toFixed(2));

     $("#cargosAdicionales").html("RD$ " + cargosAdicionales.toFixed(2));

     $("#total").html("RD$ " + subtotal_neto.toFixed(2));
     totalCheck = totalpagar.toFixed(2);
     //     $("#gestionAduanal").html("RD$ " + gestionAduanal.toFixed(2));
     $("#gestion").val(gestionAduanal.toFixed(2));
     $("#gestionAduanaltestBox").val(gestionAduanal.toFixed(2));
     $("#gestionAduanalitebis").val(gestionAduanalitebis.toFixed(2));
     $("#gestionAduanalitebistxt").html("RD$ " + gestionAduanalitebis.toFixed(2));
     //     //////console.log("gestion" + gestionAduanal.toFixed(2));

     $("#seguro").html("RD$ " + seguro.toFixed(2));
     $("#HSeguro").attr("value", seguro.toFixed(2));
     $("#Cargos_adicionales").val(cargosAdicionales.toFixed(2));
     $("#pickup").html("RD$ " + pickup);
     $("#Pickup").val(pickup);

     $("#total_a_pagar").html("RD$ " + total_a_pagar.toFixed(2));
     $("#pago_final").html("RD$ " + total_a_pagar.toFixed(2));
     $("#total_pagar").val(Math.abs(total_a_pagar.toFixed(2)));

   } else {
     //     subtatal-=parseFloat($( check ).attr("id"));

     var datos = $(check).attr("id").split(",");
     subtatal -= parseFloat(datos[0]);
     gestionAduanal -= parseFloat(datos[1]);
     cargosAdicionales -= parseFloat(datos[2]);
     seguro -= parseFloat(datos[3]);
     pickup -= parseFloat(datos[4]);
     rembolso -= (isNaN(parseFloat(datos[5]))) ? 0 : parseFloat(datos[5]);
     transporteGestionValue = (isNaN(parseFloat($("#transporteGestionValue").val()))) ? 0 : parseFloat($("#transporteGestionValue").val());
     if ($("#transporte").val() == 0) {
       totalitebis = 0;
     } else {
        gestionAduanalitebis = gestionAduanal * itebis(tasaitebis);
       totalitebis = (subtatal * itebis(tasaitebis)) + gestionAduanalitebis;
       seguroitebis = seguro * itebis(tasaitebis);
       gestionAduanalitebis = gestionAduanal * itebis(tasaitebis);
     }
     if ($("#useItebis").is(':checked')) {
       totalpagar = subtatal + totalitebis + seguroitebis + cargosAdicionales + gestionAduanalitebis;
     } else {
       totalpagar = subtatal + cargosAdicionales;
       seguroitebis = 0;
       gestionAduanalitebis = 0;
     }
     subtotal_neto = subtatal + cargosAdicionales;
     total_a_pagar = totalpagar + seguro ;

     $("#subtatal").html("RD$ " + Math.abs(subtatal.toFixed(2)));
     $("#subtototal").attr("value", Math.abs(subtatal.toFixed(2)));

     $("#itebis").html("RD$ " + Math.abs(totalitebis.toFixed(2)));
     $("#itbis").attr("value", Math.abs(totalitebis.toFixed(2)));
     $("#seguroitebis").html("RD$ " + seguroitebis.toFixed(2));
     $("#txtseguroitebis").attr("value", seguroitebis.toFixed(2));

     $("#cargosAdicionales").html("RD$ " + Math.abs(cargosAdicionales.toFixed(2)));
     $("#gestionAduanal").html("RD$ " + Math.abs(gestionAduanal.toFixed(2)));
     $("#gestion").val(Math.abs(gestionAduanal.toFixed(2)));
     $("#gestionAduanaltestBox").val(Math.abs(gestionAduanal.toFixed(2)));
     $("#gestionAduanalitebis").val(gestionAduanalitebis.toFixed(2));
     $("#gestionAduanalitebistxt").html("RD$ " + gestionAduanalitebis.toFixed(2));
     $("#total").html("RD$ " + subtotal_neto.toFixed(2));
     totalCheck = totalpagar.toFixed(2);
     $("#seguro").html("RD$ " + Math.abs(seguro.toFixed(2)));
     $("#HSeguro").attr("value", Math.abs(seguro.toFixed(2)));
     $("#Cargos_adicionales").val(Math.abs(cargosAdicionales.toFixed(2)));
     $("#pickup").html("RD$ " + Math.abs(pickup));
     $("#Pickup").val(Math.abs(pickup));

     $("#rembolsotxt").html("RD$ " + rembolso.toFixed(2));
     $("#reembolsovalue").val(rembolso.toFixed(2));

     $("#total_pagar").val(Math.abs(total_a_pagar.toFixed(2)));

     $("#total_a_pagar").html("RD$ " + Math.abs(total_a_pagar.toFixed(2)));
     $("#pago_final").html("RD$ " + Math.abs(total_a_pagar.toFixed(2)));

   }
   $(".descuentoDinamico").trigger("keyup");
   $(".cargoAdicionalExtra").trigger("keyup");
 }

 function validarPago() {

   var totalTxt = 0;
   var ventanaTrue = $("<div id='bgAll' class='bgAll'><div class='msjAlert'><h3>Generar la factura?<span id='close'>X</span></h3><h4>Cambio del Cliente :</h4><h5>$<span id='valorRetornar'></span></h5><div><input id='Continuar' type='button' name='boton'  value='Continuar' class='boton gree' /><input type='button' name='boton' id='Cancelar' class='boton red' value='Cancelar' /></div></div></div>");
   var ventanaFalse = $("<div id='bgAll' class='bgAll'><div class='msjAlert'><h3>No se puede generar la factura<span id='close'>X</span></h3><h4>Aun falta por pagar :</h4><h5>$<span id='valorRetornar'></span></h5></div></div>");
   var ventanaO = $("<div id='bgAll' class='bgAll'><div class='msjAlert'><h3>Error!<span id='close'>X</span></h3><h4>1-)Debe seleccionar el o los paquetes a facturar.</h4><h4>2-)Debe Colocar un monto a pagar.</h4><h4>3-)Debe Colocar un tipo de comprobante fiscal.</h4></div></div>");
   var pagos = $("#container").find("input");

   if ($("#id_tipo_comprobante").val() == "") {
     $("#main").append(ventanaO);
     $('#close').on('click', function() {
       closeBgAll();
     });
     return;
   }

   if ($("#tipo_factura").val() != "2") {
     $.each(pagos, function(key, value) {

       if (!(isNaN(parseFloat($(value).val()))) && $(value).hasClass("recibido")) {
         totalTxt += parseFloat($(value).val());
       } else {

         totalTxt += 0.0;

       }

     });

     $("#monto_recibido").val(totalTxt.toFixed(2));
     if (totalTxt >= parseFloat($("#total_pagar").val())) {
       var valortotal = totalTxt - parseFloat($("#total_pagar").val());
       ventanaTrue.find("#valorRetornar").html(valortotal.toFixed(2));

       $("#main").append(ventanaTrue);

     } else if (totalTxt < parseFloat($("#total_pagar").val()) && totalTxt > 0 && parseFloat($("#total_pagar").val()) > 0) {

       var valortotal = parseFloat($("#total_pagar").val()) - totalTxt;
       ventanaFalse.find("#valorRetornar").html(valortotal.toFixed(2));
       $("#main").append(ventanaFalse);

     } else {

       $("#main").append(ventanaO);

     }

     $('#Continuar').on('click', function() {
       //////console.log($("#form-fact ").attr("id"));
       $("#form").submit();
     });

     $('#close').on('click', function() {
       closeBgAll();
     });

     $('#Cancelar').on('click', function() {
       closeBgAll();
     });

   } else {

     var subtototal = $("#subtatal").html().replace("RD$ ", "").trim();
     if (subtototal > 0) {
       $("#form").submit();
     } else {
       $("#main").append(ventanaO);
     }

     $('#Continuar').on('click', function() {
       //////console.log($("#form-fact ").attr("id"));
       $("#form").submit();
     });

     $('#close').on('click', function() {
       closeBgAll();
     });

     $('#Cancelar').on('click', function() {
       closeBgAll();
     });
   }
 }

 function closeBgAll() {
   $("#bgAll").remove();
 }

 function addRow() {
   count++;
   //copia todas las celdas del registro
   var row = $("#start").clone().find("td");
   var newRow = $("<tr id='start'></tr>");
   $("#start").removeAttr("id");

   //recorre cada celda
   $.each(row, function(keyvalue, value) {

     var cell = $("<td></td>");
     var spanCount = $(value).find('span');
     var valueTota = 0;
     $(".recibido").each(function(e) {
       valueTota += parseFloat($(this).val());
     });

     //     ////console.log(valueTota);

     if (spanCount) {

       if (!(isNaN(parseInt(spanCount.html())))) {

         count = parseInt($(spanCount).html()) + 1;
         $(spanCount).html(count);
         cell.append(spanCount);

       } else {

         cell.append(spanCount);

       }

     }

     var inputTd = $(value).find("input");
     var selectTd = $(value).find("select");

     if (inputTd.length != 0) {

       if (inputTd.hasClass("recibido") === true) {
         var value = (isNaN(parseFloat($("#total_pagar").val()) - valueTota) === true) ? 0 : (parseFloat($("#total_pagar").val()) - valueTota);
         inputTd.val(value);
       }
       var text = inputTd.attr("name").split("");

       if (inputTd.attr("type") == "hidden") {

         inputTd.val(parseInt(inputTd.val()) + 1);

       }

       if (!(isNaN(parseInt(text[text.length - 1])))) {

         text[text.length - 1] = parseInt(text[text.length - 1]) + 1;

       }

       inputTd.attr("name", text.join(""));
       cell.append(inputTd);
     }


     if (selectTd.length != 0) {

       var text = selectTd.attr("name").split("");

       if (!(isNaN(parseInt(text[text.length - 1])))) {

         text[text.length - 1] = parseInt(text[text.length - 1]) + 1;

       }

       $(selectTd).attr("name", text.join(""));
       cell.append(selectTd);
     }

     newRow.append(cell);
   });

   $("#container").append(newRow);

   // $("#start td:nth-child(2) input").on("focus",function(){

   // addRow();
   // enterNext();
   // });
 }

 function addRow2() {

   //copia todas las celdas del registro
   var row = $("#start2").clone().find("td");
   var newRow = $("<tr id='start2'></tr>");
   var count = 0;
   $("#start2").removeAttr("id");

   //recorre cada celda
   $.each(row, function(keyvalue, value) {

     var cell = $("<td></td>");
     var spanCount = $(value).find('span');

     if (spanCount) {

       if (!(isNaN(parseInt(spanCount.html())))) {

         count = parseInt($(spanCount).html()) + 1;
         $(spanCount).html(count);
         cell.append(spanCount);

       } else {

         cell.append(spanCount);

       }

     }

     var inputTd = $(value).find("input");
     var selectTd = $(value).find("select");

     if (inputTd.length != 0) {

       inputTd.removeAttr("value");
       var text = inputTd.attr("name").split("");

       if (inputTd.attr("type") == "hidden") {

         inputTd.val(count);

       }

       if (!(isNaN(parseInt(text[text.length - 1])))) {

         text[text.length - 1] = parseInt(text[text.length - 1]) + 1;

       }

       inputTd.attr("name", text.join(""));
       cell.append(inputTd);
     }


     if (selectTd.length != 0) {

       var text = selectTd.attr("name").split("");

       if (!(isNaN(parseInt(text[text.length - 1])))) {

         text[text.length - 1] = parseInt(text[text.length - 1]) + 1;

       }

       $(selectTd).attr("name", text.join(""));
       cell.append(selectTd);
     }

     newRow.append(cell);
   });

   $("#container2").append(newRow);

   // $("#start td:nth-child(2) input").on("focus",function(){

   // addRow();
   // enterNext();
   // });
 }

 function deleteRow(element) {

   if ($(element).hasClass("deleteRow")) {

     if ($(element).parent().parent().attr("id") == "start") {

       var tr = $(element).parent().parent().parent().find("tr");
       $(tr[tr.length - 2]).attr("id", "start");
       $(element).parent().parent().remove();

     } else {

       $(element).parent().parent().remove();

     }

   }

 }

 function resizeItemProduct() {

   product_img_width = $(".product-img").css("width");
   $(".product-img").css("height", product_img_width);

   $(".product-img").each(function(item) {
     var width = parseInt($(this).find("img").css("width").replace("px", "")),
       height = parseInt($(this).find("img").css("height").replace("px", ""));

     if (width > height) {

       $(this).find("img").css({
         position: "absolute",
         top: "50%",
         left: "50%",
         marginLeft: (width / 2) * (-1),
         marginTop: (height / 2) * (-1)
       });
     }

     if (height > width) {
       $(this).find("img").css({
         width: "auto",
         height: "100%",
         position: "absolute",
         top: "50%",
         left: "50%",
         marginLeft: (width / 2) * (-1),
         marginTop: (height / 2) * (-1)
       });

       width = parseInt($(this).find("img").css("width").replace("px", ""));
       height = parseInt($(this).find("img").css("height").replace("px", ""));

       $(this).find("img").css({

         marginLeft: (width / 2) * (-1),
         marginTop: (height / 2) * (-1)
       });

     }
   });

 }

 function resizeGalery() {
   gallery_width = $("#gallery-product").css("width");
   $("#act-img-gallery").css("height", gallery_width);
   img_gallery_width = $(".img-gallery li").css("width");
   $(".img-gallery li").css("height", img_gallery_width);

 }

 function plus_cero(hora) {
   if (hora < 10) {
     hora = "0" + hora;
   }
   return hora;
 }

 function reloj() {
   time = new Date();
   horas = time.getHours();
   minutos = time.getMinutes();
   date = time.getDate() + " / " + (time.getMonth() + 1) + " / " + time.getFullYear()
   if (horas > 12) {
     horas -= 12;
     am_pm = "PM";
   } else {
     am_pm = "AM";
   }


   $("#time").html(plus_cero(horas) + ":" + plus_cero(minutos));
   $("#AM_PM").html(am_pm);
   $("#date").html(date);
 }

 $(function() {

   if ($("[data-scrollTo]").length > 0) {
     $('html, body').animate({
       scrollTop: $("#" + $("[data-scrollTo]").data("scrollTo")).offset().top - 200
     }, 500);
   }
   // $('.list').stacktable();
   $("#item-gallery li").on("click", function() {
     var url_img = $(this).find("img").attr("src");
     $("#act-img-gallery").find("img").attr("src", url_img);
   });

   window.addEventListener("message", receiveMessage);

   $(".list-style button").on("click", function() {

     $(this).parent().find("button").removeClass("act");
     $(this).addClass("act");
     if ($(this).attr("id") == "is-grip") {
       $("#products").removeClass("is-row");
       $("#products").addClass("is-grip");
     } else {
       $("#products").removeClass("is-grip");
       $("#products").addClass("is-row");
     }

   });

   if ($("#act-img-gallery").length > 0) {
     resizeGalery();
   }

   if ($(".div-custo-height").length > 0) {
     $(".div-custo-height").css("height", $(".div-custo-height").data("height"))
   }

   $(window).bind("load resize", function() {
     if ($("#act-img-gallery").length > 0) {
       resizeGalery();
     }

     if ($(".product-img").length > 0) {
       resizeItemProduct();
     }

   });

   reloj();

   setInterval(function() {
     reloj();
   }, 1000);

   $(".modal-button").on("click", function() {

     var modal = $("#modal-" + $(this).attr("id"));

     if (modal.css("display") == "none") {
       modal.css("display", "block");
       //////console.log("open");
     } else {
       //////console.log("close");
       modal.css("display", "none");
     }
   });

   tasaitebis = parseFloat($("#itebisValue").html());
   // //////console.log(tasaitebis);

   $("input[name='chk[]']").on("click", function() {
     //     //////console.log("click");
     SumAll(this);

   });

   $("#transporteGestionValue").on("keyup", function () {
      $(".descuentoDinamico").trigger("keyup");
      $(".cargoAdicionalExtra").trigger("keyup");
      $("#gestionAduanaltestBox").trigger("keyup");
   });



   $("input[name='seg[]']").on("click", function() {
     var check = $(this).parent().parent().find("input[name='chk[]']");
     var data = check.attr("id").split(",");
     check.trigger("click");
     if ($(this).is(':checked')) {
       data[3] = $(this).val();
       check.attr("id", data.join(","));
       check.trigger("click");
     } else {
       data[3] = 0;
       check.attr("id", data.join(","));
       check.trigger("click");
     }
   });

   $("#plus").on("click", function() {
     addRow();
   });
   $("#plus2").on("click", function() {
     addRow2();
   });

   $("table").on("click", "span", function() {
     deleteRow(this);
     $(".cargoAdicionalExtra").trigger("keyup");
   });

   $("#validar").on("click", function() {
     validarPago();
   });

   $("#checkAll").on("click", function() {
     if (check) {
       $(this).val("Desmarcar todos");
       $(".list").find("input[type='checkbox']").prop("checked", true);
       check = false;
     } else {
       $(this).val("Marcar todos");
       $(".list").find("input[type='checkbox']").prop("checked", false);
       check = true;
     }
   });

   if ($(".autoCheck").length > 0) {
     listcheck();
   }

   calculateShipping();
   boxNumbers();
   initCal();
   changeGestion();
   $("#gestionAduanaltestBox").trigger("keyup");
 });

 function calculateShipping() {
   $(".monto").bind('textchange', function(event, previousText) {

     var cantInput = $(this);
     var totalR = cantInput.parent().parent().find(".totalR");
     var itbis = cantInput.parent().parent().find(".itbis");
     var fee = cantInput.parent().parent().find(".fee");
     var totalRInput = cantInput.parent().parent().find(".totalRInput");

     var cant = (!isNaN(parseFloat(cantInput.val()))) ? parseFloat(cantInput.val()) : 0.0,
       itbisVal = (!isNaN(parseFloat(itbis.val()))) ? parseFloat(itbis.val()) : 0.0,
       feeVal = (!isNaN(parseFloat(fee.val()))) ? parseFloat(fee.val()) : 0.0,
       total;

     if (itbis.prop('checked') && fee.prop('checked')) {
       total = ((itbisVal * cant) + (feeVal * cant)) + cant;
     } else if (itbis.prop('checked') && !fee.prop('checked')) {
       total = (itbisVal * cant) + cant;
     } else if (!itbis.prop('checked') && fee.prop('checked')) {
       total = (feeVal * cant) + cant;
     } else {
       total = cant;
     }

     totalR.find("span").html(total.toFixed(2));
     totalR.find("input").val(total.toFixed(2));
     totalAllFee();
     totalAllItebis();
     totalAllIMonto();
     totalAllFee();
     totalAllR();

   });

   $(".itbis,.fee").bind('click', function(event, previousText) {
     var itbis = $(this);
     var monto = itbis.parent().parent().find(".monto");
     monto.trigger("textchange");
   });

 }

 function totalAllR() {
   var totalInput = $(".totalRInput");
   var total = 0;

   totalInput.each(function(index) {
     total += (!isNaN(parseFloat($(this).val()))) ? parseFloat($(this).val()) : 0.0;
   });

   total += parseFloat($("#itebisTotalFeeInput").val());

   $("#totalPagarLabel").find("span").html(total.toFixed(2));
   $("#totalPagarInput").val(total.toFixed(2));

 }

 function totalAllItebis() {

   var totalitebis = $(".itbis");
   var total = 0;

   totalitebis.each(function(index) {
     var itebis = $(this);
     var monto = itebis.parent().parent().find(".monto");
     if (itebis.prop('checked')) {
       var itebisVal = parseFloat(itebis.val());
       var montoVal = parseFloat(monto.val());
       var montoItebis = itebisVal * montoVal;
       total += montoItebis;
     }

   });

   $("#totalItebis").find("span").html(total.toFixed(2));
   $("#totalItebisInput").val(total.toFixed(2));
 }

 function totalAllFee() {
   var totalitebis = $(".fee");
   var total = 0;
   var preTotal = parseFloat($("#sub-Total-label").find("span").html());


   totalitebis.each(function(index) {
     var fee = $(this);
     var monto = fee.parent().parent().find(".monto");
     if (fee.prop('checked')) {
       var feeVal = parseFloat(fee.val());
       var montoVal = parseFloat(monto.val());
       var montoFee = feeVal * montoVal;
       total += montoFee;
     }

   });

   var totalPagar = total + preTotal;

   $("#totalFee").find("span").html(total.toFixed(2));
   $("#totalFeeInput").val(total.toFixed(2));
   itebisTotalFee();
 }


 function itebisTotalFee() {

   var fee = parseFloat($("#totalFeeInput").val());
   var itebis = parseFloat($(".itbis")[0].value);
   var preTotal = parseFloat($("#sub-Total-label").find("span").html());

   var totalPagar = fee * itebis;
   $("#pago_final").html("RD$ " + total_a_pagar.toFixed(2));
   $("#itebisTotalFee").find("span").html(totalPagar.toFixed(2));
   $("#itebisTotalFeeInput").val(totalPagar.toFixed(2));

 }









 //function totalAllFee() {
 //
 //	var totalitebis = $(".fee");
 //	var total = 0;
 //	var preTotal = parseFloat($("#sub-Total-label").find("span").html());
 //
 //
 //
 //	var totalPagar = total + preTotal;
 //
 //	$("#itebisTotalFee").find("span").html(total.toFixed(2));
 //	$("#itebisTotalFeeInput").val(total.toFixed(2));
 //
 //}

 function totalAllIMonto() {

   var totalMonto = $(".monto");
   var total = 0;

   totalMonto.each(function(index) {
     var monto = $(this);
     var montoVal = parseFloat(monto.val());
     total += (!isNaN(parseFloat(montoVal))) ? parseFloat(montoVal) : 0.0;


   });

   $("#sub-Total-label").find("span").html(total.toFixed(2));
   $("#subTotalInput").val(total.toFixed(2));
 }

 //function totalAllFee(){
 //
 //		var fee= 0.05;
 //		var preTotal =parseFloat($("#sub-Total-label").find("span").html()) ;
 //		var	 total = preTotal*fee;
 //		var totalPagar = 	total+preTotal;
 //
 //
 //		$("#totalFee").find("span").html(total.toFixed(2));
 //		$("#totalPagarLabel").find("span").html(totalPagar.toFixed(2));
 //		$("#totalFeeInput").val(total.toFixed(2));
 //		$("#totalPagarInput").val(totalPagar.toFixed(2));
 //}



 function boxNumbers() {
   $(document).on("keypress", ".justNUmbers", function(e) {
     var key = window.Event ? e.which : e.keyCode;
     var valuesKey = ((key >= 48 && key <= 57) || key == 46);
     //		//////console.log(key);
     return valuesKey;
   });
 }

 function initCal() {
   var monto = $(".monto");
   monto.each(function(index) {
     $(this).trigger("textchange");
   });
 }

 function listcheck() {
   $("#listcheck input[name='chk[]'][type='checkbox']").trigger("click");
 }

 function cargoAdicionalExtraFn() {
    $(".cargoAdicionalExtra").trigger("keyup");
   // $(document).on("keyup","#AlmacenajeValue",function() {
   //    cargosAdicionalesExtraCalculator();
   // });
   $(document).on("keyup","#AlmacenajeValueaila",function() {
      cargosAdicionalesExtraCalculator();
   });
   $(document).on("keyup", ".cargoAdicionalExtra", function(e) {
      cargosAdicionalesExtraCalculator();
   });
function cargosAdicionalesExtraCalculator() {
   var extra = 0;
   var dynamicGestion = (isNaN(parseFloat($("#gestionAduanaltestBox").val()))) ? 0 : parseFloat($("#gestionAduanaltestBox").val());
   transporteGestionValue = (isNaN(parseFloat($("#transporteGestionValue").val()))) ? 0 : parseFloat($("#transporteGestionValue").val());
   var AlmacenajeValue = (isNaN(parseFloat($("#AlmacenajeValue").val()))) ? 0 : parseFloat($("#AlmacenajeValue").val());
   AlmacenajeValueItebis = AlmacenajeValue  * itebis(tasaitebis);
    // AlmacenajeValue = (isNaN(parseFloat($("#AlmacenajeValue").val()))) ? 0 : parseFloat($("#AlmacenajeValue").val());
    AlmacenajeValueaila = (isNaN(parseFloat($("#AlmacenajeValueaila").val()))) ? 0 : parseFloat($("#AlmacenajeValueaila").val());

    console.log("AlmacenajeValueaila : " + AlmacenajeValueaila);

   $(".cargoAdicionalExtra").each(function() {
     var value = (isNaN(parseFloat($(this).val()))) ? 0 : parseFloat($(this).val());
     extra += value;
   });
   cargoAdicionalExtra = extra + dynamicGestion;
   gestionAduanalitebis = dynamicGestion * itebis(tasaitebis);

    // AlmacenajeValueitebis = AlmacenajeValue * itebis(tasaitebis);
    AlmacenajeValueailaitebis = AlmacenajeValueaila * itebis(tasaitebis);

    var totalAlmacenaje =  + AlmacenajeValueailaitebis + AlmacenajeValueaila;

   totalAPagarExtra = total_a_pagar + cargoAdicionalExtra + gestionAduanalitebis + transporteGestionValue + totalAlmacenaje + AlmacenajeValue + AlmacenajeValueItebis ;

   // console.log("seguro: " + seguro);
   // console.log("transporteGestionValue : " + transporteGestionValue);
   var totalserviciosadicionales = dynamicGestion + seguro + AlmacenajeValueaila ;
   var totalserviciosadicionalesitebis = gestionAduanalitebis + seguroitebis + AlmacenajeValueailaitebis ;
   totalserviciosadicionales += transporteGestionValue ;


    // $("#Almacenajeitebistxt").html("RD$ " + Math.abs(AlmacenajeValueitebis.toFixed(2)));
    $("#Almacenajeitebisailatxt").html("RD$ " + Math.abs(AlmacenajeValueailaitebis.toFixed(2)));
    // $("#AlmacenajeitebisValue").val(Math.abs(AlmacenajeValueitebis.toFixed(2)));
    $("#AlmacenajeitebisValueaila").val(Math.abs(AlmacenajeValueailaitebis.toFixed(2)));


   $("#total_a_pagar").html("RD$ " + Math.abs(totalAPagarExtra.toFixed(2)));
   $("#pago_final").html("RD$ " + Math.abs(totalAPagarExtra.toFixed(2)));
   $("#total_pagar").val(Math.abs(totalAPagarExtra.toFixed(2)));

   $(".descuentoDinamico").trigger("keyup");

   $("#txtgestionaduanalitebis").val(gestionAduanalitebis.toFixed(2));
   $("#gestionAduanalitebis").html("RD$ " + gestionAduanalitebis.toFixed(2));

   $("#totalserviciosadicionales").html("RD$ " + totalserviciosadicionales.toFixed(2));
   $("#totalserviciosadicionalesitebis").html("RD$ " + totalserviciosadicionalesitebis.toFixed(2));
}
   function descuentoDinamicoValue(type, value) {
     if (parseInt(type) === 1) {
       descuentoDinamico = (isNaN(parseFloat(value))) ? 0 : parseFloat(value);
     } else {
       descuentoDinamico = (isNaN(parseFloat(value))) ? 0 : parseFloat(value);

       //console.log(totalCheck);
       descuentoDinamico = itebis(descuentoDinamico) * totalCheck;

     }
     return descuentoDinamico;
   }

   $("input[type='button'].descuentoDinamico").on("click", function(e) {

     var descuentoDinamico = descuentoDinamicoValue($(this).data("type"), $(this).data("descuento"));
     var extra = 0;
     var dynamicGestion = (isNaN(parseFloat($("#gestionAduanaltestBox").val()))) ? 0 : parseFloat($("#gestionAduanaltestBox").val());
     transporteGestionValue = (isNaN(parseFloat($("#transporteGestionValue").val()))) ? 0 : parseFloat($("#transporteGestionValue").val());
     $(".cargoAdicionalExtra").each(function() {
       var value = (isNaN(parseFloat($(this).val()))) ? 0 : parseFloat($(this).val());
       extra += value;
     });
     Total_a_pagarMenosDescuento = ((total_a_pagar) + (dynamicGestion + extra + gestionAduanalitebis + transporteGestionValue)) - descuentoDinamico;

     if (aplicado === false) {
       Total_a_pagarMenosDescuento = (total_a_pagar + cargoAdicionalExtra) - descuentoDinamico;
       aplicado = true;
     } else {
       Total_a_pagarMenosDescuento = total_a_pagar + cargoAdicionalExtra;
       aplicado = false;
     }

     $("#txtdescuento").val(Math.abs(descuentoDinamico.toFixed(2)));
     $("#total_a_pagar").html("RD$ " + Math.abs(Total_a_pagarMenosDescuento.toFixed(2)));
     $("#pago_final").html("RD$ " + Math.abs(Total_a_pagarMenosDescuento.toFixed(2)));
     $("#total_pagar").val(Math.abs(Total_a_pagarMenosDescuento.toFixed(2)));
   });

   // $("input[type='text'].descuentoDinamico").on("keyup", function(e) {
   //
   //   var descuentoDinamico = descuentoDinamicoValue($(this).data("type"), $(this).val());
   //   //console.log("descuento : "+descuentoDinamico);
   //   var extra = 0;
   //   var dynamicGestion = (isNaN(parseFloat($("#gestionAduanaltestBox").val()))) ? 0 : parseFloat($("#gestionAduanaltestBox").val());
   //   transporteGestionValue = (isNaN(parseFloat($("#transporteGestionValue").val()))) ? 0 : parseFloat($("#transporteGestionValue").val());
   //   $(".cargoAdicionalExtra").each(function() {
   //     var value = (isNaN(parseFloat($(this).val()))) ? 0 : parseFloat($(this).val());
   //     extra += value;
   //   });
   //   console.log("extra : " + descuentoDinamico);
   //   cargoAdicionalExtra = extra + dynamicGestion + gestionAduanalitebis;
   //   console.log("gestionAduanal : " + gestionAduanal);
   //   Total_a_pagarMenosDescuento = ((total_a_pagar - gestionAduanal) + (dynamicGestion + cargoAdicionalExtra + gestionAduanalitebis + transporteGestionValue)) - descuentoDinamico;
   //   //     $("#midescuento").val(Math.abs(descuentoDinamico.toFixed(2)));
   //   $("#txtdescuento").val(Math.abs(descuentoDinamico.toFixed(2)));
   //   $("#total_a_pagar").html("RD$ " + Math.abs(Total_a_pagarMenosDescuento.toFixed(2)));
   //   $("#pago_final").html("RD$ " + Math.abs(Total_a_pagarMenosDescuento.toFixed(2)));
   //   $("#total_pagar").val(Math.abs(Total_a_pagarMenosDescuento.toFixed(2)));
   // });

   $("#useItebis").on("click", function(e) {
     $("#listcheck input[name='chk[]'][type='checkbox']").trigger("click");
     $("#listcheck input[name='chk[]'][type='checkbox']").trigger("click");
     if ($(this).is(':checked')) {
       $("#id_tipo_comprobante").prop("disabled", false);
       $("#itebis").html("RD$ " + totalitebis.toFixed(2));
       $("#itbis").attr("value", totalitebis.toFixed(2));
     } else {
       $("#id_tipo_comprobante").prop("disabled", true);
       $("#itebis").html("RD$ " + 0.00);
       $("#itbis").attr("value", 0.00);
     }


   });

   $("#id_tipo_comprobante").change(function(e) {
     var option = parseInt($(this).find("option:selected").data("itbis"));
     ////console.log(option);
     if (option === 0) {
       ////console.log($("#useItebis").is(':checked'));
       if ($("#useItebis").is(':checked')) {
         $("#useItebis").trigger("click");
         $("#useItebis").prop("disabled", true);
       } else {
         $("#useItebis").prop("disabled", false);
       }
     } else {
       $("#useItebis").prop("disabled", false);
     }
     setTimeout(function() {
       $("#id_tipo_comprobante").prop("disabled", false);
     }, 100);
     //    $("#useItebis").prop("disabled", false);
   });

   $("#close-reloadParent").on("click", function() {
     $("#close-reloadParent").addClass("hidden");
     var data = {
       reload: true
     }
     parent.postMessage(data, "*");
   });


   //    close-reloadParent

   //    //console.log($(".link-window-data").length);

   if ($(".link-window-data").length === 1) {
     var data = $(".link-window-data").data();
     parent.postMessage(data, "*");
   }
   ////console.log();



   loadWindowCont()
   modalWindow();
   facturaExpress();
   facturaGestion();
 }

 function receiveMessage(event) {
   var data = event.data;
   var focus = null;
   if (data.reload) {
     location.reload();
   } else {
     for (var id in data) {
       if (id != "focus") {

         if ($("#" + id).hasClass("cantText") || $("#" + id).hasClass("preText")) {
           $("#" + id).val(data[id]);
           $("#" + id).trigger("textchange");
         } else {
           $("#" + id).val(data[id]);
         }

       } else {
         $("#" + data[id]).focus();
         $('html, body').animate({
           scrollTop: $("#" + data[id]).offset().top - 200
         }, 500);
       }

     }
   }

   $("#modal-window-container").removeClass("show");
   $("#modal-window-cont-load").attr("src", "");
 }

 function changeGestion() {
    $("#gestionAduanaltestBox").trigger("keyup");
    $("#AlmacenajeValue").on("keyup", function(e) {

      $("#gestionAduanaltestBox").trigger("keyup");
   });
   $("#gestionAduanaltestBox").on("keyup", function(e) {
      console.log("ss");
     var dynamicGestion = (isNaN(parseFloat($(this).val()))) ? 0 : parseFloat($(this).val());
     transporteGestionValue = (isNaN(parseFloat($("#transporteGestionValue").val()))) ? 0 : parseFloat($("#transporteGestionValue").val());
     var AlmacenajeValue = (isNaN(parseFloat($("#AlmacenajeValue").val()))) ? 0 : parseFloat($("#AlmacenajeValue").val());
     AlmacenajeValueItebis = AlmacenajeValue  * itebis(tasaitebis);
     var extra = 0;
     $(".cargoAdicionalExtra").each(function() {
       var value = (isNaN(parseFloat($(this).val()))) ? 0 : parseFloat($(this).val());
       extra += value;
     });

     gestionAduanalitebis = dynamicGestion * itebis(tasaitebis);

     console.log("seguro: " + seguro);
     console.log("transporteGestionValue : " + transporteGestionValue);

     var totalserviciosadicionales = dynamicGestion + seguro + AlmacenajeValue;
     var totalserviciosadicionalesitebis = gestionAduanalitebis + seguroitebis + AlmacenajeValueItebis;
     totalserviciosadicionales += transporteGestionValue ;
     console.log(totalserviciosadicionales);

     newTotal_a_pagar = (total_a_pagar) + (dynamicGestion + extra + gestionAduanalitebis + transporteGestionValue  + AlmacenajeValueItebis + AlmacenajeValue);
     console.log("newTotal_a_pagar : " + newTotal_a_pagar);
     $("#total_a_pagar").html("RD$ " + Math.abs(newTotal_a_pagar.toFixed(2)));
     $("#pago_final").html("RD$ " + Math.abs(newTotal_a_pagar.toFixed(2)));
     $("#total_pagar").val(Math.abs(newTotal_a_pagar.toFixed(2)));
     $(".cargoAdicionalExtra").trigger("keyup");
     $("#txtgestionaduanalitebis").val(gestionAduanalitebis.toFixed(2));
     $("#gestionAduanalitebis").html("RD$ " + gestionAduanalitebis.toFixed(2));
     $("#totalserviciosadicionales").html("RD$ " + totalserviciosadicionales.toFixed(2));
     $("#totalserviciosadicionalesitebis").html("RD$ " + totalserviciosadicionalesitebis.toFixed(2));
     $("#Almacenajeitebistxt").html("RD$ " + Math.abs(AlmacenajeValueItebis.toFixed(2)));
     $("#AlmacenajeitebisValue").val(Math.abs(AlmacenajeValueItebis.toFixed(2)));
   });
   cargoAdicionalExtraFn();
 }


 function modalWindow() {
   $(".modal-window-open-button").on("click", function(e) {
     e.preventDefault();
     //console.log("show modal");
     var windowSize = $(this).data("box-size").split(","),
       url = $(this).data("url");

     if ($(this).data("reload") == true) {
       $("#close-reloadParent").removeClass("hidden");
       $("#modal-window-cont-load").attr("src", url);
     } else {
       $("#close-window").removeClass("hidden");
       $("#modal-window-cont-load").attr("src", url);
     }

     $("#modal-window-container").addClass("show");

     $("#cont-modal-window").css({
       width: windowSize[0] + "px",
       height: windowSize[1] + "px",
       marginTop: ((windowSize[1] / 2) * (-1)) + "px",
       marginLeft: ((windowSize[0] / 2) * (-1)) + "px"

     });



   });

   $("#close-window").on("click", function() {
     $("#close-window").addClass("hidden");
     $("#modal-window-container").removeClass("show");
     $("#modal-window-cont-load").attr("src", "");
   });

   $(document).on("click", "#close-reloadParent", function() {

     $("#close-reloadParent").addClass("hidden");
     var data = {
       reload: true
     }
     parent.postMessage(data, "*");
   });


   //    close-reloadParent

   //    //console.log($(".link-window-data").length);

   if ($(".link-window-data").length === 1) {
     var data = $(".link-window-data").data();
     parent.postMessage(data, "*");
   }

 }

 function loadWindowCont() {

   $(".link-window-data").on("click", function(event) {
     event.preventDefault();
     var data = $(this).data();
     parent.postMessage(data, "*");
   });
 }
 var counterExpress = 1;

 function facturaExpress() {
   var expressRowTemplate =
     '<tr><td align="left" valign="top" bgcolor="#F9F9F9"></td>' +
     '<td align="center" valign="top" bgcolor="#F9F9F9"><input type="text" name="peso" value="" class="pesoExpress justNUmbers" style="width:100px" />  </td>' +
     '<td align="left" valign="top" bgcolor="#F9F9F9"><input type="text" name="contenido" value="" class="contenidoExpress" /> </td>' +
     '<td align="left" valign="top" bgcolor="#F9F9F9"><input type="text" name="fob" value="" class="fobExpress justNUmbers" /></td>' +
     '<td align="center" valign="top" bgcolor="#F9F9F9"><input type="text" name="guia" value="" class="guiaExpress" /> </td>' +
     '<td align="center" valign="top" bgcolor="#F9F9F9"><input type="text" name="piezas" value="" class="piezasExpress" /> </td>' +
     '<td align="center" valign="top" bgcolor="#F9F9F9"><input type="text" name="monto" value="" class="montoExpress" />   </td>' +
     '<td align="center" valign="top" bgcolor="#F9F9F9"><input type="text" name="combustible" disabled value="" class="combustibleExpress" /> </td>' +
     '<td align="center" valign="top" bgcolor="#F9F9F9"> <input type="checkbox" name="checkbox" checked class="useItebisItemExpress" /></td>' +
     '<td align="right" valign="top" bgcolor="#F9F9F9"><input type="hidden" name="seguroExpresstxt" value="" class="seguroExpresstxt" /> <input type="hidden" name="totalExpresstxt" value="" class="totalExpresstxt" /> RD$ <span class="totalExpress">  </span> </td></tr>';

   $("#AddExpressRow").on("click", function() {
     counterExpress++;
     var tr = $(expressRowTemplate)
     tr.find("input").each(function(index) {
       $(this).attr("name", $(this).attr("name") + counterExpress);
     });
     $(".expressTable tbody").append(tr);
   });

   // $(document).on("keyup", ".pesoExpress", function() {
   //   var peso = (isNaN(parseFloat($(this).val()))) ? 0 : parseFloat($(this).val());
   //   var combustible = (isNaN(parseFloat($("#combustible").val()))) ? 0 : parseFloat($("#combustible").val());
   //   var combustibleCost = peso * combustible;
   //   $(this).parent().parent().find(".combustibleExpress").val(combustibleCost.toFixed(2));
   //   totalExpress(this);
   //   cargosAdicionales();
   //   $('.montoExpress').trigger("keyup");
   // });

   $(document).on("keyup", ".combustibleExpress", function() {
      totalExpress(this);
     cargosAdicionales();
     $('.montoExpress').trigger("keyup");
   });
   $(document).on("keyup", ".montoExpress", function() {
     totalExpress(this);
     fleteExpress();
     subTotalExpress();
   });

   $(document).on("keyup", "#descuentoExpress", function() {
     subTotalExpress();
   });

   $(document).on("keyup", ".fobExpress", function() {
     var valorseguro = 0;
     var valor_declarado = (isNaN(parseFloat($(this).val()))) ? 0 : parseFloat($(this).val());
     var txtseguro = (isNaN(parseFloat($("#txtseguro").val()))) ? 0 : parseFloat($('#txtseguro').val());
     var montodelseguro = 0;
     for (var gseguro = 0; gseguro < valor_declarado; gseguro += 100) {
       montodelseguro += txtseguro;
     }
     if ($(this).parent().parent().find(".useItebisItemExpress").is(':checked')) {
       $(this).parent().parent().find(".seguroExpresstxt").val(montodelseguro.toFixed(2));
     } else {
       $(this).parent().parent().find(".seguroExpresstxt").val(0.00);
     }
     totalSeguroExpress();
   });

   $(document).on("click", ".useItebisItemExpress", function() {
     $('.fobExpress').trigger("keyup");
     itebisExpress();
   });
   $(document).on("click", "#useItebisExpress", function() {
     $('.montoExpress').trigger("keyup");
   });

   $(document).on("click", "#validarExpress", function() {
     validarPagoExpress();
   });



   function totalExpress(element) {
     var comb = (isNaN(parseFloat($(element).parent().parent().find(".combustibleExpress").val()))) ? 0 : parseFloat($(element).parent().parent().find(".combustibleExpress").val());
     var monto = (isNaN(parseFloat($(element).parent().parent().find(".montoExpress").val()))) ? 0 : parseFloat($(element).parent().parent().find(".montoExpress").val());
     var totalExpress = comb + monto;
     $(element).parent().parent().find(".totalExpress").html(totalExpress.toFixed(2));
     $(element).parent().parent().find(".totalExpresstxt").val(totalExpress.toFixed(2));
   }

   function fleteExpress() {
     var flete = 0;
     $(".montoExpress").each(function() {
       var value = (isNaN(parseFloat($(this).val()))) ? 0 : parseFloat($(this).val());
       flete += value;
     });
     $("#totalFleteExpress").html("RD$ " + flete.toFixed(2));
     $("#totalFleteExpresstxt").val(flete.toFixed(2));
     subTotalExpress();
   }

   function cargosAdicionales() {
     var cargos = 0;
     $(".combustibleExpress").each(function() {
       var value = (isNaN(parseFloat($(this).val()))) ? 0 : parseFloat($(this).val());
       cargos += value;
     });
     $("#cargosAdicionalesExpress").html("RD$ " + cargos.toFixed(2));
     $("#cargosAdicionalesExpresstxt").val(cargos.toFixed(2));
   }

   function totalSeguroExpress() {
     var seguro = 0;
     $(".seguroExpresstxt").each(function() {
       var value = (isNaN(parseFloat($(this).val()))) ? 0 : parseFloat($(this).val());
       seguro += value;
     });
     var itebisP = (isNaN(parseFloat($("#useItebisExpress").val()))) ? 0 : parseFloat($("#useItebisExpress").val());

     var totalItebisseguroExpress = seguro * itebis(itebisP);

     $("#totalseguroExpress").html("RD$ " + seguro.toFixed(2));
     $("#totalseguroExpresstxt").val(seguro.toFixed(2));
     $("#totalItebisseguroExpress").html("RD$ " + totalItebisseguroExpress.toFixed(2));
     $("#totalItebisseguroExpresstxt").val(totalItebisseguroExpress.toFixed(2));
   }

   function itebisExpress() {
     var monto = (isNaN(parseFloat($("#subtotalExpresstxt").val()))) ? 0 : parseFloat($("#subtotalExpresstxt").val());
     var seguro = (isNaN(parseFloat($("#totalseguroExpresstxt").val()))) ? 0 : parseFloat($("#totalseguroExpresstxt").val());
     var itebisP = (isNaN(parseFloat($("#useItebisExpress").val()))) ? 0 : parseFloat($("#useItebisExpress").val());
     var itebisVal = 0;
     if ($("#useItebisExpress").is(':checked')) {
       itebisVal = (monto + seguro) * itebis(itebisP);
     }
     $("#itebisexpress").html("RD$ " + itebisVal.toFixed(2));
     $("#itebisexpresstxt").val(itebisVal.toFixed(2));
     TotalAPagarExpress();
   }

   function subTotalExpress() {
     var flete = (isNaN(parseFloat($("#totalFleteExpresstxt").val()))) ? 0 : parseFloat($("#totalFleteExpresstxt").val());
     var cargosAdicioneles = (isNaN(parseFloat($("#cargosAdicionalesExpresstxt").val()))) ? 0 : parseFloat($("#cargosAdicionalesExpresstxt").val());
     var subtotalExpress = flete + cargosAdicioneles;
     var descuentoExpress = (isNaN(parseFloat($("#descuentoExpress").val()))) ? 0 : parseFloat($("#descuentoExpress").val());
     var descuento = 0;
      if($("#descuentoExpress").data('type') == 0){
         descuento = subtotalExpress * itebis(descuentoExpress);
      }else{
         descuento = descuentoExpress;
      }
      var subtotal = subtotalExpress - descuento;
      $("#descuentoExpresstxt").val(descuento.toFixed(2));
     $("#subtotalExpress").html("RD$ " + subtotal.toFixed(2));
     $("#subtotalExpresstxt").val(subtotal.toFixed(2));
     itebisExpress();
   }

   function TotalAPagarExpress() {
     var itebis = (isNaN(parseFloat($("#itebisexpresstxt").val()))) ? 0 : parseFloat($("#itebisexpresstxt").val());
     var subtotal = (isNaN(parseFloat($("#subtotalExpresstxt").val()))) ? 0 : parseFloat($("#subtotalExpresstxt").val());
     var totalseguroExpresstxt = (isNaN(parseFloat($("#totalseguroExpresstxt").val()))) ? 0 : parseFloat($("#totalseguroExpresstxt").val());
     var totalItebisseguroExpresstxt = (isNaN(parseFloat($("#totalItebisseguroExpresstxt").val()))) ? 0 : parseFloat($("#totalItebisseguroExpresstxt").val());
     var total = itebis + subtotal + totalseguroExpresstxt;
     $("#totalApapgarexpress").html("RD$ " + total.toFixed(2));
     $("#totalApapgarexpresstxt").val(total.toFixed(2));
   }



 }

 function facturaGestion() {

    var expressRowTemplate =
   ' <tr>'+
   '<td align="center"><input name="chk[]" type="hidden" />&nbsp;</td>'+
   '<td align="center"><input type="text" name="peso1" id="peso1" style="width:100px;" required="required" placeholder="Libras"  /></td>'+
   '<td align="center"><input type="text" name="contenido1" id="contenido1"  style="width:400px;" required="required" placeholder="Contenido"  /></td>'+
   '<td align="center"><input type="text" name="guia1" id="guia1"  style="width:200px;" required="required" placeholder="Guia o Tracking number"  /></td>'+
   '<td align="center"><input name="piezas1" type="text" required="required" id="piezas1"  style="width:100px;" value="1"  /></td>'+
   '</tr>';

    $("#AddGestionRow").on("click", function() {
     counterExpress++;
     var tr = $(expressRowTemplate)
     tr.find("input").each(function(index) {
       $(this).attr("name", $(this).attr("name") + counterExpress);
     });
     $(".expressTable tbody").append(tr);
    });

   $(document).on("keyup", "#transporteGestion, #gestionAduanalteGestion", function() {
     subTotalGestion();
     itebisGestion();
   });

   $(document).on("click", "#useItebisGestion", function() {
     $('#gestionAduanalteGestion').trigger("keyup");
   });

   function subTotalGestion() {
     var gestion = (isNaN(parseFloat($("#gestionAduanalteGestion").val()))) ? 0 : parseFloat($("#gestionAduanalteGestion").val());
     var transporte = (isNaN(parseFloat($("#transporteGestion").val()))) ? 0 : parseFloat($("#transporteGestion").val());
     var subtotalGestion = gestion + transporte;
     $("#subtotalGestion").html("RD$ " + subtotalGestion.toFixed(2));
     $("#subtotalGestiontxt").val(subtotalGestion.toFixed(2));
     TotalAPagarGestion();
   }

   function itebisGestion() {
     var gestion = (isNaN(parseFloat($("#gestionAduanalteGestion").val()))) ? 0 : parseFloat($("#gestionAduanalteGestion").val());
     var itebisP = (isNaN(parseFloat($("#useItebisGestion").val()))) ? 0 : parseFloat($("#useItebisGestion").val());
     var itebisVal = 0;
     if ($("#useItebisGestion").is(':checked')) {
       itebisVal = gestion * itebis(itebisP);
     }
     $("#itebisGestion").html("RD$ " + itebisVal.toFixed(2));
     $("#itebisGestiontxt").val(itebisVal.toFixed(2));
     subTotalGestion();
     TotalAPagarGestion();
   }

   function TotalAPagarGestion() {
      var subtotal = (isNaN(parseFloat($("#subtotalGestiontxt").val()))) ? 0 : parseFloat($("#subtotalGestiontxt").val());
      var itebis = (isNaN(parseFloat($("#itebisGestiontxt").val()))) ? 0 : parseFloat($("#itebisGestiontxt").val());
      var total = subtotal + itebis;
      $("#totalApapgarexpress").html("RD$ " + total.toFixed(2));
      $("#totalApapgarexpresstxt").val(total.toFixed(2));
   }

 }

 function validarPagoExpress() {

   var totalTxt = 0;
   var ventanaTrue = $("<div id='bgAll' class='bgAll'><div class='msjAlert'><h3>Generar la factura?<span id='close'>X</span></h3><h4>Cambio del Cliente :</h4><h5>$<span id='valorRetornar'></span></h5><div><input id='Continuar' type='button' name='boton'  value='Continuar' class='boton gree' /><input type='button' name='boton' id='Cancelar' class='boton red' value='Cancelar' /></div></div></div>");
   var ventanaFalse = $("<div id='bgAll' class='bgAll'><div class='msjAlert'><h3>No se puede generar la factura<span id='close'>X</span></h3><h4>Aun falta por pagar :</h4><h5>$<span id='valorRetornar'></span></h5></div></div>");
   var ventanaO = $("<div id='bgAll' class='bgAll'><div class='msjAlert'><h3>Error!<span id='close'>X</span></h3><h4>1-)Debe insertar datos de al menos un paquete.</h4><h4>2-)Debe Colocar un monto a pagar.</h4><h4>3-)Debe Colocar un tipo de comprobante fiscal.</h4></div></div>");
   var pagos = $("#container").find("input");

   if ($("#id_tipo_comprobante").val() == "") {
     $("#main").append(ventanaO);
     $('#close').on('click', function() {
      closeBgAll();
     });
     return;
   }

   if ($("#tipo_factura").val() != "2") {
     $.each(pagos, function(key, value) {

      if (!(isNaN(parseFloat($(value).val()))) && $(value).hasClass("recibido")) {
         totalTxt += parseFloat($(value).val());
      } else {

         totalTxt += 0.0;

      }

     });

     $("#monto_recibido").val(totalTxt.toFixed(2));
     if (totalTxt >= parseFloat($("#totalApapgarexpresstxt").val())) {
      var valortotal = totalTxt - parseFloat($("#totalApapgarexpresstxt").val());
      ventanaTrue.find("#valorRetornar").html(valortotal.toFixed(2));

      $("#main").append(ventanaTrue);

     } else if (totalTxt < parseFloat($("#totalApapgarexpresstxt").val()) && totalTxt > 0 && parseFloat($("#totalApapgarexpresstxt").val()) > 0) {

      var valortotal = parseFloat($("#totalApapgarexpresstxt").val()) - totalTxt;
      ventanaFalse.find("#valorRetornar").html(valortotal.toFixed(2));
      $("#main").append(ventanaFalse);

     } else {

      $("#main").append(ventanaO);

     }

     $('#Continuar').on('click', function() {
      //////console.log($("#form-fact ").attr("id"));
      $("#form").submit();
     });

     $('#close').on('click', function() {
      closeBgAll();
     });

     $('#Cancelar').on('click', function() {
      closeBgAll();
     });

   } else {

     var total = parseFloat($("#totalApapgarexpresstxt").val());
     if (total > 0) {
      $("#form").submit();
     } else {
      $("#main").append(ventanaO);
     }

     $('#Continuar').on('click', function() {
      //////console.log($("#form-fact ").attr("id"));
      $("#form").submit();
     });

     $('#close').on('click', function() {
      closeBgAll();
     });

     $('#Cancelar').on('click', function() {
      closeBgAll();
     });
   }
}
