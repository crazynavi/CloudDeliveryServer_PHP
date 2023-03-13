<div class="body">
    <div class="cont">



        <div class="mainContDato">

            <script type="text/javascript">
                function MM_jumpMenu(targ, selObj, restore) { //v3.0
                    eval(targ + ".location='" + selObj.options[selObj.selectedIndex].value + "'");
                    if (restore) selObj.selectedIndex = 0;
                }
            </script>


            <style>
                #myInput {
                    background-image: url('https://www.w3schools.com/css/searchicon.png');
                    /* Add a search icon to input */
                    background-position: 10px 12px;
                    /* Position the search icon */
                    background-repeat: no-repeat;
                    /* Do not repeat the icon image */
                    width: 100%;
                    /* Full-width */
                    font-size: 16px;
                    /* Increase font-size */
                    padding: 12px 20px 12px 40px;
                    /* Add some padding */
                    border: 1px solid #ddd;
                    /* Add a grey border */
                    margin-bottom: 12px;
                    /* Add some space below the input */
                }

                #myTable {
                    border-collapse: collapse;
                    /* Collapse borders */
                    width: 100%;
                    /* Full-width */
                    border: 1px solid #ddd;
                    /* Add a grey border */
                    font-size: 18px;
                    /* Increase font-size */
                }

                #myTable th,
                #myTable td {
                    text-align: left;
                    /* Left-align text */
                    padding: 12px;
                    /* Add padding */
                }

                #myTable tr {
                    /* Add a bottom border to all table rows */
                    border-bottom: 1px solid #ddd;
                }

                #myTable tr.header,
                #myTable tr:hover {
                    /* Add a grey background color to the table header and on hover */
                    background-color: #f1f1f1;
                }
            </style>

            <script>
                function myFunction() {
                    // Declare variables 
                    var input, filter, table, tr, td, i;
                    input = document.getElementById("myInput");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable");
                    tr = table.getElementsByTagName("tr");

                    // Loop through all table rows, and hide those who don't match the search query
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[2];
                        if (td) {
                            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }
                    }
                }
            </script>

            <h1>Listado de Courier

                <a href="#" class="item-block-list form-view-btn modal-window-open-button boton blue right"
                    data-reload="true" data-box-size="850,600"
                    data-url="modal.php?VIEW=AFIRMARPAGOS&amp;sesion=JqiV,uXYG6UvGXVCqnvv91&amp;paramentro1=52&amp;u=JqiV,uXYG6UvGXVCqnvv91&amp;paquete=&amp;GUIA=&amp;ESTATUS_proceso=">
                    <span class=" ">Realizar Pagos</span></a>
            </h1>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar Nombre">

        </div>
    </div>
</div>