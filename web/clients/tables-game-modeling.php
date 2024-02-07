<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "config.php";
?>
<head>
    <title>Telerik Grid | IDY Project Modeling</title>
    <?php include 'layouts/head.php'; ?>
    <!-- Responsive Table css -->
   
    <!-- <script src="content/jquery.knob-2.min.js"></script> -->

    <?php include 'layouts/head-style.php'; ?>

</head>
<body>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

               <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                           
                                <div id="grid"></div>
                                <div id="details"></div>
                                <!-- <button class="k-button">Refresh</button> -->
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end row -->

               

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<?php include 'layouts/right-sidebar.php'; ?>
<!-- Right-bar -->

<!-- JAVASCRIPT -->
<?php include 'layouts/footer-scripts.php'; ?>


<script src="assets/js/pages/form-element.init.js"></script>

<script src="assets/js/app.js"></script>


<script>
var drupalUrl = '<?php echo $drupalurl; ?>';
$(document).ready(function() {
            $("#grid").kendoGrid({
                dataSource: {
                    //autoSync: true,
                    batch: true,
                    pageSize: 15,
                    group: [{
                    field: "Publisher",
                    dir: "asc"
                }],
                    //autoSync: true,
                    requestStart: function() {
                          showLoader();
                    },
                    requestEnd: function(e) {
                        
                        if(e.type=="update" || e.type=="create")
                            {
                                Refreshtree();
                                onDataBound();
                            }
                        hideLoader();
                    },
                    transport: {
                            read: {
                            url: '' + drupalUrl + '/clients/transport-templates-modeling-read.php',
                            contentType: "application\/json",
                            type: "GET"
                        },
                    
                        update: {
                            url: '' + drupalUrl + '/clients/transport-templates-modeling-update.php',
                            contentType: "application\/json",
                            type: "POST"
                        },
                        create: {
                            url: '' + drupalUrl + '/clients/transport-templates-modeling-create.php',
                            contentType: "application\/json",
                            type: "POST"
                        },
                        destroy: {
                            url: '' + drupalUrl + '/clients/transport-templates-modeling-delete.php',
                            contentType: "application\/json",
                            type: "POST"
                        },
                            "parameterMap": function(data, type) {
                            if (type != "read") {
                            // send take as "$top" and skip as "$skip"
                            return kendo.stringify(data);
                            }
                        }
                
                    },
                    "schema": {
                        "model": {
                        "id": "id",
                        "fields": [{
                            "field": "id",
                            "type": "string",
                            "editable": true,
                            "nullable": true
                        },
                        {
                            "field": "GameName",
                            "from": "attributes.title",
                            "type": "string",
                            "editable": true,
                            "nullable": true
                        },
                        {
                            "field": "NumberPlayers",
                            "from": "attributes.field_players",
                            "type": "string",
                            "editable": true,
                            "nullable": true
                        },
                        {
                            "field": "Description",
                            "from": "attributes.field_description",
                            "type": "string",
                            "nullable": true
                        }, 
                        {
                            "field": "Publisher",
                            "from": "attributes.field_publisher",
                            "type": "string",
                            "editable": true,
                            "nullable": true
                        },
                        {
                            "field": "Rating",
                            "from": "attributes.field_rating",
                            "type": "number",
                            "nullable": true
                        },
                        {
                            "field": "Created",
                            "from": "attributes.created",
                            "type": "string",
                            "editable": false,
                            "nullable": true
                        },
                        {
                            "field": "Modified",
                            "from": "attributes.changed",
                            "type": "string",
                            "editable": false,
                            "nullable": true
                        },
                        {
                            "field": "attributes",
                            "defaultValue": {},                
                        },
                        {
                            "field": "relationships",
                            "defaultValue": {},           
                        }
                ]
                },
                "data": "data",
                //"aggregates": "aggregates",
                "errors": "errors"
            }
                },
                
                
                messages: {
                commands: {
                    edit: "Edit",
                    update: "Update",
                    canceledit: "Cancel",
                    create: "Add New Game",
                    createchild: " ",
                    destroy: "Delete",
                    excel: "Export XSLX",
                    pdf: "Export to PDF"
                }
                },
                scrollable: {
                    endless: true
                },
                pageable: {
                    numeric: false,
                    previousNext: false
                },
                edit: onGridEditing,
                editable: "inline",
                pageable: true,
                sortable: true,
                navigatable: true,
                resizable: true,
                reorderable: true,
                groupable: true,
                filterable: true,
                dataBound: onDataBound,
                toolbar: ["create","excel", "pdf", "search"],
                columns: [
                    { 
                        field: "GameName", 
                        title: "Game Title", 
                        width: 120, 
                        "hidden": false,
                        //template: "<input class='k-checkbox' type='checkbox' data-bind='checked:attributes.field_project_enabled' />",
                       
                    },
                    { 
                        field: "Publisher", 
                        title: "Publisher", 
                        //width: 120, 
                        "hidden": false,
                        //template: "<input class='k-checkbox' type='checkbox' data-bind='checked:attributes.field_project_enabled' />",
                    }, 
                    { 
                        field: "NumberPlayers", 
                        title: "Number Of Players", 
                       // width: 80, 
                        "hidden": false,
                        //template: "<input class='k-checkbox' type='checkbox' data-bind='checked:attributes.field_project_enabled' />",
                    }, 
                    { 
                        field: "Description", 
                        title: "Description", 
                        //width: 320, 
                        "hidden": false,
                        //template: "<input class='k-checkbox' type='checkbox' data-bind='checked:attributes.field_project_enabled' />",
                    }, 
                    {
                        field: "Rating",
                        title: "Rating",
                        //format: "{0}",
                        template: "<span id='chart_#= id#' class='sparkline-chart'></span>",
                        // width: 220
                        //template: '#=StudyTypeTemplate(data)#',
                        //editor: studytypemultiselect
                    },
                    {
                        field: "Created",
                        title: "Created"
                    },
                    {
                        field: "Modified",
                        title: "Last Modified"
                    },
                    { command: ["edit", "destroy"], title: "&nbsp;", width: "250px" },
                    
                ]
            });

            //var grid = $("#grid").data("kendoGrid");
            //console.log(grid);
            //grid.tbody.on("click", ".k-checkbox", onClick); 
        });







      function onDataBound(e) {
            var grid = this;
            grid.table.find("tr").each(function () {
                var dataItem = grid.dataItem(this);
                

                $(this).find(".sparkline-chart").kendoSparkline({
                    legend: {
                        visible: false
                    },
                    data: [dataItem.Rating],
                    type: "bar",
                    chartArea: {
                        margin: 0,
                        width: 180,
                        background: "transparent"
                    },
                    seriesDefaults: {
                        labels: {
                            visible: true,
                            format: '{0}%',
                            background: 'none'
                        }
                    },
                    categoryAxis: {
                        majorGridLines: {
                            visible: false
                        },
                        majorTicks: {
                            visible: false
                        }
                    },
                    valueAxis: {
                        type: "numeric",
                        min: 0,
                        max: 130,
                        visible: false,
                        labels: {
                            visible: false
                        },
                        minorTicks: { visible: false },
                        majorGridLines: { visible: false }
                    },
                    tooltip: {
                        visible: false
                    }
                });

                kendo.bind($(this), dataItem);
            });
        }


        function onGridEditing(e) {

        }

////////// show and hide loaders

        function showLoader() {
                kendo.ui.progress($("div[data-role='grid']"), true);
              }
              
         function hideLoader() {
                kendo.ui.progress($("div[data-role='grid']"), false);
              }

        
          function Refreshtree(e) {
                var projectGrid = $("#grid").data("kendoGrid");
                projectGrid.dataSource.read();
                projectGrid.refresh();

          }
        
    </script>

</body>
</html>
