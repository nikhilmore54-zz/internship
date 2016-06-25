<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>

        <!-- CSS And JavaScript -->
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"> 
        <!-- JS ===================== -->
        <!-- load angular -->
        <script src="http://code.angularjs.org/1.2.6/angular.js"></script> 
        <script src="app.js"></script>
    </head>

    <body ng-app="validationApp" ng-controller="mainController">
        <div class="container">
        <!-- Display Validation Errors -->

        <!-- New Task Form -->
        <form name="userForm"action="{{ url('user') }}" method="POST" class="form-horizontal" ng-submit="submitForm(userForm.$valid)">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group" ng-class="{ 'has-error' : userForm.name.$invalid && !userForm.name.$pristine }">
                <label for="user" class="col-sm-3 control-label">User</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="name" class="form-control" ng-model="name" required>
                    <p ng-show="userForm.name.$invalid && !userForm.name.$pristine" class="help-block">You name is required.</p>
                </div>
            </div>
            <div class="form-group"i ng-class="{ 'has-error' : userForm.name.$invalid && !userForm.name.$pristine }">
                <label for="task" class="col-sm-3 control-label">E-mail</label>

                <div class="col-sm-6">
                    <input type="email" name="email" id="email" class="form-control" ng-model="email" required>
                    <p ng-show="userForm.email.$invalid && !userForm.email.$pristine" class="help-block">You email is required.</p>
                </div>
            </div>
            <div class="form-group" ng-class="{ 'has-error' : userForm.name.$invalid && !userForm.name.$pristine }">
                <label for="task" class="col-sm-3 control-label">Phone</label>

                <div class="col-sm-6">
                    <input type="tel" name="phone" id="phone" class="form-control" ng-model="phone">
                    <p ng-show="userForm.phone.$invalid && !userForm.phone.$pristine" class="help-block">You phone is required.</p>
                </div>

            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default" ng-disabled="userForm.$invalid">
                        <i class="fa fa-plus"></i> Register
                    </button>
                </div>
            </div>
        </form>
    </div>
    </body>
</html>
