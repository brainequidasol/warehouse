<?php include 'header.php' ?>
<!-- Begin Here --> 
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">  <!-- Column -->
                <div class="pull-right">
                    <select ng-model="queryBy" class="form-control">
                        <option value="$"></option>
                        <option value="class">Class</option>
                        <option value="code">Code</option>
                        <option value="item_type">Item Type</option>
                        <option value="material_desc">Material Description</option>
                        <option value="wrh">WRH</option>
                    </select>
                </div>
                <div class="pull-right">
                <input style="width: 100px" ng-model="search[queryBy]" type="text" class="form-control" placeholder="Search"></div>
                    <br><br>
                <table id="search" class='table table-bordered table-hover'>
                    <thead> 
                        <tr>
                            <th ng-click="sort('id')" scope='col'>ID
                                <span class="glyphicon sort-icon" ng-show="sortBy=='id'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span></th>
                                <th scope='col'>CODE</th>
                                <th scope='col'>CLASS</th>
                                <th scope='col'>ITEM TYPE</th>
                                <th scope='col'>MATERIAL DESCRIPTION</th>
                                <th scope='col'>QTY</th>
                                <th scope='col'>UNIT</th>
                                <th scope='col'>RESV</th>
                                <th scope='col'>WRH</th>
                            </tr>
                        </thead>
                        <tbody ng-init="getall()">
                            <tr dir-paginate="d in names |  filter:search | productsPerPage: 15"> 
                                <td>{{ d.id }}</td>
                                <td>{{ d.code }}</td>
                                <td>{{ d.class }}</td>
                                <td>{{ d.item_type }}</td>
                                <td>{{ d.material_desc }}</td>
                                <td>{{ d.quantity }}</td>
                                <td>{{ d.unit }}</td>
                                <td>{{ d.resv }}</td>
                                <td>{{ d.wrh }}</td>
                                <!-- <td>
                                    <a href="#" ng-click="edituser(d.id)">Edit</a> | 
                                    <a href="" ng-click="deleteuser(d.id)">Delete</a>
                                </td> -->
                            </tr>
                        </tbody>
                    </table>
                 <!-- Pagination -->
                <dir-pagination-controls
                    max-size="5"
                    direction-links="true"
                    boundary-links="true" >
                </dir-pagination-controls>
                <!-- End Pagination -->        
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">Add</button> -->
                <!-- Modal Structure -->
                <div id="modal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Add</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="code">Code</label>
                                            <input type="text" class="form-control" ng-model="code" id="code" type="text" class="validate" placeholder="Code">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="class">Class</label>
                                            <input type="text" class="form-control" ng-model="class" id="class" placeholder="Class">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" ng-click="addnew()" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="dirPagination.js"></script>
<script>

    var app = angular.module('myApp', ['angularUtils.directives.dirPagination']);
    app.controller('usersCtrl', function($scope, $http) {

        $scope.getall = function(){
            $http.get("getresult.php")
            .success(function (response) {$scope.names = response.records;});
        }

        $scope.addnew = function() {
            $http.post('addtodb.php',{'code' : $scope.code, 'class' : $scope.class}
                ).success(function (data, status, headers, config) {
                    $scope.getall();
                });
            }

            $scope.deleteuser = function(id) {  
                var x = confirm("Are you sure to delete this record");
                if(x){
                    $http.post('delete.php',{'id' : id}).success(function (data, status, headers, config)
                    {               
                        $scope.getall();    
                    });
                }else{

                }
            } //end deleteuserfunction

        
        $scope.queryBy = '$'







});
</script>

</body>

</html>
