<?php $page = 'login'; ?>
<?php include 'head.php'; ?>
<body>
<div class="main">
    <div class="container">
        <section class="hgroup">
            <h1>Register or Sign in</h1>
            <ul class="breadcrumb pull-right">
                <li><a href="index.html">Home</a></li>
                <li class="active">Register of Sign in</li>
            </ul>
        </section>
        <section>
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="signin">
                        <p class="sign_title">Log in with your site account</p>
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="form col-lg-8">
                                <form action="loginAction.php" method="POST" class="form-signin">
                                    <input name="username" type="text" class="form-control" placeholder="Username">
                                    <input name="password" type="password" class="form-control"
                                           placeholder="Password">
                                    <input type="hidden" name="loginSubmitted" value="TRUE">
                                    <button type="submit" class="btn btn-primary btn-lg">Sign in</button>
                                </form>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
</body>
