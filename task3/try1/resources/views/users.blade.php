<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                @include('common.errors')
                <form action="{{ url('user') }}" method="POST" class="form-horizontal" accep-charset="UTF-8">
                    {{ csrf_field() }}

                    <!-- User Name -->
                    <div class="form-group">
                        <label for="user">User</label>

                        <input type="text" name="name" id="task-name">
                    </div>

                    <!-- Email Id -->
                    <div class="form-group">
                        <label for="email">E-mail id</label>

                        <input type="text" name="email" id="email-id">
                    </div>
                   
                    <!-- Add Register Button -->
                    <button type="submit" name="register">
                         Register
                    </button>
                </div>
            </div>
        </div>
    </body>
</html>
